<?php
declare(strict_types=1);

$site = require __DIR__ . '/site-config.php';
$config = require __DIR__ . '/smtp-config.php';
$primaryDomain = (string) ($site['primary_domain'] ?? 'hafermilch.de');
$currentHost = currentSiteHost($site);
$domainBundle = (string) ($site['domain_bundle'] ?? $primaryDomain);
$mailSubjectTarget = (string) ($site['mail_subject_target'] ?? $domainBundle);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ./index.php#contact', true, 302);
    exit;
}

if (!empty($_POST['website'] ?? '')) {
    $honeypotRedirect = ($_POST['topic'] ?? 'domain') === 'ads'
        ? './werbeflaechen.php?status=success#contact'
        : './index.php?status=success#contact';
    header('Location: ' . $honeypotRedirect, true, 302);
    exit;
}

$name = trim((string) ($_POST['name'] ?? ''));
$email = trim((string) ($_POST['email'] ?? ''));
$company = trim((string) ($_POST['company'] ?? ''));
$message = trim((string) ($_POST['message'] ?? ''));
$topic = $_POST['topic'] ?? 'domain';
$redirectBase = $topic === 'ads' ? './werbeflaechen.php' : './index.php';

if ($name === '' || $email === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: ' . $redirectBase . '?status=error&topic=' . rawurlencode((string) $topic) . '#contact', true, 302);
    exit;
}

$to = $config['to_email'] ?? 'info@hafermilch.de';
$fromEmail = $config['from_email'] ?? $to;
$fromName = $config['from_name'] ?? $primaryDomain;
$requestType = $topic === 'ads' ? 'Advertising partnership inquiry' : 'Domain inquiry';
$requestTarget = $topic === 'ads' ? $currentHost : $mailSubjectTarget;
$subject = $requestType . ' via ' . $requestTarget;
$safeName = preg_replace('/[\r\n]+/', ' ', $name) ?: 'Unknown';
$safeEmail = preg_replace('/[\r\n]+/', '', $email) ?: '';
$safeCompany = preg_replace('/[\r\n]+/', ' ', $company) ?: '-';

$bodyLines = [
    $requestType . ' via ' . $requestTarget,
    '',
    'Request type: ' . $requestType,
    'Name: ' . $safeName,
    'Email: ' . $safeEmail,
    'Company: ' . $safeCompany,
    'Inbound domain: ' . $currentHost,
];

if ($topic !== 'ads') {
    $bodyLines[] = 'Requested set: ' . $domainBundle;
}

$bodyLines[] = '';
$bodyLines[] = 'Message:';
$bodyLines[] = $message;

$body = implode("\r\n", $bodyLines);

try {
    $sent = hasSmtpConfig($config)
        ? sendViaSmtp($config, $fromEmail, $fromName, $to, $safeEmail, $subject, $body)
        : sendViaPhpMail($fromEmail, $fromName, $to, $safeEmail, $subject, $body);
} catch (Throwable $exception) {
    logMailError($exception->getMessage());
    $sent = false;
}

header('Location: ' . $redirectBase . '?status=' . ($sent ? 'success' : 'error') . '&topic=' . rawurlencode((string) $topic) . '#contact', true, 302);
exit;

function hasSmtpConfig(array $config): bool
{
    return ($config['smtp_host'] ?? '') !== '' && ($config['smtp_username'] ?? '') !== '' && ($config['smtp_password'] ?? '') !== '';
}

function sendViaPhpMail(string $fromEmail, string $fromName, string $to, string $replyTo, string $subject, string $body): bool
{
    $encodedSubject = '=?UTF-8?B?' . base64_encode($subject) . '?=';
    $headers = [
        'MIME-Version: 1.0',
        'Content-Type: text/plain; charset=UTF-8',
        'From: ' . formatAddress($fromEmail, $fromName),
        'Reply-To: ' . $replyTo,
        'X-Mailer: PHP/' . PHP_VERSION,
    ];

    return mail($to, $encodedSubject, $body, implode("\r\n", $headers));
}

function sendViaSmtp(array $config, string $fromEmail, string $fromName, string $to, string $replyTo, string $subject, string $body): bool
{
    $host = (string) $config['smtp_host'];
    $port = (int) ($config['smtp_port'] ?? 587);
    $timeout = (int) ($config['smtp_timeout'] ?? 15);
    $encryption = strtolower((string) ($config['smtp_encryption'] ?? 'tls'));

    if (($encryption === 'ssl' || $encryption === 'tls') && !extension_loaded('openssl')) {
        throw new RuntimeException('SMTP requires the PHP openssl extension for ' . strtoupper($encryption) . ' connections.');
    }

    $transport = $encryption === 'ssl' ? 'ssl://' . $host : $host;
    $context = stream_context_create([
        'ssl' => [
            'verify_peer' => true,
            'verify_peer_name' => true,
            'allow_self_signed' => false,
            'peer_name' => $host,
            'SNI_enabled' => true,
        ],
    ]);

    $socket = stream_socket_client(
        $transport . ':' . $port,
        $errno,
        $errstr,
        $timeout,
        STREAM_CLIENT_CONNECT,
        $context
    );

    if (!is_resource($socket)) {
        throw new RuntimeException('SMTP connection failed: ' . $errstr . ' (' . $errno . ')');
    }

    stream_set_timeout($socket, $timeout);

    if (!expectSmtpCode($socket, [220])) {
        fclose($socket);
        throw new RuntimeException('SMTP server did not return a 220 greeting.');
    }

    $localHost = $_SERVER['SERVER_NAME'] ?? 'localhost';
    $ehloResponse = sendSmtpCommand($socket, 'EHLO ' . $localHost, [250]);

    if ($encryption === 'tls') {
        sendSmtpCommand($socket, 'STARTTLS', [220]);
        if (!stream_socket_enable_crypto($socket, true, STREAM_CRYPTO_METHOD_TLS_CLIENT)) {
            fclose($socket);
            throw new RuntimeException('Failed to start TLS on the SMTP connection.');
        }
        $ehloResponse = sendSmtpCommand($socket, 'EHLO ' . $localHost, [250]);
    }

    authenticateSmtp($socket, $ehloResponse, (string) $config['smtp_username'], (string) $config['smtp_password']);
    sendSmtpCommand($socket, 'MAIL FROM:<' . $fromEmail . '>', [250]);
    sendSmtpCommand($socket, 'RCPT TO:<' . $to . '>', [250, 251]);
    sendSmtpCommand($socket, 'DATA', [354]);

    $headers = [
        'Date: ' . gmdate('D, d M Y H:i:s O'),
        'To: ' . $to,
        'From: ' . formatAddress($fromEmail, $fromName),
        'Reply-To: ' . $replyTo,
        'Subject: ' . encodeMimeHeader($subject),
        'MIME-Version: 1.0',
        'Content-Type: text/plain; charset=UTF-8',
        'Content-Transfer-Encoding: 8bit',
    ];

    $messageData = implode("\r\n", $headers) . "\r\n\r\n" . normalizeSmtpBody($body) . "\r\n.";
    fwrite($socket, $messageData . "\r\n");

    if (!expectSmtpCode($socket, [250])) {
        fclose($socket);
        throw new RuntimeException('SMTP server rejected the message body.');
    }

    sendSmtpCommand($socket, 'QUIT', [221]);
    fclose($socket);

    return true;
}

function authenticateSmtp($socket, string $ehloResponse, string $username, string $password): void
{
    $capabilities = strtoupper($ehloResponse);

    if (str_contains($capabilities, 'AUTH PLAIN')) {
        $payload = base64_encode("\0" . $username . "\0" . $password);
        sendSmtpCommand($socket, 'AUTH PLAIN ' . $payload, [235]);
        return;
    }

    if (str_contains($capabilities, 'AUTH LOGIN') || str_contains($capabilities, 'AUTH=LOGIN')) {
        sendSmtpCommand($socket, 'AUTH LOGIN', [334]);
        sendSmtpCommand($socket, base64_encode($username), [334]);
        sendSmtpCommand($socket, base64_encode($password), [235]);
        return;
    }

    throw new RuntimeException('SMTP server does not advertise a supported AUTH method.');
}

function sendSmtpCommand($socket, string $command, array $expectedCodes): string
{
    fwrite($socket, $command . "\r\n");
    $response = readSmtpResponse($socket);

    if ($response === '' || !smtpResponseMatches($response, $expectedCodes)) {
        throw new RuntimeException('SMTP command failed: ' . $command);
    }

    return $response;
}

function expectSmtpCode($socket, array $expectedCodes): bool
{
    $response = readSmtpResponse($socket);
    return $response !== '' && smtpResponseMatches($response, $expectedCodes);
}

function formatAddress(string $email, string $name): string
{
    return encodeMimeHeader($name) . ' <' . $email . '>';
}

function encodeMimeHeader(string $value): string
{
    return '=?UTF-8?B?' . base64_encode($value) . '?=';
}

function normalizeSmtpBody(string $body): string
{
    $normalized = str_replace(["\r\n", "\r"], "\n", $body);
    $normalized = preg_replace('/^\./m', '..', $normalized);
    return str_replace("\n", "\r\n", $normalized ?? $body);
}

function readSmtpResponse($socket): string
{
    $response = '';

    while (($line = fgets($socket, 515)) !== false) {
        $response .= $line;
        if (strlen($line) >= 4 && $line[3] === ' ') {
            break;
        }
    }

    return $response;
}

function smtpResponseMatches(string $response, array $expectedCodes): bool
{
    $code = (int) substr($response, 0, 3);
    return in_array($code, $expectedCodes, true);
}

function logMailError(string $message): void
{
    $line = '[' . date('c') . '] ' . $message . PHP_EOL;
    error_log($line, 3, __DIR__ . '/mail-error.log');
}

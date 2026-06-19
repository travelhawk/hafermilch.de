<?php
declare(strict_types=1);

$config = require __DIR__ . '/smtp-config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ./index.php#kontakt', true, 302);
    exit;
}

$redirectBase = './index.php';

if (!empty($_POST['website'] ?? '')) {
    header('Location: ' . $redirectBase . '?status=success#kontakt', true, 302);
    exit;
}

$name = trim((string) ($_POST['name'] ?? ''));
$email = trim((string) ($_POST['email'] ?? ''));
$company = trim((string) ($_POST['company'] ?? ''));
$message = trim((string) ($_POST['message'] ?? ''));
$topic = $_POST['topic'] ?? 'domain';

if ($name === '' || $email === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: ' . $redirectBase . '?status=error&topic=' . rawurlencode((string) $topic) . '#kontakt', true, 302);
    exit;
}

$to = $config['to_email'] ?? 'info@hafermilch.de';
$fromEmail = $config['from_email'] ?? $to;
$fromName = $config['from_name'] ?? 'hafermilch.de';
$requestType = $topic === 'ads' ? 'Werbepartner-Anfrage' : 'Domain-Anfrage';
$subject = $requestType . ' über hafermilch.de';
$safeName = preg_replace('/[\r\n]+/', ' ', $name) ?: 'Unbekannt';
$safeEmail = preg_replace('/[\r\n]+/', '', $email) ?: '';
$safeCompany = preg_replace('/[\r\n]+/', ' ', $company) ?: '-';

$bodyLines = [
    $requestType . ' über hafermilch.de',
    '',
    'Anfragetyp: ' . $requestType,
    'Name: ' . $safeName,
    'E-Mail: ' . $safeEmail,
    'Unternehmen: ' . $safeCompany,
    '',
    'Nachricht:',
    $message,
];

$body = implode("\r\n", $bodyLines);

try {
    $sent = hasSmtpConfig($config)
        ? sendViaSmtp($config, $fromEmail, $fromName, $to, $safeEmail, $subject, $body)
        : sendViaPhpMail($fromEmail, $fromName, $to, $safeEmail, $subject, $body);
} catch (Throwable $exception) {
    $sent = false;
}

header('Location: ' . $redirectBase . '?status=' . ($sent ? 'success' : 'error') . '&topic=' . rawurlencode((string) $topic) . '#kontakt', true, 302);
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
    $transport = $encryption === 'ssl' ? 'ssl://' . $host : $host;

    $socket = stream_socket_client($transport . ':' . $port, $errno, $errstr, $timeout, STREAM_CLIENT_CONNECT);
    if (!is_resource($socket)) {
        return false;
    }

    stream_set_timeout($socket, $timeout);

    if (!expectSmtpCode($socket, [220])) {
        fclose($socket);
        return false;
    }

    $localHost = $_SERVER['SERVER_NAME'] ?? 'localhost';
    sendSmtpCommand($socket, 'EHLO ' . $localHost, [250]);

    if ($encryption === 'tls') {
        sendSmtpCommand($socket, 'STARTTLS', [220]);
        if (!stream_socket_enable_crypto($socket, true, STREAM_CRYPTO_METHOD_TLS_CLIENT)) {
            fclose($socket);
            return false;
        }
        sendSmtpCommand($socket, 'EHLO ' . $localHost, [250]);
    }

    sendSmtpCommand($socket, 'AUTH LOGIN', [334]);
    sendSmtpCommand($socket, base64_encode((string) $config['smtp_username']), [334]);
    sendSmtpCommand($socket, base64_encode((string) $config['smtp_password']), [235]);
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
        return false;
    }

    sendSmtpCommand($socket, 'QUIT', [221]);
    fclose($socket);

    return true;
}

function sendSmtpCommand($socket, string $command, array $expectedCodes): void
{
    fwrite($socket, $command . "\r\n");
    if (!expectSmtpCode($socket, $expectedCodes)) {
        throw new RuntimeException('SMTP command failed: ' . $command);
    }
}

function expectSmtpCode($socket, array $expectedCodes): bool
{
    $response = '';

    while (($line = fgets($socket, 515)) !== false) {
        $response .= $line;
        if (strlen($line) >= 4 && $line[3] === ' ') {
            break;
        }
    }

    if ($response === '') {
        return false;
    }

    $code = (int) substr($response, 0, 3);
    return in_array($code, $expectedCodes, true);
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

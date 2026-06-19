<?php

$env = loadEnvFile(__DIR__ . '/.env');

return [
    'to_email' => envValue($env, 'TO_EMAIL', 'info@hafermilch.de'),
    'from_email' => envValue($env, 'FROM_EMAIL', 'info@hafermilch.de'),
    'from_name' => envValue($env, 'FROM_NAME', 'hafermilch.de'),
    'smtp_host' => envValue($env, 'SMTP_HOST', ''),
    'smtp_port' => (int) envValue($env, 'SMTP_PORT', '587'),
    'smtp_encryption' => envValue($env, 'SMTP_ENCRYPTION', 'tls'),
    'smtp_username' => envValue($env, 'SMTP_USERNAME', ''),
    'smtp_password' => envValue($env, 'SMTP_PASSWORD', ''),
    'smtp_timeout' => (int) envValue($env, 'SMTP_TIMEOUT', '15'),
];

function loadEnvFile(string $path): array
{
    if (!is_file($path)) {
        return [];
    }

    $values = [];
    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    if ($lines === false) {
        return [];
    }

    foreach ($lines as $line) {
        $trimmed = trim($line);
        if ($trimmed === '' || str_starts_with($trimmed, '#')) {
            continue;
        }

        $parts = explode('=', $trimmed, 2);
        if (count($parts) !== 2) {
            continue;
        }

        $key = trim($parts[0]);
        $value = trim($parts[1]);
        $value = trim($value, "\"'");
        $values[$key] = $value;
    }

    return $values;
}

function envValue(array $env, string $key, string $default): string
{
    $runtime = getenv($key);
    if ($runtime !== false && $runtime !== '') {
        return $runtime;
    }

    return $env[$key] ?? $default;
}

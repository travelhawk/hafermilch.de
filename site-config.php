<?php
declare(strict_types=1);

function siteDomains(array $site): array
{
    $domains = $site['domains'] ?? [];
    $normalized = [];

    foreach ($domains as $domain) {
        $domain = strtolower(trim((string) $domain));
        if ($domain !== '') {
            $normalized[] = $domain;
        }
    }

    return array_values(array_unique($normalized));
}

function currentSiteHost(array $site): string
{
    $host = strtolower((string) ($_SERVER['HTTP_HOST'] ?? ''));
    $host = preg_replace('/:\d+$/', '', $host) ?? $host;
    $allowedDomains = siteDomains($site);

    if ($host !== '' && in_array($host, $allowedDomains, true)) {
        return $host;
    }

    return (string) ($site['primary_domain'] ?? ($allowedDomains[0] ?? 'hafermolch.de'));
}

function currentSiteScheme(): string
{
    $forwardedProto = strtolower((string) ($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? ''));
    if ($forwardedProto === 'https') {
        return 'https';
    }

    $https = strtolower((string) ($_SERVER['HTTPS'] ?? ''));
    if ($https !== '' && $https !== 'off') {
        return 'https';
    }

    return ((string) ($_SERVER['SERVER_PORT'] ?? '') === '443') ? 'https' : 'http';
}

function currentSiteBaseUrl(array $site): string
{
    return currentSiteScheme() . '://' . currentSiteHost($site);
}

return [
    'brand_name' => 'Hafermolch',
    'primary_domain' => 'hafermolch.de',
    'domains' => [
        'hafermolch.de',
        'hafermolch.eu',
        'hafermolch.com',
    ],
    'domain_bundle' => 'hafermolch.de, hafermolch.eu und hafermolch.com',
    'base_url' => 'https://hafermolch.de',
    'mail_subject_target' => 'hafermolch.de / hafermolch.eu / hafermolch.com',
];

<?php
declare(strict_types=1);

$site = require __DIR__ . '/site-config.php';
$baseUrl = rtrim(currentSiteBaseUrl($site), '/');

header('Content-Type: application/xml; charset=UTF-8');

$entries = [
    [
        'loc' => $baseUrl . '/',
        'changefreq' => 'weekly',
        'priority' => '1.0',
    ],
    [
        'loc' => $baseUrl . '/werbeflaechen.php',
        'changefreq' => 'monthly',
        'priority' => '0.7',
    ],
    [
        'loc' => $baseUrl . '/impressum.php',
        'changefreq' => 'yearly',
        'priority' => '0.2',
    ],
    [
        'loc' => $baseUrl . '/datenschutz.php',
        'changefreq' => 'yearly',
        'priority' => '0.2',
    ],
];

echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($entries as $entry): ?>
  <url>
    <loc><?= htmlspecialchars($entry['loc'], ENT_XML1, 'UTF-8') ?></loc>
    <changefreq><?= htmlspecialchars($entry['changefreq'], ENT_XML1, 'UTF-8') ?></changefreq>
    <priority><?= htmlspecialchars($entry['priority'], ENT_XML1, 'UTF-8') ?></priority>
  </url>
<?php endforeach; ?>
</urlset>

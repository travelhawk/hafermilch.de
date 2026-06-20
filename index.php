<?php
declare(strict_types=1);

$site = require __DIR__ . '/site-config.php';
$status = $_GET['status'] ?? null;
$brandName = (string) ($site['brand_name'] ?? 'Hafermolch');
$primaryDomain = (string) ($site['primary_domain'] ?? 'hafermolch.de');
$domains = $site['domains'] ?? [$primaryDomain];
$domainBundle = (string) ($site['domain_bundle'] ?? $primaryDomain);
$currentHost = currentSiteHost($site);
$baseUrl = rtrim(currentSiteBaseUrl($site), '/');

$pageTitle = $brandName . ' Domains kaufen | .de, .eu und .com für Haferdrink-Marken';
$pageDescription = $domainBundle . ' stehen als markantes Domain-Set für Haferdrink-Marken, Launches und Content-Projekte bereit. Kaufanfrage direkt online stellen.';
$heroImage = 'https://images.unsplash.com/photo-1561375559-0eb5f0827f70?auto=format&fit=crop&w=1400&q=80';
$imageStripLeft = 'https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=1000&q=80';
$imageStripRight = 'https://images.unsplash.com/photo-1473093295043-cdd812d0e601?auto=format&fit=crop&w=1000&q=80';

$messages = [
    'success' => [
        'class' => 'success',
        'text' => 'Ihre Anfrage wurde erfolgreich gesendet. Wir melden uns per E-Mail.',
    ],
    'error' => [
        'class' => 'error',
        'text' => 'Die Anfrage konnte nicht gesendet werden. Bitte versuchen Sie es erneut.',
    ],
];

$flash = $messages[$status] ?? null;
$schema = [
    '@context' => 'https://schema.org',
    '@type' => 'WebPage',
    'name' => $brandName,
    'url' => $baseUrl,
    'description' => 'Markantes Domain-Set für Haferdrink-Marken, Handel und Content-Projekte.',
    'inLanguage' => 'de',
    'about' => [
        '@type' => 'Thing',
        'name' => 'Haferdrink Domain-Portfolio',
    ],
    'mainEntity' => [
        '@type' => 'Product',
        'name' => $domainBundle,
        'category' => 'Domain Name Portfolio',
        'description' => 'Domain-Set aus .de, .eu und .com für Haferdrink-Marken und Kampagnen.',
        'offers' => [
            '@type' => 'Offer',
            'availability' => 'https://schema.org/InStock',
            'url' => $baseUrl . '/#kontakt',
        ],
    ],
];
?>
<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>" />
    <meta name="robots" content="index,follow,max-image-preview:large" />
    <meta name="theme-color" content="#f3ead8" />
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?>" />
    <meta property="og:description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?= htmlspecialchars($baseUrl, ENT_QUOTES, 'UTF-8') ?>" />
    <meta property="og:locale" content="de_DE" />
    <meta property="og:image" content="<?= htmlspecialchars($heroImage, ENT_QUOTES, 'UTF-8') ?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?>" />
    <meta name="twitter:description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>" />
    <meta name="twitter:image" content="<?= htmlspecialchars($heroImage, ENT_QUOTES, 'UTF-8') ?>" />
    <link rel="canonical" href="<?= htmlspecialchars($baseUrl, ENT_QUOTES, 'UTF-8') ?>" />
    <link rel="alternate" hreflang="de" href="<?= htmlspecialchars($baseUrl, ENT_QUOTES, 'UTF-8') ?>" />
    <link rel="alternate" hreflang="x-default" href="<?= htmlspecialchars($baseUrl, ENT_QUOTES, 'UTF-8') ?>" />
    <link rel="stylesheet" href="./styles.css" />
    <script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?></script>
  </head>
  <body>
    <header class="site-header">
      <a class="brand" href="#top" aria-label="<?= htmlspecialchars($brandName, ENT_QUOTES, 'UTF-8') ?>">
        <span class="brand-mark" aria-hidden="true">
          <svg viewBox="0 0 64 64" role="presentation">
            <path d="M18 8C28 5 40 6 48 12c8 6 13 17 10 27-2 9-9 17-18 19-8 2-17-1-25-7C8 45 4 36 7 27c2-8 8-16 11-19z"></path>
            <path d="M24 22c4-4 10-5 15-2 5 2 8 8 7 14-1 6-6 11-12 12-6 1-12-2-15-8-2-5-1-11 5-16z"></path>
          </svg>
        </span>
        <span class="brand-text-group">
          <span class="brand-text"><?= htmlspecialchars($brandName, ENT_QUOTES, 'UTF-8') ?></span>
          <span class="brand-meta">de / eu / com</span>
        </span>
      </a>
      <nav aria-label="Hauptnavigation">
        <a href="#domain">Domains</a>
        <a href="./werbeflaechen.php">Werbung</a>
        <a href="#kontakt">Kontakt</a>
      </nav>
      <a class="header-cta" href="#kontakt">Anfrage senden</a>
    </header>

    <main id="top">
      <section class="hero">
        <div class="hero-inner">
          <div class="hero-copy">
            <p class="eyebrow">Drei starke TLDs für eine markante Haferdrink-Marke</p>
            <h1>Hafermolch ist das markante Domain-Set für den Haferdrink-Markt.</h1>
            <div class="domain-pills" aria-label="Verfügbare Hafermolch Domains">
              <?php foreach ($domains as $domain): ?>
                <span><?= htmlspecialchars((string) $domain, ENT_QUOTES, 'UTF-8') ?></span>
              <?php endforeach; ?>
            </div>
            <p class="lead">
              Mit <?= htmlspecialchars($domainBundle, ENT_QUOTES, 'UTF-8') ?>
              sichern Sie sich ein ungewöhnlich merkfähiges Namenspaket für
              Produktlinien, Handel, Content oder Kampagnen rund um Haferdrinks.
            </p>
            <div class="hero-actions">
              <a class="button primary" href="#kontakt">Domainpaket anfragen</a>
        <a class="button secondary" href="./werbeflaechen.php">Werbeflächen anfragen</a>
            </div>
          </div>

          <figure class="hero-media">
            <img
              src="<?= htmlspecialchars($heroImage, ENT_QUOTES, 'UTF-8') ?>"
              alt="Haferdrink wird in einen Kaffee gegossen"
            />
            <figcaption>
              <span>Domain Bundle</span>
              Drei Domains, ein eigenständiges Markensignal.
            </figcaption>
          </figure>
        </div>
      </section>

      <div class="page-grid">
        <div class="content">
          <section id="domain" class="section">
            <div class="split">
              <div>
                <p class="section-kicker">Warum dieses Set</p>
                <h2>Wiedererkennung plus komplette TLD-Abdeckung.</h2>
              </div>
              <p>
                <?= htmlspecialchars($domainBundle, ENT_QUOTES, 'UTF-8') ?>
                passen zu Marken, Produktlinien, Launches oder Content-Formaten,
                die im Haferdrink-Markt nicht austauschbar wirken sollen. Das
                Paket verbindet Eigenständigkeit mit klarer Themennähe.
              </p>
            </div>

            <div class="benefits">
              <article>
                <h3>Komplettes Set</h3>
                <p>.de, .eu und .com sichern die wichtigsten TLDs direkt mit ab.</p>
              </article>
              <article>
                <h3>Eigenständiger Name</h3>
                <p>Markant, erinnerbar und mit deutlich mehr Charakter als Standardbegriffe.</p>
              </article>
              <article>
                <h3>Flexible Nutzung</h3>
                <p>Brand, Kampagnen-Domain, Weiterleitung oder Content-Projekt.</p>
              </article>
            </div>
          </section>

          <section class="image-strip" aria-label="Haferdrink Bilder">
            <img
              src="<?= htmlspecialchars($imageStripLeft, ENT_QUOTES, 'UTF-8') ?>"
              alt="Haferflocken und Getreide auf rustikalem Holztisch"
            />
            <img
              src="<?= htmlspecialchars($imageStripRight, ENT_QUOTES, 'UTF-8') ?>"
              alt="Frühstücksszene mit Granola, Beeren und pflanzlichem Milchersatz"
            />
          </section>

          <section id="kontakt" class="section contact-section">
            <div class="split">
              <div>
                <p class="section-kicker">Kontaktformular</p>
                <h2>Interesse am Hafermolch-Domainpaket?</h2>
                <p>
                  Beschreiben Sie kurz, wer anfragt und ob das komplette Set
                  oder eine bestimmte Domain im Fokus steht. Die Anfrage landet
                  direkt im Postfach für Domainverhandlungen.
                </p>
              </div>

              <form action="./send.php" method="post" accept-charset="UTF-8">
                <?php if ($flash): ?>
                  <p class="form-alert <?= htmlspecialchars($flash['class'], ENT_QUOTES, 'UTF-8') ?>" role="status">
                    <?= htmlspecialchars($flash['text'], ENT_QUOTES, 'UTF-8') ?>
                  </p>
                <?php endif; ?>
                <div class="honeypot" aria-hidden="true">
                  <label for="website">Website</label>
                  <input id="website" name="website" type="text" tabindex="-1" autocomplete="off" />
                </div>
                <input name="topic" type="hidden" value="domain" />
                <label>
                  Name
                  <input name="name" type="text" autocomplete="name" required />
                </label>
                <label>
                  E-Mail
                  <input name="email" type="email" autocomplete="email" required />
                </label>
                <label>
                  Unternehmen
                  <input name="company" type="text" autocomplete="organization" />
                </label>
                <label>
                  Nachricht
                  <textarea name="message" rows="5" required>Ich interessiere mich für das Hafermolch-Domainpaket aus hafermolch.de, hafermolch.eu und hafermolch.com und möchte über einen Erwerb oder eine Kooperation sprechen.</textarea>
                </label>
                <button type="submit">Anfrage senden</button>
              </form>
            </div>
          </section>
        </div>
      </div>
    </main>

    <footer>
      <p><?= htmlspecialchars($brandName, ENT_QUOTES, 'UTF-8') ?> - Domainanfragen für <?= htmlspecialchars($domainBundle, ENT_QUOTES, 'UTF-8') ?>.</p>
    </footer>
  </body>
</html>

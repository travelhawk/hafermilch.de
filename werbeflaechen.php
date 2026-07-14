<?php
declare(strict_types=1);

$site = require __DIR__ . '/site-config.php';
$status = $_GET['status'] ?? null;
$brandName = (string) ($site['brand_name'] ?? 'Hafermolch');
$currentHost = currentSiteHost($site);
$baseUrl = rtrim(currentSiteBaseUrl($site), '/');

$pageTitle = 'Werbeflächen auf ' . $currentHost . ' anfragen | Partnerseite';
$pageDescription = 'Werbeflächen auf ' . $currentHost . ' als Partneranfrage anfragen. Geeignet für Marken, Shops und passende Angebote im Haferdrink-Umfeld.';
$heroImage = 'https://images.unsplash.com/photo-1588704486840-680342cff526?auto=format&fit=crop&w=1400&q=80';

$messages = [
    'success' => [
        'class' => 'success',
        'text' => 'Ihre Werbeanfrage wurde erfolgreich gesendet. Wir melden uns per E-Mail.',
    ],
    'error' => [
        'class' => 'error',
        'text' => 'Die Werbeanfrage konnte nicht gesendet werden. Bitte versuchen Sie es erneut.',
    ],
];

$flash = $messages[$status] ?? null;
$schema = [
    '@context' => 'https://schema.org',
    '@type' => 'WebPage',
    'name' => 'Werbeflächen auf ' . $currentHost . ' anfragen',
    'url' => $baseUrl . '/werbeflaechen.php',
    'description' => 'Partneranfrage für Werbeflächen auf ' . $currentHost . '.',
    'inLanguage' => 'de',
    'mainEntity' => [
        '@type' => 'Service',
        'name' => 'Werbeflächen auf ' . $currentHost,
        'serviceType' => 'Werbepartnerschaft',
        'areaServed' => 'DE',
        'url' => $baseUrl . '/werbeflaechen.php#kontakt',
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
    <meta property="og:url" content="<?= htmlspecialchars($baseUrl . '/werbeflaechen.php', ENT_QUOTES, 'UTF-8') ?>" />
    <meta property="og:locale" content="de_DE" />
    <meta property="og:image" content="<?= htmlspecialchars($heroImage, ENT_QUOTES, 'UTF-8') ?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?>" />
    <meta name="twitter:description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>" />
    <meta name="twitter:image" content="<?= htmlspecialchars($heroImage, ENT_QUOTES, 'UTF-8') ?>" />
    <link rel="canonical" href="<?= htmlspecialchars($baseUrl . '/werbeflaechen.php', ENT_QUOTES, 'UTF-8') ?>" />
    <link rel="alternate" hreflang="de" href="<?= htmlspecialchars($baseUrl . '/werbeflaechen.php', ENT_QUOTES, 'UTF-8') ?>" />
    <link rel="stylesheet" href="./styles.css" />
    <script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?></script>
  </head>
  <body>
    <header class="site-header">
      <a class="brand" href="./index.php" aria-label="<?= htmlspecialchars($brandName, ENT_QUOTES, 'UTF-8') ?>">
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
        <a href="./index.php#domain">Domains</a>
        <a href="./werbeflaechen.php">Werbung</a>
        <a href="#kontakt">Kontakt</a>
      </nav>
      <a class="header-cta" href="./index.php#kontakt">Domainpaket anfragen</a>
    </header>

    <main id="top">
      <section class="hero">
        <div class="hero-inner">
          <div class="hero-copy">
            <p class="eyebrow">Werbepartner-Anfrage</p>
            <h1>Werbeflächen auf <?= htmlspecialchars($currentHost, ENT_QUOTES, 'UTF-8') ?> gezielt anfragen.</h1>
            <p class="lead">
              Für Marken, Shops und passende Angebote können Werbeformate auf
              <?= htmlspecialchars($currentHost, ENT_QUOTES, 'UTF-8') ?>
              separat angefragt werden. So bleibt das Hafermolch-Domainset als
              Asset klar positioniert und Werbepartnerschaften laufen als
              eigener Vertriebskanal.
            </p>
          </div>

          <figure class="hero-media">
            <img
              src="<?= htmlspecialchars($heroImage, ENT_QUOTES, 'UTF-8') ?>"
              alt="Kaffeezubereitung mit Haferdrink im Barista-Kontext"
            />
            <figcaption>
              <span>Partnerflächen</span>
              Separate Anfrage für passende Werbeplatzierungen.
            </figcaption>
          </figure>
        </div>
      </section>

      <div class="page-grid">
        <div class="content">
          <section class="section">
            <div class="split">
              <div>
                <p class="section-kicker">Werbeformate</p>
                <h2>Klare Partneranfrage statt allgemeiner Kontakt.</h2>
              </div>
              <p>
                Beschreiben Sie kurz die gewünschte Platzierung, Marke,
                Zielgruppe und Laufzeit. So lässt sich schneller einschätzen,
                ob das Format zu <?= htmlspecialchars($currentHost, ENT_QUOTES, 'UTF-8') ?> passt.
              </p>
            </div>

            <div class="ad-cards">
              <article>
                <span>Sidebar links</span>
                <strong>170 x flexibel</strong>
                <p>Für Sponsored Links, Produkt-Features oder Handelspartner.</p>
              </article>
              <article>
                <span>Sidebar rechts</span>
                <strong>170 x flexibel</strong>
                <p>Für Shops, Launches, Newsletter-Leads oder Produktwelten.</p>
              </article>
              <article class="wide">
                <span>Content-nah</span>
                <strong>Native Platzierungen</strong>
                <p>Für redaktionell passende Integrationen im späteren Content-Umfeld.</p>
              </article>
            </div>
          </section>

          <section id="kontakt" class="section contact-section">
            <div class="split">
              <div>
                <p class="section-kicker">Werbeanfrage</p>
                <h2>Interesse als Werbepartner?</h2>
                <p>
                  Teilen Sie kurz mit, welche Platzierung Sie anfragen und
                  welche Marke oder welches Angebot beworben werden soll.
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
                <input name="topic" type="hidden" value="ads" />
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
                  <textarea name="message" rows="5" required>Ich interessiere mich für eine Werbepartnerschaft auf <?= htmlspecialchars($currentHost, ENT_QUOTES, 'UTF-8') ?> und möchte verfügbare Platzierungen sowie Konditionen anfragen.</textarea>
                </label>
                <button type="submit">Werbeanfrage senden</button>
              </form>
            </div>
          </section>
        </div>
      </div>
    </main>

    <footer>
      <p><?= htmlspecialchars($brandName, ENT_QUOTES, 'UTF-8') ?> - Domainanfragen und Werbepartnerschaften.</p>
      <p class="footer-links">
        <a href="./impressum.php">Impressum</a>
        <a href="./datenschutz.php">Datenschutz</a>
      </p>
    </footer>
  </body>
</html>

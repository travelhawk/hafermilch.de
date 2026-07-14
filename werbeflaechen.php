<?php
declare(strict_types=1);

$site = require __DIR__ . '/site-config.php';
$status = $_GET['status'] ?? null;
$brandName = (string) ($site['brand_name'] ?? 'Hafermolch');
$currentHost = currentSiteHost($site);
$baseUrl = rtrim(currentSiteBaseUrl($site), '/');

$pageTitle = 'Request advertising on ' . $currentHost . ' | Partner page';
$pageDescription = 'Request advertising placements on ' . $currentHost . ' as a partnership inquiry. Suitable for brands, shops, and relevant offers in the oat drink space.';
$heroImage = 'https://images.unsplash.com/photo-1588704486840-680342cff526?auto=format&fit=crop&w=1400&q=80';

$messages = [
    'success' => [
        'class' => 'success',
        'text' => 'Your advertising inquiry was sent successfully. We will get back to you by email.',
    ],
    'error' => [
        'class' => 'error',
        'text' => 'Your advertising inquiry could not be sent. Please try again.',
    ],
];

$flash = $messages[$status] ?? null;
$schema = [
    '@context' => 'https://schema.org',
    '@type' => 'WebPage',
    'name' => 'Request advertising on ' . $currentHost,
    'url' => $baseUrl . '/werbeflaechen.php',
    'description' => 'Partnership inquiry for advertising placements on ' . $currentHost . '.',
    'inLanguage' => 'en',
    'mainEntity' => [
        '@type' => 'Service',
        'name' => 'Advertising on ' . $currentHost,
        'serviceType' => 'Advertising partnership',
        'areaServed' => 'Global',
        'url' => $baseUrl . '/werbeflaechen.php#contact',
    ],
];
?>
<!doctype html>
<html lang="en">
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
    <meta property="og:locale" content="en_US" />
    <meta property="og:image" content="<?= htmlspecialchars($heroImage, ENT_QUOTES, 'UTF-8') ?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?>" />
    <meta name="twitter:description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>" />
    <meta name="twitter:image" content="<?= htmlspecialchars($heroImage, ENT_QUOTES, 'UTF-8') ?>" />
    <link rel="canonical" href="<?= htmlspecialchars($baseUrl . '/werbeflaechen.php', ENT_QUOTES, 'UTF-8') ?>" />
    <link rel="alternate" hreflang="en" href="<?= htmlspecialchars($baseUrl . '/werbeflaechen.php', ENT_QUOTES, 'UTF-8') ?>" />
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
      <nav aria-label="Main navigation">
        <a href="./index.php#domains">Domains</a>
        <a href="./werbeflaechen.php">Advertising</a>
        <a href="#contact">Contact</a>
      </nav>
      <a class="header-cta" href="./index.php#contact">Request domain bundle</a>
    </header>

    <main id="top">
      <section class="hero">
        <div class="hero-inner">
          <div class="hero-copy">
            <p class="eyebrow">Advertising partner inquiry</p>
            <h1>Request advertising on <?= htmlspecialchars($currentHost, ENT_QUOTES, 'UTF-8') ?>.</h1>
            <p class="lead">
              Brands, shops, and relevant offers can request advertising
              formats on <?= htmlspecialchars($currentHost, ENT_QUOTES, 'UTF-8') ?>
              separately. This keeps the Hafermolch domain set clearly
              positioned as an asset while advertising partnerships run as a
              dedicated sales channel.
            </p>
          </div>

          <figure class="hero-media">
            <img
              src="<?= htmlspecialchars($heroImage, ENT_QUOTES, 'UTF-8') ?>"
              alt="Coffee preparation with oat drink in a barista setting"
            />
            <figcaption>
              <span>Ad placements</span>
              Separate inquiry for relevant sponsorship opportunities.
            </figcaption>
          </figure>
        </div>
      </section>

      <div class="page-grid">
        <div class="content">
          <section class="section">
            <div class="split">
              <div>
                <p class="section-kicker">Ad formats</p>
                <h2>A clear partner inquiry instead of a generic contact request.</h2>
              </div>
              <p>
                Briefly describe the desired placement, brand, audience, and
                campaign duration. That makes it easier to evaluate whether the
                format is a fit for <?= htmlspecialchars($currentHost, ENT_QUOTES, 'UTF-8') ?>.
              </p>
            </div>

            <div class="ad-cards">
              <article>
                <span>Left sidebar</span>
                <strong>170 x flexible</strong>
                <p>For sponsored links, product features, or retail partners.</p>
              </article>
              <article>
                <span>Right sidebar</span>
                <strong>170 x flexible</strong>
                <p>For shops, launches, newsletter leads, or product worlds.</p>
              </article>
              <article class="wide">
                <span>Near content</span>
                <strong>Native placements</strong>
                <p>For editorially relevant integrations in a future content environment.</p>
              </article>
            </div>
          </section>

          <section id="contact" class="section contact-section">
            <div class="split">
              <div>
                <p class="section-kicker">Advertising inquiry</p>
                <h2>Interested in becoming an advertising partner?</h2>
                <p>
                  Share which placement you are requesting and which brand or
                  offer should be promoted.
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
                  Email
                  <input name="email" type="email" autocomplete="email" required />
                </label>
                <label>
                  Company
                  <input name="company" type="text" autocomplete="organization" />
                </label>
                <label>
                  Message
                  <textarea name="message" rows="5" required>I am interested in an advertising partnership on <?= htmlspecialchars($currentHost, ENT_QUOTES, 'UTF-8') ?> and would like to ask about available placements and pricing.</textarea>
                </label>
                <button type="submit">Send advertising inquiry</button>
              </form>
            </div>
          </section>
        </div>
      </div>
    </main>

    <footer>
      <p><?= htmlspecialchars($brandName, ENT_QUOTES, 'UTF-8') ?> - domain inquiries and advertising partnerships.</p>
      <p class="footer-links">
        <a href="./impressum.php">Legal notice</a>
        <a href="./datenschutz.php">Privacy policy</a>
      </p>
    </footer>
  </body>
</html>

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

$pageTitle = $brandName . ' domains for sale | .de, .eu and .com for oat drink brands';
$pageDescription = $domainBundle . ' are available as a distinctive domain set for oat drink brands, launches, and content projects. Submit a purchase inquiry online.';
$heroImage = 'https://images.unsplash.com/photo-1561375559-0eb5f0827f70?auto=format&fit=crop&w=1400&q=80';
$imageStripLeft = 'https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=1000&q=80';
$imageStripRight = 'https://images.unsplash.com/photo-1473093295043-cdd812d0e601?auto=format&fit=crop&w=1000&q=80';

$messages = [
    'success' => [
        'class' => 'success',
        'text' => 'Your inquiry was sent successfully. We will get back to you by email.',
    ],
    'error' => [
        'class' => 'error',
        'text' => 'Your inquiry could not be sent. Please try again.',
    ],
];

$flash = $messages[$status] ?? null;
$schema = [
    '@context' => 'https://schema.org',
    '@type' => 'WebPage',
    'name' => $brandName,
    'url' => $baseUrl,
    'description' => 'Distinctive domain set for oat drink brands, commerce, and content projects.',
    'inLanguage' => 'en',
    'about' => [
        '@type' => 'Thing',
        'name' => 'Oat drink domain portfolio',
    ],
    'mainEntity' => [
        '@type' => 'Product',
        'name' => $domainBundle,
        'category' => 'Domain Name Portfolio',
        'description' => 'Domain set across .de, .eu, and .com for oat drink brands and campaigns.',
        'offers' => [
            '@type' => 'Offer',
            'availability' => 'https://schema.org/InStock',
            'url' => $baseUrl . '/#contact',
        ],
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
    <meta property="og:url" content="<?= htmlspecialchars($baseUrl, ENT_QUOTES, 'UTF-8') ?>" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:image" content="<?= htmlspecialchars($heroImage, ENT_QUOTES, 'UTF-8') ?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?>" />
    <meta name="twitter:description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>" />
    <meta name="twitter:image" content="<?= htmlspecialchars($heroImage, ENT_QUOTES, 'UTF-8') ?>" />
    <link rel="canonical" href="<?= htmlspecialchars($baseUrl, ENT_QUOTES, 'UTF-8') ?>" />
    <link rel="alternate" hreflang="en" href="<?= htmlspecialchars($baseUrl, ENT_QUOTES, 'UTF-8') ?>" />
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
      <nav aria-label="Main navigation">
        <a href="#domains">Domains</a>
        <a href="./werbeflaechen.php">Advertising</a>
        <a href="#contact">Contact</a>
      </nav>
      <a class="header-cta" href="#contact">Send inquiry</a>
    </header>

    <main id="top">
      <section class="hero">
        <div class="hero-inner">
          <div class="hero-copy">
            <p class="eyebrow">Three strong TLDs for a distinctive oat drink brand</p>
            <h1>Hafermolch is the distinctive domain set for the oat drink market.</h1>
            <div class="domain-pills" aria-label="Available Hafermolch domains">
              <?php foreach ($domains as $domain): ?>
                <span><?= htmlspecialchars((string) $domain, ENT_QUOTES, 'UTF-8') ?></span>
              <?php endforeach; ?>
            </div>
            <p class="lead">
              With <?= htmlspecialchars($domainBundle, ENT_QUOTES, 'UTF-8') ?>
              you secure an unusually memorable naming package for product
              lines, commerce, content, or campaigns around oat drinks.
            </p>
            <div class="hero-actions">
              <a class="button primary" href="#contact">Request domain bundle</a>
              <a class="button secondary" href="./werbeflaechen.php">Request advertising</a>
            </div>
          </div>

          <figure class="hero-media">
            <img
              src="<?= htmlspecialchars($heroImage, ENT_QUOTES, 'UTF-8') ?>"
              alt="Oat drink being poured into coffee"
            />
            <figcaption>
              <span>Domain bundle</span>
              Three domains, one distinctive brand signal.
            </figcaption>
          </figure>
        </div>
      </section>

      <div class="page-grid">
        <div class="content">
          <section id="domains" class="section">
            <div class="split">
              <div>
                <p class="section-kicker">Why this set</p>
                <h2>Memorability plus complete TLD coverage.</h2>
              </div>
              <p>
                <?= htmlspecialchars($domainBundle, ENT_QUOTES, 'UTF-8') ?>
                fit brands, product lines, launches, or content formats that
                should not feel interchangeable in the oat drink market. The
                set combines distinctiveness with clear category relevance.
              </p>
            </div>

            <div class="benefits">
              <article>
                <h3>Complete set</h3>
                <p>.de, .eu, and .com secure the key TLDs in one move.</p>
              </article>
              <article>
                <h3>Distinctive name</h3>
                <p>Striking, memorable, and more characteristic than generic terms.</p>
              </article>
              <article>
                <h3>Flexible use</h3>
                <p>Brand, campaign domain, redirect, or content project.</p>
              </article>
            </div>
          </section>

          <section class="image-strip" aria-label="Oat drink images">
            <img
              src="<?= htmlspecialchars($imageStripLeft, ENT_QUOTES, 'UTF-8') ?>"
              alt="Oats and grains on a rustic wooden table"
            />
            <img
              src="<?= htmlspecialchars($imageStripRight, ENT_QUOTES, 'UTF-8') ?>"
              alt="Breakfast scene with granola, berries, and plant-based milk alternative"
            />
          </section>

          <section id="contact" class="section contact-section">
            <div class="split">
              <div>
                <p class="section-kicker">Contact form</p>
                <h2>Interested in the Hafermolch domain bundle?</h2>
                <p>
                  Briefly describe who is inquiring and whether the focus is on
                  the full set or a specific domain. The message goes directly
                  to the mailbox for domain negotiations.
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
                  Email
                  <input name="email" type="email" autocomplete="email" required />
                </label>
                <label>
                  Company
                  <input name="company" type="text" autocomplete="organization" />
                </label>
                <label>
                  Message
                  <textarea name="message" rows="5" required>I am interested in the Hafermolch domain bundle consisting of hafermolch.de, hafermolch.eu, and hafermolch.com and would like to discuss an acquisition or cooperation.</textarea>
                </label>
                <button type="submit">Send inquiry</button>
              </form>
            </div>
          </section>
        </div>
      </div>
    </main>

    <footer>
      <p><?= htmlspecialchars($brandName, ENT_QUOTES, 'UTF-8') ?> - domain inquiries for <?= htmlspecialchars($domainBundle, ENT_QUOTES, 'UTF-8') ?>.</p>
      <p class="footer-links">
        <a href="./impressum.php">Legal notice</a>
        <a href="./datenschutz.php">Privacy policy</a>
      </p>
    </footer>
  </body>
</html>

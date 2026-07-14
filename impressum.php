<?php
declare(strict_types=1);

$site = require __DIR__ . '/site-config.php';
$brandName = (string) ($site['brand_name'] ?? 'Hafermolch');
$domainBundle = (string) ($site['domain_bundle'] ?? '');
$baseUrl = rtrim(currentSiteBaseUrl($site), '/');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Legal notice | <?= htmlspecialchars($brandName, ENT_QUOTES, 'UTF-8') ?></title>
    <meta name="description" content="Legal notice and provider identification." />
    <meta name="robots" content="noindex,follow" />
    <meta name="theme-color" content="#f3ead8" />
    <link rel="canonical" href="<?= htmlspecialchars($baseUrl . '/impressum.php', ENT_QUOTES, 'UTF-8') ?>" />
    <link rel="stylesheet" href="./styles.css" />
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
        <a href="./index.php#contact">Contact</a>
      </nav>
      <a class="header-cta" href="./index.php#contact">Send inquiry</a>
    </header>

    <main id="top">
      <div class="page-grid">
        <div class="content">
          <section class="section legal">
            <p class="section-kicker">Legal</p>
            <h1>Legal notice</h1>

            <p>Information pursuant to § 5 DDG (German Digital Services Act):</p>
            <p>
              Industrievertretung Hochmuth e. K.<br />
              Owner: Söhnke Hochmuth<br />
              Waldblick 1 d<br />
              26188 Edewecht<br />
              Germany
            </p>

            <h2>Contact</h2>
            <p>
              E-mail:
              <a id="contact-mail" href="#" rel="nofollow">e-mail address is displayed here</a>
            </p>

            <h2>Commercial register</h2>
            <p>
              Registered in the commercial register<br />
              Registry court: Oldenburg<br />
              Registration number: HRA 206201
            </p>

            <h2>VAT identification number</h2>
            <p>
              VAT identification number pursuant to § 27 a of the German VAT Act:
              DE322976998
            </p>

            <h2>Image credits</h2>
            <p>
              The photos used on this website are provided by
              <a href="https://unsplash.com" target="_blank" rel="noopener noreferrer">Unsplash</a>.
            </p>

            <h2>Liability for content</h2>
            <p>
              As a service provider, we are responsible for our own content on these pages in
              accordance with general law. However, we are not obliged to monitor transmitted or
              stored third-party information, or to investigate circumstances that indicate
              unlawful activity. Obligations to remove or block the use of information under
              general law remain unaffected.
            </p>

            <h2>Liability for links</h2>
            <p>
              Our website contains links to external third-party websites over whose content we
              have no control. We therefore cannot accept any liability for this third-party
              content. The respective provider or operator of the linked pages is always
              responsible for their content. The linked pages were checked for possible legal
              violations at the time of linking. Unlawful content was not recognisable at that
              time. However, permanent monitoring of the content of linked pages is not
              reasonable without concrete indications of a legal violation. If we become aware of
              any infringements, we will remove such links immediately.
            </p>

            <h2>Copyright</h2>
            <p>
              The content and works created by the site operators on these pages are subject to
              German copyright law. Reproduction, editing, distribution and any kind of
              exploitation outside the limits of copyright require the written consent of the
              respective author or creator. Downloads and copies of this page are permitted for
              private, non-commercial use only. Insofar as the content on this page was not
              created by the operator, the copyrights of third parties are respected. In
              particular, third-party content is marked as such. Should you nevertheless become
              aware of a copyright infringement, please inform us accordingly. If we become aware
              of any infringements, we will remove such content immediately.
            </p>

            <p><a href="./datenschutz.php">Go to the privacy policy</a></p>
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

    <script>
      // Contact address stored reversed so the plain-text address never appears in the
      // source (defeats simple email harvesters). Assembled at render/click time only.
      (function () {
        var reversed = 'ed.hcslimrefah@ofni';
        var address = reversed.split('').reverse().join('');
        var link = document.getElementById('contact-mail');
        if (!link) { return; }
        link.textContent = address;
        link.addEventListener('click', function (event) {
          event.preventDefault();
          window.location.href = 'mailto:' + address;
        });
      })();
    </script>
  </body>
</html>

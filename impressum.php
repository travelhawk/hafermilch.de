<?php
declare(strict_types=1);

$site = require __DIR__ . '/site-config.php';
$brandName = (string) ($site['brand_name'] ?? 'Hafermolch');
$domainBundle = (string) ($site['domain_bundle'] ?? '');
$baseUrl = rtrim(currentSiteBaseUrl($site), '/');
?>
<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Impressum | <?= htmlspecialchars($brandName, ENT_QUOTES, 'UTF-8') ?></title>
    <meta name="description" content="Impressum und Anbieterkennzeichnung." />
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
      <nav aria-label="Hauptnavigation">
        <a href="./index.php#domain">Domains</a>
        <a href="./werbeflaechen.php">Werbung</a>
        <a href="./index.php#kontakt">Kontakt</a>
      </nav>
      <a class="header-cta" href="./index.php#kontakt">Anfrage senden</a>
    </header>

    <main id="top">
      <div class="page-grid">
        <div class="content">
          <section class="section legal">
            <p class="section-kicker">Rechtliches</p>
            <h1>Impressum</h1>

            <p>Angaben gemäß § 5 DDG:</p>
            <p>
              Industrievertretung Hochmuth e. K.<br />
              Inhaber Söhnke Hochmuth<br />
              Waldblick 1 d<br />
              26188 Edewecht
            </p>

            <h2>Kontakt</h2>
            <p>
              E-Mail:
              <a id="contact-mail" href="#" rel="nofollow">E-Mail-Adresse wird angezeigt</a>
            </p>

            <h2>Registereintrag</h2>
            <p>
              Eintragung im Handelsregister<br />
              Registergericht: Oldenburg<br />
              Registernummer: HRA 206201
            </p>

            <h2>Umsatzsteuer-ID</h2>
            <p>
              Umsatzsteuer-Identifikationsnummer gemäß § 27 a Umsatzsteuergesetz:
              DE322976998
            </p>

            <h2>Bildquellen</h2>
            <p>
              Die auf dieser Website verwendeten Fotos stammen von
              <a href="https://unsplash.com" target="_blank" rel="noopener noreferrer">Unsplash</a>.
            </p>

            <h2>Haftung für Inhalte</h2>
            <p>
              Als Diensteanbieter sind wir für eigene Inhalte auf diesen Seiten nach den
              allgemeinen Gesetzen verantwortlich. Wir sind jedoch nicht verpflichtet,
              übermittelte oder gespeicherte fremde Informationen zu überwachen oder nach
              Umständen zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen.
              Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach
              den allgemeinen Gesetzen bleiben hiervon unberührt.
            </p>

            <h2>Haftung für Links</h2>
            <p>
              Unser Angebot enthält Links zu externen Webseiten Dritter, auf deren Inhalte wir
              keinen Einfluss haben. Deshalb können wir für diese fremden Inhalte auch keine
              Gewähr übernehmen. Für die Inhalte der verlinkten Seiten ist stets der jeweilige
              Anbieter oder Betreiber der Seiten verantwortlich. Die verlinkten Seiten wurden zum
              Zeitpunkt der Verlinkung auf mögliche Rechtsverstöße überprüft. Rechtswidrige
              Inhalte waren zum Zeitpunkt der Verlinkung nicht erkennbar. Eine permanente
              inhaltliche Kontrolle der verlinkten Seiten ist jedoch ohne konkrete Anhaltspunkte
              einer Rechtsverletzung nicht zumutbar. Bei Bekanntwerden von Rechtsverletzungen
              werden wir derartige Links umgehend entfernen.
            </p>

            <h2>Urheberrecht</h2>
            <p>
              Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten
              unterliegen dem deutschen Urheberrecht. Die Vervielfältigung, Bearbeitung,
              Verbreitung und jede Art der Verwertung außerhalb der Grenzen des Urheberrechtes
              bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers.
              Downloads und Kopien dieser Seite sind nur für den privaten, nicht kommerziellen
              Gebrauch gestattet. Soweit die Inhalte auf dieser Seite nicht vom Betreiber
              erstellt wurden, werden die Urheberrechte Dritter beachtet. Insbesondere werden
              Inhalte Dritter als solche gekennzeichnet. Sollten Sie trotzdem auf eine
              Urheberrechtsverletzung aufmerksam werden, bitten wir um einen entsprechenden
              Hinweis. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Inhalte
              umgehend entfernen.
            </p>

            <p><a href="./datenschutz.php">Zur Datenschutzerklärung</a></p>
          </section>
        </div>
      </div>
    </main>

    <footer>
      <p><?= htmlspecialchars($brandName, ENT_QUOTES, 'UTF-8') ?> - Domainanfragen für <?= htmlspecialchars($domainBundle, ENT_QUOTES, 'UTF-8') ?>.</p>
      <p class="footer-links">
        <a href="./impressum.php">Impressum</a>
        <a href="./datenschutz.php">Datenschutz</a>
      </p>
    </footer>

    <script>
      // Kontaktadresse rückwärts hinterlegt, damit die Klartext-Adresse nicht im
      // Quelltext steht (schützt vor einfachen E-Mail-Harvestern). Zusammensetzung
      // erst beim Rendern bzw. beim Klick.
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

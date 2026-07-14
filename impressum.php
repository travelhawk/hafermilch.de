<?php
declare(strict_types=1);
?>
<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Impressum | hafermilch.de</title>
    <meta name="description" content="Impressum und Anbieterkennzeichnung für hafermilch.de." />
    <meta name="robots" content="noindex,follow" />
    <meta name="theme-color" content="#f3ead8" />
    <link rel="canonical" href="https://hafermilch.de/impressum.php" />
    <link rel="stylesheet" href="./styles.css" />
  </head>
  <body>
    <header class="site-header">
      <a class="brand" href="./index.php">hafermilch.de</a>
      <nav aria-label="Hauptnavigation">
        <a href="./index.php#domain">Domain</a>
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
      <p>hafermilch.de - Domainanfragen und Werbeplatzierungen.</p>
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
        var reversed = 'ed.hclimrefah@ofni';
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

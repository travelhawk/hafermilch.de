<?php
$status = $_GET['status'] ?? null;

$messages = [
    'success' => [
        'class' => 'success',
        'text' => 'Ihre Anfrage wurde erfolgreich gesendet. Wir melden uns per E-Mail.',
    ],
    'error' => [
        'class' => 'error',
        'text' => 'Die Anfrage konnte nicht gesendet werden. Bitte versuchen Sie es erneut oder schreiben Sie uns per E-Mail (Adresse im Impressum).',
    ],
];

$flash = $messages[$status] ?? null;
?>
<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>hafermilch.de kaufen | Premium-Domain für Haferdrink-Marken</title>
    <meta
      name="description"
      content="hafermilch.de ist als starke deutsche Kategorie-Domain für Haferdrink-Marken, Handel und Content-Projekte verfügbar. Kaufanfrage direkt online stellen."
    />
    <meta name="robots" content="index,follow,max-image-preview:large" />
    <meta name="theme-color" content="#f3ead8" />
    <meta property="og:title" content="hafermilch.de kaufen | Premium-Domain für Haferdrink-Marken" />
    <meta
      property="og:description"
      content="Premium-Domain für Haferdrink-Marken, Handel und Content-Projekte. Kaufanfrage für hafermilch.de direkt online stellen."
    />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://hafermilch.de" />
    <meta property="og:locale" content="de_DE" />
    <meta
      property="og:image"
      content="https://images.unsplash.com/photo-1561375559-0eb5f0827f70?auto=format&fit=crop&w=1400&q=80"
    />
    <meta name="twitter:card" content="summary_large_image" />
    <meta
      name="twitter:title"
      content="hafermilch.de kaufen | Premium-Domain für Haferdrink-Marken"
    />
    <meta
      name="twitter:description"
      content="Starke Kategorie-Domain für Haferdrink-Marken, Handel und Content-Projekte. Kaufanfrage direkt online stellen."
    />
    <meta
      name="twitter:image"
      content="https://images.unsplash.com/photo-1561375559-0eb5f0827f70?auto=format&fit=crop&w=1400&q=80"
    />
    <link rel="canonical" href="https://hafermilch.de" />
    <link rel="alternate" hreflang="de" href="https://hafermilch.de" />
    <link rel="alternate" hreflang="x-default" href="https://hafermilch.de" />
    <link rel="stylesheet" href="./styles.css" />
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "hafermilch.de",
        "url": "https://hafermilch.de",
        "description": "Premium-Domain für Haferdrink-Marken, Handel und Content-Projekte.",
        "inLanguage": "de",
        "about": {
          "@type": "Thing",
          "name": "Haferdrink Domain"
        },
        "mainEntity": {
          "@type": "Product",
          "name": "hafermilch.de",
          "category": "Domain Name",
          "description": "Kategorie-Domain für Haferdrink-Marken, Handel und Content-Projekte.",
          "offers": {
            "@type": "Offer",
            "availability": "https://schema.org/InStock",
            "url": "https://hafermilch.de/#kontakt"
          }
        }
      }
    </script>
  </head>
  <body>
    <header class="site-header">
      <a class="brand" href="#top">hafermilch.de</a>
      <nav aria-label="Hauptnavigation">
        <a href="#domain">Domain</a>
        <a href="./werbeflaechen.php">Werbung</a>
        <a href="#kontakt">Kontakt</a>
      </nav>
      <a class="header-cta" href="#kontakt">Anfrage senden</a>
    </header>

    <main id="top">
      <section class="hero">
        <div class="hero-inner">
          <div class="hero-copy">
            <p class="eyebrow">Premium-Domain für eine sichtbare Food-Kategorie</p>
            <h1>hafermilch.de ist die Premium-Domain für den Haferdrink-Markt.</h1>
            <p class="lead">
              Eine merkfähige deutsche Domain für Haferdrinks, pflanzliche
              Ernährung, Handel, Content oder Kampagnen. Wer eine starke
              Position in dieser Kategorie besetzen will, bekommt hier den
              direktesten Namen im Markt.
            </p>
            <div class="hero-actions">
              <a class="button primary" href="#kontakt">Verhandlung anfragen</a>
              <a class="button secondary" href="./werbeflaechen.php">Werbeflächen anfragen</a>
            </div>
          </div>

          <figure class="hero-media">
            <img
              src="https://images.unsplash.com/photo-1561375559-0eb5f0827f70?auto=format&fit=crop&w=1400&q=80"
              alt="Haferdrink wird in einen Eiskaffee gegossen"
            />
            <figcaption>
              <span>Kategorie-Domain</span>
              Direkt, deutsch, suchstark und sofort verständlich.
            </figcaption>
          </figure>
        </div>
      </section>

      <div class="page-grid">
        <div class="content">
          <section id="domain" class="section">
            <div class="split">
              <div>
                <p class="section-kicker">Warum diese Domain</p>
                <h2>Ein Name, der ohne Erklärung funktioniert.</h2>
              </div>
              <p>
                hafermilch.de passt zu Marken, Vergleichsportalen, Rezepten,
                Handelskampagnen oder als strategische Weiterleitung. Die Domain
                ist kurz, beschreibend und trifft die Alltagssprache der
                Zielgruppe.
              </p>
            </div>

            <div class="benefits">
              <article>
                <h3>Direkter Begriff</h3>
                <p>Keine Abkürzung, kein Erklärtext.</p>
              </article>
              <article>
                <h3>Starke Kategorie</h3>
                <p>Pflanzliche Drinks bleiben sichtbar.</p>
              </article>
              <article>
                <h3>Flexible Nutzung</h3>
                <p>Brand, Portal, Kampagne oder Leadgen.</p>
              </article>
            </div>
          </section>

          <section class="image-strip" aria-label="Hafermilch Bilder">
            <img
              src="https://images.unsplash.com/photo-1711357193114-ba93da3e2f01?auto=format&fit=crop&w=1000&q=80"
              alt="Frühstücksschale mit Haferflocken und pflanzlichem Drink"
            />
            <img
              src="https://images.unsplash.com/photo-1588704486840-680342cff526?auto=format&fit=crop&w=1000&q=80"
              alt="Kaffeezubereitung mit Haferdrink im Barista-Kontext"
            />
          </section>

          <section id="kontakt" class="section contact-section">
            <div class="split">
              <div>
                <p class="section-kicker">Kontaktformular</p>
                <h2>Interesse an hafermilch.de?</h2>
                <p>
                  Beschreiben Sie kurz, wer anfragt und wie die Domain genutzt
                  werden soll. Die Anfrage wird direkt an
                  <a id="contact-mail" href="#" rel="nofollow">unsere E-Mail-Adresse</a>
                  gesendet.
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
                  <textarea name="message" rows="5" required>Ich interessiere mich für hafermilch.de und möchte über einen Erwerb oder eine Kooperation sprechen.</textarea>
                </label>
                <button type="submit">Anfrage senden</button>
              </form>
            </div>
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

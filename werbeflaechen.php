<?php
$status = $_GET['status'] ?? null;

$messages = [
    'success' => [
        'class' => 'success',
        'text' => 'Ihre Werbeanfrage wurde erfolgreich gesendet. Wir melden uns per E-Mail.',
    ],
    'error' => [
        'class' => 'error',
        'text' => 'Die Werbeanfrage konnte nicht gesendet werden. Bitte versuchen Sie es erneut oder schreiben Sie an info@hafermilch.de.',
    ],
];

$flash = $messages[$status] ?? null;
?>
<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Werbeflächen auf hafermilch.de anfragen | Partnerseite</title>
    <meta
      name="description"
      content="Werbeflächen auf hafermilch.de als Partneranfrage anfragen. Geeignet für Marken, Shops und passende Angebote im Haferdrink-Umfeld."
    />
    <meta name="robots" content="index,follow,max-image-preview:large" />
    <meta name="theme-color" content="#f3ead8" />
    <meta property="og:title" content="Werbeflächen auf hafermilch.de anfragen" />
    <meta
      property="og:description"
      content="Partneranfrage für Werbeflächen auf hafermilch.de. Für Marken, Shops und passende Angebote im Haferdrink-Umfeld."
    />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://hafermilch.de/werbeflaechen.php" />
    <meta property="og:locale" content="de_DE" />
    <meta
      property="og:image"
      content="https://images.unsplash.com/photo-1588704486840-680342cff526?auto=format&fit=crop&w=1400&q=80"
    />
    <meta name="twitter:card" content="summary_large_image" />
    <meta
      name="twitter:title"
      content="Werbeflächen auf hafermilch.de anfragen"
    />
    <meta
      name="twitter:description"
      content="Partneranfrage für Werbeflächen auf hafermilch.de im Haferdrink-Umfeld."
    />
    <meta
      name="twitter:image"
      content="https://images.unsplash.com/photo-1588704486840-680342cff526?auto=format&fit=crop&w=1400&q=80"
    />
    <link rel="canonical" href="https://hafermilch.de/werbeflaechen.php" />
    <link rel="alternate" hreflang="de" href="https://hafermilch.de/werbeflaechen.php" />
    <link rel="stylesheet" href="./styles.css" />
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "Werbeflächen auf hafermilch.de anfragen",
        "url": "https://hafermilch.de/werbeflaechen.php",
        "description": "Partneranfrage für Werbeflächen auf hafermilch.de.",
        "inLanguage": "de",
        "mainEntity": {
          "@type": "Service",
          "name": "Werbeflächen auf hafermilch.de",
          "serviceType": "Werbepartnerschaft",
          "areaServed": "DE",
          "url": "https://hafermilch.de/werbeflaechen.php#kontakt"
        }
      }
    </script>
  </head>
  <body>
    <header class="site-header">
      <a class="brand" href="./index.php">hafermilch.de</a>
      <nav aria-label="Hauptnavigation">
        <a href="./index.php#domain">Domain</a>
        <a href="./werbeflaechen.php">Werbung</a>
        <a href="#kontakt">Kontakt</a>
      </nav>
      <a class="header-cta" href="./index.php#kontakt">Domain anfragen</a>
    </header>

    <main id="top">
      <section class="hero">
        <div class="hero-inner">
          <div class="hero-copy">
            <p class="eyebrow">Werbepartner-Anfrage</p>
            <h1>Werbeflächen auf hafermilch.de gezielt anfragen.</h1>
            <p class="lead">
              Für Marken, Shops und passende Angebote können Werbeformate auf
              hafermilch.de separat angefragt werden. So bleibt die Domain als
              Asset klar positioniert und Werbepartnerschaften laufen als
              eigener Vertriebskanal.
            </p>
          </div>

          <figure class="hero-media">
            <img
              src="https://images.unsplash.com/photo-1588704486840-680342cff526?auto=format&fit=crop&w=1400&q=80"
              alt="Kaffeezubereitung mit Haferdrink"
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
                ob das Format zu hafermilch.de passt.
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
                  <textarea name="message" rows="5" required>Ich interessiere mich für eine Werbepartnerschaft auf hafermilch.de und möchte verfügbare Platzierungen sowie Konditionen anfragen.</textarea>
                </label>
                <button type="submit">Werbeanfrage senden</button>
              </form>
            </div>
          </section>
        </div>
      </div>
    </main>

    <footer>
      <p>hafermilch.de - Domainanfragen und Werbeplatzierungen.</p>
    </footer>
  </body>
</html>

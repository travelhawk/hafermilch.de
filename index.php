<?php
$status = $_GET['status'] ?? null;
$topic = $_GET['topic'] ?? 'domain';

$contactVariants = [
    'domain' => [
        'headline' => 'Interesse an hafermilch.de?',
        'copy' => 'Beschreiben Sie kurz, wer anfragt und wie die Domain genutzt werden soll. Die Anfrage wird direkt an info@hafermilch.de gesendet.',
        'message' => 'Ich interessiere mich für hafermilch.de und möchte über einen Erwerb oder eine Kooperation sprechen.',
        'button' => 'Anfrage senden',
    ],
    'ads' => [
        'headline' => 'Interesse als Werbepartner?',
        'copy' => 'Teilen Sie kurz mit, welche Platzierung Sie anfragen und welche Marke oder welches Angebot beworben werden soll. Die Anfrage geht direkt an info@hafermilch.de.',
        'message' => 'Ich interessiere mich für eine Werbepartnerschaft auf hafermilch.de und möchte verfügbare Platzierungen sowie Konditionen anfragen.',
        'button' => 'Werbeanfrage senden',
    ],
];

$contactContent = $contactVariants[$topic] ?? $contactVariants['domain'];

$messages = [
    'success' => [
        'class' => 'success',
        'text' => 'Ihre Anfrage wurde erfolgreich gesendet. Wir melden uns per E-Mail.',
    ],
    'error' => [
        'class' => 'error',
        'text' => 'Die Anfrage konnte nicht gesendet werden. Bitte versuchen Sie es erneut oder schreiben Sie an info@hafermilch.de.',
    ],
];

$flash = $messages[$status] ?? null;
?>
<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>hafermilch.de | Domain für Hafermilch-Marken</title>
    <meta
      name="description"
      content="hafermilch.de ist als starke deutsche Kategorie-Domain verfügbar. Interessenten können eine Anfrage für Verhandlungen stellen."
    />
    <meta property="og:title" content="hafermilch.de" />
    <meta
      property="og:description"
      content="Die Domain für Hafermilch, pflanzliche Drinks und passende Werbeplatzierungen."
    />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://hafermilch.de" />
    <link rel="canonical" href="https://hafermilch.de" />
    <link rel="stylesheet" href="./styles.css" />
  </head>
  <body>
    <header class="site-header">
      <a class="brand" href="#top">hafermilch.de</a>
      <nav aria-label="Hauptnavigation">
        <a href="#domain">Domain</a>
        <a href="#werbung">Werbung</a>
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
              Ernährung, Handel, Content oder Kampagnen. Wer Interesse hat,
              kann direkt ein Kontaktformular ausfüllen.
            </p>
            <div class="hero-actions">
              <a class="button primary" href="#kontakt">Verhandlung anfragen</a>
              <a class="button secondary" href="./index.php?topic=ads#kontakt">Werbeflächen ansehen</a>
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
        <aside class="rail rail-left">
          <a class="ad-rail" href="./index.php?topic=ads#kontakt" aria-label="Linke Werbefläche buchen">
            <span>Werbung</span>
          </a>
        </aside>

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

          <section id="werbung" class="section ad-section">
            <div class="split">
              <div>
                <p class="section-kicker">Zusätzliche Idee</p>
                <h2>Werbeplätze am Rand können später monetarisiert werden.</h2>
              </div>
              <div class="ad-cards">
                <a class="ad-card-link" href="./index.php?topic=ads#kontakt" aria-label="Sidebar links anfragen">
                  <article>
                    <span>Sidebar links</span>
                    <strong>170 x flexibel</strong>
                    <p>Für Sponsored Links, Partnerangebote oder Display Ads.</p>
                  </article>
                </a>
                <a class="ad-card-link" href="./index.php?topic=ads#kontakt" aria-label="Sidebar rechts anfragen">
                  <article>
                    <span>Sidebar rechts</span>
                    <strong>170 x flexibel</strong>
                    <p>Ideal für Marken, Shops, Coupons oder Newsletter-Leads.</p>
                  </article>
                </a>
                <a class="ad-card-link wide" href="./index.php?topic=ads#kontakt" aria-label="Native Platzierung anfragen">
                  <article class="wide">
                    <span>Content-nah</span>
                    <strong>Native Platzierungen</strong>
                    <p>
                      Später erweiterbar um Rezept-Content, Marktvergleich oder
                      Anbieterprofile.
                    </p>
                  </article>
                </a>
              </div>
            </div>
          </section>

          <section id="kontakt" class="section contact-section">
            <div class="split">
              <div>
                <p class="section-kicker">Kontaktformular</p>
                <h2><?= htmlspecialchars($contactContent['headline'], ENT_QUOTES, 'UTF-8') ?></h2>
                <p><?= htmlspecialchars($contactContent['copy'], ENT_QUOTES, 'UTF-8') ?></p>
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
                <input name="topic" type="hidden" value="<?= htmlspecialchars($topic, ENT_QUOTES, 'UTF-8') ?>" />
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
                  <textarea name="message" rows="5" required><?= htmlspecialchars($contactContent['message'], ENT_QUOTES, 'UTF-8') ?></textarea>
                </label>
                <button type="submit"><?= htmlspecialchars($contactContent['button'], ENT_QUOTES, 'UTF-8') ?></button>
              </form>
            </div>
          </section>
        </div>

        <aside class="rail rail-right">
          <a class="ad-rail" href="./index.php?topic=ads#kontakt" aria-label="Rechte Werbefläche buchen">
            <span>Anzeige</span>
          </a>
        </aside>
      </div>
    </main>

    <footer>
      <p>hafermilch.de - Domainanfragen und Werbeplatzierungen.</p>
    </footer>
  </body>
</html>

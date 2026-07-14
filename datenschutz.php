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
    <title>Privacy policy | <?= htmlspecialchars($brandName, ENT_QUOTES, 'UTF-8') ?></title>
    <meta name="description" content="Privacy policy. This website uses no cookies and no analytics tools." />
    <meta name="robots" content="noindex,follow" />
    <meta name="theme-color" content="#f3ead8" />
    <link rel="canonical" href="<?= htmlspecialchars($baseUrl . '/datenschutz.php', ENT_QUOTES, 'UTF-8') ?>" />
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
            <h1>Privacy policy</h1>

            <h2>1. Privacy at a glance</h2>
            <h3>General information</h3>
            <p>
              The following information provides a simple overview of what happens to your
              personal data when you visit this website. Personal data is any data that can be
              used to identify you personally. Detailed information on data protection can be
              found in the privacy policy set out below.
            </p>

            <h3>Data collection on this website</h3>
            <p class="lead-note"><strong>Who is responsible for data collection on this website?</strong></p>
            <p>
              Data processing on this website is carried out by the website operator. You can
              find their contact details in the legal notice of this website.
            </p>
            <p class="lead-note"><strong>How do we collect your data?</strong></p>
            <p>
              Some data is collected when you provide it to us. This may, for example, be data
              you enter into the contact form. Other data is collected automatically by our IT
              systems when you visit the website. This is primarily technical data (e.g. browser,
              operating system or time of the page request).
            </p>
            <p class="lead-note"><strong>What do we use your data for?</strong></p>
            <p>
              Part of the data is collected to ensure the website is provided without errors.
              Data from the contact form is used exclusively to process your inquiry.
            </p>
            <p class="lead-note"><strong>What rights do you have regarding your data?</strong></p>
            <p>
              You have the right to receive information about the origin, recipients and purpose
              of your stored personal data free of charge at any time. You also have the right to
              request the correction, blocking or deletion of this data. You can contact us at
              any time at the address given in the legal notice regarding this and any other
              questions on the subject of data protection. You also have the right to lodge a
              complaint with the competent supervisory authority. In addition, under certain
              circumstances you have the right to request the restriction of the processing of
              your personal data. For details, see the section “Right to restriction of
              processing” below.
            </p>

            <h3>No cookies, no analytics tools</h3>
            <p>
              This website does not use cookies. No analytics, tracking or marketing tools and no
              services for evaluating your browsing behaviour are used. No user profile is
              created.
            </p>

            <h2>2. General information and mandatory disclosures</h2>
            <h3>Data protection</h3>
            <p>
              The operators of these pages take the protection of your personal data very
              seriously. We treat your personal data confidentially and in accordance with the
              statutory data protection regulations and this privacy policy. When you use this
              website, various personal data is collected. Personal data is data that can be used
              to identify you personally. This privacy policy explains what data we collect and
              what we use it for. It also explains how and for what purpose this is done. We
              would like to point out that data transmission over the internet (e.g. when
              communicating by e-mail) can have security gaps. Complete protection of data
              against access by third parties is not possible.
            </p>

            <h3>Information about the controller</h3>
            <p>The controller responsible for data processing on this website is:</p>
            <p>
              Industrievertretung Hochmuth e. K.<br />
              Owner: Söhnke Hochmuth<br />
              Waldblick 1 d<br />
              26188 Edewecht<br />
              Germany<br />
              E-mail: <a id="contact-mail" href="#" rel="nofollow">e-mail address is displayed here</a>
            </p>
            <p>
              The controller is the natural or legal person who alone or jointly with others
              decides on the purposes and means of processing personal data (e.g. names, e-mail
              addresses, etc.).
            </p>

            <h3>Revocation of your consent to data processing</h3>
            <p>
              Many data processing operations are only possible with your express consent. You
              can revoke consent you have already given at any time. An informal notification by
              e-mail is sufficient. The lawfulness of the data processing carried out until the
              revocation remains unaffected.
            </p>

            <h3>Right to object to data collection in special cases and to direct marketing (Art. 21 GDPR)</h3>
            <p>
              If data processing is based on Art. 6 (1) (e) or (f) GDPR, you have the right at
              any time to object to the processing of your personal data on grounds relating to
              your particular situation; this also applies to profiling based on these
              provisions. The respective legal basis on which processing is based can be found in
              this privacy policy. If you object, we will no longer process your personal data
              concerned unless we can demonstrate compelling legitimate grounds for the
              processing which override your interests, rights and freedoms, or the processing
              serves the assertion, exercise or defence of legal claims (objection pursuant to
              Art. 21 (1) GDPR). If your personal data is processed for direct marketing
              purposes, you have the right to object at any time to the processing of personal
              data concerning you for such marketing; this also applies to profiling insofar as
              it is related to such direct marketing. If you object, your personal data will
              subsequently no longer be used for direct marketing purposes (objection pursuant to
              Art. 21 (2) GDPR).
            </p>

            <h3>Right to lodge a complaint with the competent supervisory authority</h3>
            <p>
              In the event of infringements of the GDPR, data subjects have the right to lodge a
              complaint with a supervisory authority, in particular in the member state of their
              habitual residence, place of work or the place of the alleged infringement. This
              right exists without prejudice to any other administrative or judicial remedy.
            </p>

            <h3>Right to data portability</h3>
            <p>
              You have the right to have data that we process automatically on the basis of your
              consent or in performance of a contract handed over to you or to a third party in a
              common, machine-readable format. If you request the direct transfer of the data to
              another controller, this will only be done insofar as it is technically feasible.
            </p>

            <h3>SSL/TLS encryption</h3>
            <p>
              For security reasons and to protect the transmission of confidential content, such
              as inquiries you send to us as the site operator, this site uses SSL/TLS
              encryption. You can recognise an encrypted connection by the fact that the address
              bar of your browser changes from “http://” to “https://” and by the lock symbol in
              your browser bar. When SSL/TLS encryption is active, the data you transmit to us
              cannot be read by third parties.
            </p>

            <h3>Information, blocking, deletion and correction</h3>
            <p>
              Within the framework of the applicable statutory provisions, you have the right at
              any time to free information about your stored personal data, its origin and
              recipients and the purpose of data processing and, if applicable, a right to
              correction, blocking or deletion of this data. You can contact us at any time at
              the address given in the legal notice regarding this and any other questions on the
              subject of personal data.
            </p>

            <h3>Right to restriction of processing</h3>
            <p>
              You have the right to request the restriction of the processing of your personal
              data. You can contact us at any time at the address given in the legal notice. The
              right to restriction of processing exists in the following cases:
            </p>
            <ul>
              <li>
                If you dispute the accuracy of the personal data we hold about you, we usually
                need time to verify this. For the duration of the review, you have the right to
                request the restriction of the processing of your personal data.
              </li>
              <li>
                If the processing of your personal data was or is unlawful, you may request the
                restriction of data processing instead of deletion.
              </li>
              <li>
                If we no longer need your personal data, but you need it to exercise, defend or
                assert legal claims, you have the right to request the restriction of the
                processing of your personal data instead of deletion.
              </li>
              <li>
                If you have lodged an objection pursuant to Art. 21 (1) GDPR, a balance must be
                struck between your interests and ours. As long as it has not been determined
                whose interests prevail, you have the right to request the restriction of the
                processing of your personal data.
              </li>
            </ul>
            <p>
              If you have restricted the processing of your personal data, this data may – apart
              from being stored – only be processed with your consent or for the assertion,
              exercise or defence of legal claims, or to protect the rights of another natural or
              legal person, or for reasons of important public interest of the European Union or
              a member state.
            </p>

            <h2>3. Data collection on this website</h2>
            <h3>Server log files</h3>
            <p>
              The provider of these pages automatically collects and stores information in so-
              called server log files, which your browser automatically transmits to us. These
              are:
            </p>
            <ul>
              <li>browser type and browser version</li>
              <li>operating system used</li>
              <li>referrer URL</li>
              <li>host name of the accessing computer</li>
              <li>time of the server request</li>
              <li>IP address</li>
            </ul>
            <p>
              This data is not merged with other data sources. It is collected on the basis of
              Art. 6 (1) (f) GDPR. The website operator has a legitimate interest in the
              technically error-free presentation and optimisation of the website – for this
              purpose, server log files must be recorded.
            </p>

            <h3>Contact form</h3>
            <p>
              If you send us inquiries via the contact form, your details from the form,
              including the contact data you provide there, will be stored by us for the purpose
              of processing the inquiry and in case of follow-up questions. The data is
              transmitted to us by e-mail. We do not pass on this data without your consent.
            </p>
            <p>
              This data is processed on the basis of Art. 6 (1) (b) GDPR if your inquiry is
              related to the performance of a contract or is necessary to carry out pre-
              contractual measures. In all other cases, processing is based on our legitimate
              interest in the effective handling of inquiries addressed to us (Art. 6 (1) (f)
              GDPR) or on your consent (Art. 6 (1) (a) GDPR) if this was requested.
            </p>
            <p>
              The data you enter in the contact form will remain with us until you ask us to
              delete it, revoke your consent to storage, or the purpose for storing the data no
              longer applies (e.g. after your inquiry has been processed). Mandatory statutory
              provisions – in particular retention periods – remain unaffected.
            </p>

            <h3>Inquiry by e-mail</h3>
            <p>
              If you contact us by e-mail, your inquiry including all resulting personal data
              will be stored and processed by us for the purpose of handling your request. We do
              not pass on this data without your consent. The legal bases and deletion periods
              stated above apply accordingly.
            </p>

            <p><a href="./impressum.php">Go to the legal notice</a></p>
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

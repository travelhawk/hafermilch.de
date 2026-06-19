# hafermilch.de

Landingpage für die Domain `hafermilch.de` mit Kontaktformular und schlankem
PHP-Mailversand. Der Fokus liegt auf Domain-Anfragen für Verhandlungen und
optionalen Werbeplatzierungen.

## Getting Started

Die Seite braucht keinen Build-Schritt. Für das Formular wird nur ein Webserver
mit PHP benötigt.

Lokal starten:

```bash
php -S localhost:3000
```

Dann `http://localhost:3000` im Browser öffnen.

## Kontaktformular

Das Formular sendet per `POST` an [send.php](./send.php) und verschickt die
Anfrage an `info@hafermilch.de`.

Es gibt zwei Versandwege:

- Standardmäßig über PHP `mail()`, wenn der Webserver das bereits unterstützt.
- Optional per SMTP über [smtp-config.php](./smtp-config.php).

Wenn `mail()` auf deinem Hosting nicht funktioniert, trägst du in
[smtp-config.php](./smtp-config.php) diese Werte ein:

- `smtp_host`
- `smtp_port`
- `smtp_encryption`
- `smtp_username`
- `smtp_password`

Zusätzlich kannst du dort `from_email`, `from_name` und `to_email` anpassen.

## Zustellung

Für zuverlässige Zustellung sollten passende SPF-, DKIM- und DMARC-Einträge für
die Domain gesetzt sein.

## Deployment

Dieses Setup ist für klassische PHP-Webserver oder Shared Hosting gedacht.
Vercel ist dafür nicht geeignet.

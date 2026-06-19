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

## Mail-Konfiguration

Die Mail-Einstellungen liegen in `.env`. Diese Datei ist in `.gitignore`
eingetragen und wird nicht mit gepusht.

Als Vorlage dient [.env.example](./.env.example).

Wichtige Felder:

- `TO_EMAIL`
- `FROM_EMAIL`
- `FROM_NAME`
- `SMTP_HOST`
- `SMTP_PORT`
- `SMTP_ENCRYPTION`
- `SMTP_USERNAME`
- `SMTP_PASSWORD`

Wenn `SMTP_HOST`, `SMTP_USERNAME` und `SMTP_PASSWORD` leer sind, versucht das
Projekt weiter über PHP `mail()` zu senden. Sobald du die SMTP-Daten einträgst,
nutzt [send.php](./send.php) stattdessen SMTP.

## Zustellung

Für zuverlässige Zustellung sollten passende SPF-, DKIM- und DMARC-Einträge für
die Domain gesetzt sein.

## Deployment

Dieses Setup ist für klassische PHP-Webserver oder Shared Hosting gedacht.
Vercel ist dafür nicht geeignet.

# hafermilch.de

Landing page for the domain `hafermilch.de` with a contact form and a slim
PHP mail delivery flow. The focus is on domain inquiries for negotiations and
optional advertising placements.

## Getting Started

The site does not require a build step. The form only needs a web server with
PHP support.

Run locally:

```bash
php -S localhost:3000
```

Then open `http://localhost:3000` in the browser.

## Mail Configuration

Mail settings live in `.env`. That file is listed in `.gitignore` and is not
pushed to the repository.

Use [.env.example](./.env.example) as the template.

Important fields:

- `TO_EMAIL`
- `FROM_EMAIL`
- `FROM_NAME`
- `SMTP_HOST`
- `SMTP_PORT`
- `SMTP_ENCRYPTION`
- `SMTP_USERNAME`
- `SMTP_PASSWORD`

If `SMTP_HOST`, `SMTP_USERNAME`, and `SMTP_PASSWORD` are empty, the project
will continue trying to send through PHP `mail()`. As soon as you add SMTP
credentials, [send.php](./send.php) will use SMTP instead.

## Delivery

For reliable delivery, the domain should have matching SPF, DKIM, and DMARC
records configured.

## Deployment

This setup is intended for classic PHP web servers or shared hosting.
Vercel is not suitable for it.

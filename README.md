# hafermilch.de

Statische Landingpage fur die Domain `hafermilch.de`. Der Fokus liegt auf
Domain-Anfragen fur Verhandlungen und optionalen Werbeplatzierungen an den
Seiten.

## Getting Started

Die Seite braucht keinen Build-Schritt. Lokal einfach `index.html` im Browser
offnen oder einen kleinen statischen Server starten:

```bash
python -m http.server 3000
```

Open [http://localhost:3000](http://localhost:3000) with your browser.

## Kontaktformular

Das Formular nutzt bewusst `mailto:kontakt@hafermilch.de`, damit kein Backend
oder Datenbank-Setup notwendig ist. Bei Bedarf kann spater ein API Route Handler
oder ein Dienst wie Resend angebunden werden.

## Deploy on Vercel

Vercel kann das Repository als statische Seite deployen. Es gibt keine
Dependencies und keinen Build Command.

```bash
vercel
vercel --prod
```

Alternativ nach GitHub pushen und das Repository in Vercel importieren.

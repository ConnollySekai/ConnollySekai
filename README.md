# ConnollySekai

Landing Page for BTC Integration

## Setup
ConnollySekai uses Tailwindcss for its style so it has minimal custom css. Configure colors, fonts & font size inside **tailwind.config.js**.

### Compiling Assets
Assets uses Laravel mix's postCss plugin and use purgecss for production to remove unused css. Run these commands for compiling assets:
```
npm run dev  
npm run prod
```

### Run locally
You can either use artisan serve or Laravel mix's watch command.

Artisan Command:
```
php artisan serve
```

Laravel Mix Command:
```
npm run watch
```

### Queue Worker
Make sure to run queue worker to handle email submissions
```
php artisan queue:work --tries=3
```
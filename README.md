# 5th Element PHP site

This project uses a simple PHP structure that keeps public routes at the repository root and groups implementation files by responsibility.

```text
assets/       Browser-facing images, icons, SVG artwork, styles, and scripts
components/   Reusable site UI such as the shared header, footer, cart, and reviews
config/       Application paths and URL helpers
data/         Structured content used by pages
includes/     Shared PHP helper functions
layouts/      Shared inner-page document shell
sections/     Reusable page sections, grouped by page area
*.php         Public page routes (for example, /catering.php)
```

## Local preview

Run the built-in PHP server from the project root:

```powershell
php -S 127.0.0.1:8181 -t .
```

Then open `http://127.0.0.1:8181/`.

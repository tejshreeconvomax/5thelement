<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : '5th Element Indian Restaurant'; ?></title>
  <meta name="description" content="<?php echo isset($pageDescription) ? htmlspecialchars($pageDescription) : 'Authentic Indian Cuisine across Florida — Dine-in, Takeout, Delivery & Catering'; ?>">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500;1,600;1,700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#C0392B',
            'primary-hover': '#A93123',
            gold: '#C9A876',
            dark: '#1A120B',
            'dark-2': '#2A1F17',
            cream: '#FBF7F0',
            'cream-2': '#F5EFE4',
            ink: '#2A1F17',
            muted: '#6B5D51',
          },
          fontFamily: {
            sans: ['Inter', 'system-ui', 'sans-serif'],
            display: ['Playfair Display', 'Georgia', 'serif'],
            mono: ['JetBrains Mono', 'monospace'],
          },
        },
      },
    }
  </script>

  <style>
    :root {
      --color-primary: #C0392B;
      --color-primary-hover: #A93123;
      --color-gold: #C9A876;
      --color-dark: #1A120B;
      --color-dark-2: #2A1F17;
      --color-cream: #FBF7F0;
      --color-cream-2: #F5EFE4;
      --color-ink: #2A1F17;
      --color-muted: #6B5D51;
      --color-line: rgba(192, 57, 43, 0.15);
      --background: var(--color-cream);
      --foreground: var(--color-ink);
    }

    body {
      background: var(--background);
      color: var(--foreground);
      font-family: 'Inter', system-ui, sans-serif;
      -webkit-font-smoothing: antialiased;
      text-rendering: optimizeLegibility;
    }

    h1, h2, h3, h4, h5 {
      font-family: 'Playfair Display', Georgia, serif;
      letter-spacing: -0.01em;
    }

    /* Small ornamental divider used above section headings */
    .eyebrow {
      font-family: 'Inter', sans-serif;
      font-size: 0.72rem;
      font-weight: 600;
      letter-spacing: 0.32em;
      text-transform: uppercase;
      color: var(--color-primary);
    }

    .divider-ornament {
      display: inline-flex;
      align-items: center;
      gap: 0.6rem;
      color: var(--color-gold);
    }
    .divider-ornament::before,
    .divider-ornament::after {
      content: "";
      width: 32px;
      height: 1px;
      background: currentColor;
      opacity: 0.6;
    }

    /* subtle paper-grid texture used behind the hero card */
    .bg-paper-grid {
      background-image:
        linear-gradient(to right, rgba(192,57,43,0.06) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(192,57,43,0.06) 1px, transparent 1px);
      background-size: 32px 32px;
    }

    /* Magnetic button */
    .hi-magnet {
      transform: translate3d(var(--bx,0), var(--by,0), 0);
      transition: transform 220ms cubic-bezier(.2,.7,.2,1),
                  background-color 200ms ease;
    }

    /* Testimonials slide animation */
    .ts-slide {
      animation: ts-in 520ms cubic-bezier(.2,.7,.2,1) both;
    }
    @keyframes ts-in {
      0%   { opacity: 0; transform: translateY(10px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    @media (prefers-reduced-motion: reduce) {
      .hi-magnet { transition: none; }
      .ts-slide { animation: none; }
    }
  </style>
  <?php if (isset($sampleStylesheet)): ?>
  <link rel="stylesheet" href="<?php echo htmlspecialchars($sampleStylesheet, ENT_QUOTES, 'UTF-8'); ?>">
  <?php endif; ?>
</head>
<body class="bg-cream text-ink">

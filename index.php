<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>5th Element — Choose a Sample</title>
  <style>
    :root {
      --night: #182622;
      --night-soft: #22332e;
      --lime: #b0ce68;
      --saffron: #f29119;
      --clay: #854030;
      --cream: #fbf8ef;
      --muted: #cbd2bc;
    }

    * { box-sizing: border-box; }

    html { background: var(--night); }

    body {
      min-width: 320px;
      min-height: 100vh;
      margin: 0;
      color: var(--cream);
      background:
        radial-gradient(circle at 88% 4%, rgba(176, 206, 104, .16), transparent 25rem),
        radial-gradient(circle at 3% 98%, rgba(242, 145, 25, .13), transparent 26rem),
        var(--night);
      font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
    }

    .shell {
      width: min(1240px, calc(100% - 48px));
      margin: 0 auto;
      padding: clamp(24px, 4vw, 50px) 0 40px;
    }

    .topbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 24px;
      padding-bottom: 24px;
      border-bottom: 1px solid rgba(251, 248, 239, .18);
    }

    .brand {
      display: inline-flex;
      align-items: center;
      width: 230px;
      background: transparent;
    }

    .brand img {
      display: block;
      width: 100%;
      height: auto;
      filter: drop-shadow(0 5px 8px rgba(0, 0, 0, .3));
    }

    .availability {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      margin: 0;
      color: var(--muted);
      font-size: .69rem;
      font-weight: 700;
      letter-spacing: .14em;
      text-transform: uppercase;
    }

    .availability::before {
      width: 8px;
      height: 8px;
      content: "";
      background: var(--lime);
      border-radius: 50%;
      box-shadow: 0 0 0 4px rgba(176, 206, 104, .13);
    }

    .intro {
      display: grid;
      grid-template-columns: minmax(0, 1.2fr) minmax(220px, .55fr);
      gap: 50px;
      align-items: end;
      padding: clamp(52px, 9vw, 108px) 0 clamp(32px, 5vw, 54px);
    }

    .eyebrow {
      display: flex;
      align-items: center;
      gap: 10px;
      margin: 0 0 17px;
      color: var(--lime);
      font-size: .69rem;
      font-weight: 750;
      letter-spacing: .16em;
      text-transform: uppercase;
    }

    .eyebrow::before {
      width: 29px;
      height: 1px;
      content: "";
      background: currentColor;
    }

    h1 {
      max-width: 800px;
      margin: 0;
      font-family: Georgia, "Times New Roman", serif;
      font-size: clamp(3.1rem, 7.7vw, 7.1rem);
      font-weight: 400;
      letter-spacing: -.075em;
      line-height: .83;
    }

    h1 em {
      color: var(--lime);
      font-style: italic;
    }

    .intro-copy {
      max-width: 330px;
      margin: 0 0 4px;
      color: var(--muted);
      font-size: .97rem;
      line-height: 1.65;
    }

    .sample-grid {
      display: grid;
      grid-template-columns: 1.3fr 1fr 1fr;
      gap: 15px;
    }

    .sample {
      position: relative;
      display: flex;
      min-height: clamp(350px, 39vw, 480px);
      overflow: hidden;
      color: var(--cream);
      isolation: isolate;
      text-decoration: none;
      background: var(--sample-base);
      box-shadow: 0 20px 30px -26px #000;
      transition: transform 300ms cubic-bezier(.22, .61, .36, 1), box-shadow 300ms ease;
    }

    .sample::before {
      position: absolute;
      inset: 0;
      z-index: 1;
      content: "";
      background: linear-gradient(180deg, rgba(13, 23, 20, .08) 10%, rgba(13, 23, 20, .35) 54%, rgba(13, 23, 20, .94) 100%);
    }

    .sample::after {
      position: absolute;
      inset: 13px;
      z-index: 2;
      content: "";
      border: 1px solid rgba(255, 255, 255, .37);
      transition: inset 300ms ease;
    }

    .sample:hover {
      box-shadow: 0 28px 42px -25px #000;
      transform: translateY(-7px);
    }

    .sample:hover::after { inset: 9px; }

    .sample:focus-visible {
      outline: 3px solid var(--lime);
      outline-offset: 4px;
    }

    .sample-image {
      position: absolute;
      inset: 0;
      z-index: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      transform: scale(1.01);
      transition: transform 700ms cubic-bezier(.22, .61, .36, 1), filter 300ms ease;
    }

    .sample:hover .sample-image {
      filter: saturate(1.12);
      transform: scale(1.08);
    }

    .sample-content {
      position: relative;
      z-index: 3;
      display: flex;
      flex: 1;
      flex-direction: column;
      justify-content: space-between;
      padding: 29px;
    }

    .sample-tag {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 14px;
      margin: 0;
      font-size: .67rem;
      font-weight: 750;
      letter-spacing: .13em;
      text-transform: uppercase;
    }

    .sample-tag span:last-child {
      color: var(--sample-accent);
    }

    .sample-bottom { max-width: 28ch; }

    .sample-name {
      margin: 0;
      font-family: Georgia, "Times New Roman", serif;
      font-size: clamp(2.2rem, 4vw, 4.3rem);
      font-weight: 400;
      letter-spacing: -.065em;
      line-height: .86;
    }

    .sample-detail {
      margin: 14px 0 0;
      color: rgba(255, 255, 255, .82);
      font-size: .82rem;
      line-height: 1.5;
    }

    .sample-action {
      display: inline-flex;
      align-items: center;
      gap: 13px;
      margin-top: 23px;
      padding-bottom: 7px;
      color: var(--sample-accent);
      border-bottom: 1px solid currentColor;
      font-size: .68rem;
      font-weight: 800;
      letter-spacing: .12em;
      text-transform: uppercase;
    }

    .sample-action b {
      font-size: 1.2rem;
      font-weight: 400;
      line-height: .6;
      transition: transform 250ms ease;
    }

    .sample:hover .sample-action b { transform: translateX(5px); }

    .sample-one { --sample-base: #7d3325; --sample-accent: #ffc86a; }
    .sample-two { --sample-base: #195b50; --sample-accent: #bbdd76; }
    .sample-three { --sample-base: #a5491c; --sample-accent: #ffe0a5; }

    .footer-note {
      display: flex;
      justify-content: space-between;
      gap: 24px;
      padding-top: 21px;
      color: rgba(203, 210, 188, .67);
      border-top: 1px solid rgba(251, 248, 239, .18);
      font-size: .69rem;
      letter-spacing: .08em;
      text-transform: uppercase;
    }

    @media (max-width: 800px) {
      .intro { grid-template-columns: 1fr; gap: 23px; }
      .sample-grid { grid-template-columns: 1fr; }
      .sample { min-height: 360px; }
      .sample-content { padding: 28px; }
      .sample-name { font-size: 3.4rem; }
    }

    @media (max-width: 500px) {
      .shell { width: min(100% - 30px, 1240px); }
      .topbar { align-items: flex-start; flex-direction: column; }
      .brand { width: 205px; }
      h1 { font-size: clamp(3rem, 17vw, 4.9rem); }
      .sample { min-height: 332px; }
      .footer-note { flex-direction: column; gap: 8px; }
    }

    @media (prefers-reduced-motion: reduce) {
      *, *::before, *::after { transition-duration: .01ms !important; }
    }
  </style>
</head>
<body>
  <main class="shell">
    <header class="topbar">
      <a class="brand" href="/" aria-label="5th Element sample selection">
        <img src="assets/images/5th-element-logo-transparent.png?v=1" alt="5th Element Indian Restaurant">
      </a>
      <p class="availability">Three concepts to explore</p>
    </header>

    <section class="intro" aria-labelledby="page-title">
      <div>
        <p class="eyebrow">Explore our concepts</p>
        <h1 id="page-title">Find your <em>favourite</em> flavour.</h1>
      </div>
      <p class="intro-copy">Three distinct expressions of the 5th Element. Select a sample to view its full restaurant experience.</p>
    </section>

    <nav class="sample-grid" aria-label="Sample experiences">
      <a class="sample sample-one" href="Sample1/" aria-label="Open the Royal Theme Restaurant sample">
        <img class="sample-image" src="assets/images/dine.webp" alt="Warmly lit Indian restaurant dining room">
        <div class="sample-content">
          <p class="sample-tag"><span>Sample 01</span><span>Royal theme</span></p>
          <div class="sample-bottom">
            <h2 class="sample-name">Royal Theme Restaurant</h2>
            <p class="sample-detail">Ornate arches, glowing lanterns and gracious seating for an elevated evening of Indian hospitality.</p>
            <span class="sample-action">Explore <b aria-hidden="true">→</b></span>
          </div>
        </div>
      </a>

      <a class="sample sample-two" href="Sample2/" aria-label="Open the Contemporary Restaurant sample">
        <img class="sample-image" src="assets/images/loc-sanford.webp" alt="Contemporary restaurant interior">
        <div class="sample-content">
          <p class="sample-tag"><span>Sample 02</span><span>Contemporary</span></p>
          <div class="sample-bottom">
            <h2 class="sample-name">Contemporary Restaurant</h2>
            <p class="sample-detail">A fresh, social dining room with clean lines, open space and an all-day neighbourhood energy.</p>
            <span class="sample-action">Explore <b aria-hidden="true">→</b></span>
          </div>
        </div>
      </a>

      <a class="sample sample-three" href="Sample3/" aria-label="Open the Royal Banquet Restaurant sample">
        <img class="sample-image" src="assets/images/catering-bg.webp" alt="An elegantly decorated banquet setting">
        <div class="sample-content">
          <p class="sample-tag"><span>Sample 03</span><span>Celebrations</span></p>
          <div class="sample-bottom">
            <h2 class="sample-name">Royal Banquet Restaurant</h2>
            <p class="sample-detail">A dramatic, candlelit setting designed for family milestones, festive gatherings and private celebrations.</p>
            <span class="sample-action">Explore <b aria-hidden="true">→</b></span>
          </div>
        </div>
      </a>
    </nav>

    <footer class="footer-note">
      <span>5th Element Indian Restaurant</span>
      <span>Choose a sample to continue</span>
    </footer>
  </main>
</body>
</html>

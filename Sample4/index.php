<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>5th Element | Indian food, your way</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,400;0,500;0,600;1,400;1,500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="hero-layout-fix.css">
  <link rel="stylesheet" href="responsive.css">
  <link rel="stylesheet" href="ways-to-eat.css">
  <link rel="stylesheet" href="ways-slider.css">
  <link rel="stylesheet" href="samosa-specials.css">
</head>
<body>
  <header class="hero" id="home">
    <nav class="nav-shell" aria-label="Primary navigation">
      <a class="brand" href="#home" aria-label="5th Element home"><img src="5th-Element-1.webp" alt="5th Element Indian Restaurant"></a>
      <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="site-nav"><i></i><i></i><span class="sr-only">Open navigation</span></button>
      <div class="site-nav" id="site-nav"><a class="active" href="#home">Home</a><a href="#about">About</a><a href="#menu">Menu</a><a href="#locations">Locations</a><a href="#catering">Catering</a><a href="#events">Events</a><a href="#contact">Contact</a></div>
      <a class="order-button" href="#locations">Order Online <b>→</b></a>
    </nav>
    <div class="hero-copy"><h1>Indian food,<br>your way.</h1><p>Authentic flavours. Unforgettable experience.</p><a class="explore-button" href="#menu">Explore Our Menu <b>→</b></a></div>
    <div class="cream-curve" aria-hidden="true"></div>
  </header>
  <main id="about">
    <section class="ways-to-eat" aria-labelledby="ways-title">
      <div class="ways-heading"><p>→&nbsp; Good food. Good mood. &nbsp;←</p><h2 id="ways-title">Choose how to eat.</h2></div>
      <div class="ways-slider" data-ways-slider>
        <button class="ways-arrow ways-arrow-prev" type="button" aria-label="Show previous ways to eat" aria-controls="ways-cards">←</button>
        <div class="ways-cards" id="ways-cards" aria-label="Ways to enjoy 5th Element" tabindex="0">
          <?php foreach ([['Dine in','Relax &amp; enjoy','service-dine.png'],['Order pickup','Quick &amp; easy','service-pickup.png'],['Order delivery','At your doorstep','service-delivery.png'],['Catering','For every occasion','service-catering.png']] as [$title,$detail,$image]): ?>
            <a class="way-card" href="#locations"><img src="assets/<?= $image ?>" alt="<?= $title ?> at 5th Element"><span><strong><?= $title ?></strong><small><?= $detail ?></small></span></a>
          <?php endforeach; ?>
        </div>
        <button class="ways-arrow ways-arrow-next" type="button" aria-label="Show more ways to eat" aria-controls="ways-cards">→</button>
      </div>
    </section>
    <section class="samosa-feature" id="menu" aria-labelledby="samosa-title">
      <img class="samosa-ornament samosa-ornament-left" src="assets/samosa-ornament-left.png" alt="" aria-hidden="true">
      <img class="samosa-ornament samosa-ornament-right" src="assets/samosa-ornament-right.png" alt="" aria-hidden="true">
      <div class="samosa-content">
        <h2 id="samosa-title">Samosa chaat</h2>
        <p>A perfect blend<br>of spice and crunch.</p>
        <a class="samosa-button" href="#locations">Try It Today <b>→</b></a>
      </div>
      <div class="samosa-dish" aria-hidden="true"><img src="assets/samosa-chaat-bowl.png" alt=""></div>
    </section>

    <section class="weekly-specials" aria-labelledby="specials-title">
      <div class="specials-inner">
        <div class="specials-title-wrap"><h2 id="specials-title">This week’s<br><em>Specials</em></h2><span class="specials-flourish">❧</span></div>
        <div class="specials-list" role="list">
          <?php foreach ([['Paneer','Tikka Masala','special-paneer.png'],['Lamb','Rogan Josh','special-lamb.png'],['Mango','Lassi','special-mango.png'],['Gulab','Jamun','special-gulab.png']] as [$name,$detail,$image]): ?>
            <article class="special-item" role="listitem"><img src="assets/<?= $image ?>" alt="<?= $name ?> <?= $detail ?>"><h3><?= $name ?><br><?= $detail ?></h3></article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  </main>
  <script src="script.js" defer></script>
</body>
</html>

<?php require_once __DIR__ . '/../includes/functions.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Urban Spice — 5th Element</title>
    <meta name="description" content="Urban Spice by 5th Element: Modern Indian fusion with a Florida state of mind.">
    <link rel="stylesheet" href="/assets/css/sample-3.css?v=44">
</head>

<body class="op-page">
    <svg aria-hidden="true" class="op-svg">
        <defs>
            <symbol id="op-dine" viewBox="0 0 24 24">
                <path d="M4 2v7m3-7v7m3-7v7M4 7h6M7 9v13M19 2c-4 3-4 9 0 10V2Zm0 10v10" />
            </symbol>
            <symbol id="op-bag" viewBox="0 0 24 24">
                <path d="M4 8h16l1 13H3L4 8Zm4 0V6a4 4 0 0 1 8 0v2" />
            </symbol>
            <symbol id="op-truck" viewBox="0 0 24 24">
                <path d="M1 5h13v12H1V5Zm13 4h5l4 5v3h-9" />
                <circle cx="5" cy="18" r="3" />
                <circle cx="18" cy="18" r="3" />
            </symbol>
            <symbol id="op-feast" viewBox="0 0 24 24">
                <path d="M2 18h20M4 18a8 8 0 0 1 16 0M12 10V7m-2 0h4M4 22h16" />
            </symbol>
        </defs>
    </svg><a class="op-skip" href="#main">Skip to content</a><?php $headerCta='Find a location'; require __DIR__ . '/header.php'; ?>
    <main id="main">
        <section class="op-hero" id="home">
            <figure class="op-hero-backdrop" aria-hidden="true"><img src="/assets/images/hero-biryani.webp" alt=""></figure>
            <span class="op-hero-dot-grid op-hero-dot-grid-left" aria-hidden="true"></span><span class="op-hero-dot-grid op-hero-dot-grid-right" aria-hidden="true"></span>
            <div class="op-hero-container">
                <div class="op-hero-copy op-reveal">
                    <p class="op-hero-kicker">INDIAN RESTAURANT · FLORIDA</p>
                    <h1>Indian food,<br><em>your way.</em></h1>
                    <p>Freshly prepared Indian food for dine-in, pickup, delivery, and events—starting with the restaurant nearest you.</p>
                    <div class="op-hero-location-action" aria-label="Choose a restaurant location before ordering"><a class="op-hero-location-link" href="#locations"><span aria-hidden="true">⌖</span> Choose a Florida location</a><a class="op-hero-order-link op-magnet" href="#locations">View locations <b>→</b></a></div>
                </div>
                <div class="op-hero-bottom"><span>CHOOSE A LOCATION BEFORE YOU ORDER</span><a href="#dining">Explore ways to dine <b>↓</b></a></div>
            </div>
        </section>
        <section class="op-service-ribbon" aria-label="Restaurant services">
            <p>CHOOSE HOW YOU’D LIKE TO ORDER</p><?php foreach ([['Dine in','op-dine','#dining'],['Order pickup','op-bag','#locations'],['Order delivery','op-truck','#locations'],['Plan catering','op-feast','#catering']] as [$title,$icon,$href]): ?><a href="<?= $href ?>"><svg>
                    <use href="#<?= $icon ?>" />
                </svg><span><?= $title ?></span><b>↗</b></a><?php endforeach; ?>
        </section>
        <section class="op-dining-chapters" id="dining">
            <header class="op-chapter-head op-reveal">
                <p class="op-overline">WAYS TO DINE AND ORDER</p>
                <h2>Choose how<br>to <em>eat.</em></h2>
                <p>Visit one of our restaurants, order food to go, or ask us to cater your next gathering.</p>
            </header>
            <div class="op-chapter-stack"><?php foreach ([['Dine in','dine.webp','Join us at the restaurant for freshly prepared Indian food and full table service.','View locations &amp; hours','DINE AT THE RESTAURANT'],['Order pickup','order.webp','Choose a location, place your order, and pick it up when it is ready.','Choose a pickup location','ORDER FOR PICKUP'],['Order delivery','dish-biryani.webp','See delivery availability, current prices, and ordering options for your area.','Choose a delivery location','ORDER FOR DELIVERY'],['Catering','catering.webp','Plan food for office lunches, family celebrations, weddings, and private events.','Ask about catering','CATERING FOR GROUPS']] as $i => [$title,$image,$copy,$cta,$line]): ?><article class="op-chapter chapter-<?= $i+1 ?> op-reveal">
                    <figure><img src="/assets/images/<?= $image ?>" alt="<?= $title ?> at 5th Element" loading="lazy">
                        <figcaption><?= $line ?></figcaption>
                    </figure>
                    <div><span>0<?= $i+1 ?> / 04</span>
                        <h3><?= $title ?></h3>
                        <p><?= $copy ?></p><a href="<?= $i===3?'#catering':'#locations' ?>"><?= $cta ?> <b>↗</b></a>
                    </div>
                </article><?php endforeach; ?></div>
        </section>
        <section class="op-weekly-table" id="weekly">
            <div class="op-weekly-shell">
                <header class="op-weekly-intro op-reveal">
                    <p class="op-overline">FEATURED DISHES THIS WEEK</p>
                    <h2>This week’s <em>specials.</em></h2>
                    <p>These dishes are featured this week. Choose a location to view current prices, availability, and ordering options.</p>
                </header>
                <nav class="op-weekly-grid" aria-label="This week’s featured dishes"><?php foreach ([['Samosa chaat','week-starter.webp','STARTER'],['Paneer tikka masala','paneer-tikka-masala.webp','VEGETARIAN'],['Lamb rogan josh','week-nonveg.webp','NON-VEGETARIAN'],['Mango lassi','week-drink.webp','DRINK'],['Gulab jamun','week-dessert.webp','DESSERT']] as $i => [$title,$image,$tag]): ?><a class="op-weekly-card<?= $i === 0 ? ' is-featured' : '' ?> op-reveal" href="#locations" aria-label="Choose a location for <?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?> pricing and ordering"><img src="/assets/images/<?= $image ?>" alt="<?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?>" loading="lazy"><div class="op-weekly-card-content"><small><?= $tag ?></small><h3><?= $title ?></h3><b>Choose location <i>→</i></b></div></a><?php endforeach; ?></nav>
            </div>
        </section>
        <section class="op-story-loom" id="our-story">
            <div class="op-loom-copy op-reveal">
                <p class="op-overline">ABOUT 5TH ELEMENT</p>
                <h2>Indian food<br><em>to share.</em></h2>
                <p>Our cooking starts with Indian classics and fresh ingredients, then makes room for the flavours and formats people enjoy sharing at the table.</p><a class="op-arrow-link" href="#menu">Browse our menu categories <b>↓</b></a>
            </div>
            <figure class="op-loom-main op-reveal"><img src="/assets/images/Indian-food.webp" alt="A colourful Indian food spread">
                <figcaption>FRESHLY PREPARED<br>INDIAN FOOD</figcaption>
            </figure>
            <figure class="op-loom-detail"><img src="/assets/images/spices.webp" alt="Colourful whole spices"></figure>
        </section>
        <section class="op-menu-layers" id="menu">
            <header class="op-layers-head op-reveal">
                <p class="op-overline">EXPLORE OUR MENU</p>
                <h2>Browse the<br><em>menu.</em></h2><a class="op-ink-button op-magnet" href="#locations">Choose a location to order <b>↗</b></a>
            </header>
            <nav class="op-kitchen-index" aria-label="Menu categories"><?php foreach ([['Biryanis & rice','Fragrant rice dishes served with your choice of proteins and sides.','cuisine-biryani.webp'],['Curries & classics','Classic Indian curries, rich sauces, and dishes made for naan.','paneer-tikka-masala.webp'],['Small plates','Starters and shareable dishes for the table.','cuisine-appetizers-i.webp'],['Indo-Chinese favourites','Indian-Chinese dishes with bold sauces and plenty of heat.','cuisine-indochinese-i.webp']] as $i => [$title,$copy,$image]): ?><a class="op-kitchen-route op-reveal" href="#locations"><span class="op-kitchen-count">0<?= $i+1 ?></span><div class="op-kitchen-copy"><h3><?= $title ?></h3><p><?= $copy ?></p></div><figure><img src="/assets/images/<?= $image ?>" alt="<?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?>" loading="lazy"></figure><span class="op-kitchen-action">Choose location <b>→</b></span></a><?php endforeach; ?></nav>
        </section>
        <section class="op-flavour-cabinet" id="cuisines">
            <header class="op-cabinet-head op-reveal">
                <p class="op-overline">MENU CATEGORIES</p>
                <h2>Choose a<br><em>category.</em></h2>
                <p>Choose a category, then select a location to see the current menu, prices, and availability.</p>
            </header>
            <div class="op-cabinet-shelves"><?php foreach ([['Appetizers','cuisine-appetizers-i.webp'],['Biryanis & rice','cuisine-biryani.webp'],['Curries','week-veg.webp'],['Indo-Chinese','cuisine-indochinese-i.webp'],['Tandoor & breads','ig5.webp'],['Jewels of the sea','cuisine-seafood.webp'],['Desserts','ig4.webp'],['Beverages','week-drink.webp']] as $i => [$title,$image]): ?><a class="op-cabinet-item cabinet-<?= $i+1 ?>" href="#locations"><img src="/assets/images/<?= $image ?>" alt="<?= $title ?>" loading="lazy"><span><?= $title ?></span></a><?php endforeach; ?></div>
        </section>
        <section class="op-feast-cinema" id="catering">
            <div class="op-cinema-copy op-reveal">
                <p class="op-overline">CATERING FOR GROUPS &amp; EVENTS</p>
                <h2>Catering for<br><em>your event.</em></h2>
                <p>Plan Indian food for office lunches, birthdays, weddings, and private gatherings. Tell us your date, guest count, and location to get started.</p><a class="op-ink-button op-magnet" href="#contact">Ask about catering <b>↗</b></a>
            </div>
            <div class="op-catering-showcase op-reveal"><div class="op-cinema-photo"><div class="op-cinema-media"><video autoplay muted loop playsinline preload="metadata" poster="/assets/images/event-wedding.webp" aria-label="Kitchen motion">
                        <source src="/assets/video/kitchen-motion.mp4" type="video/mp4">
                    </video><img src="/assets/images/event-wedding.webp" alt="An Indian wedding celebration table"></div><p><span>✦</span> CATERING MADE FOR YOUR EVENT <i>FRESHLY PREPARED · FLORIDA</i></p></div>
                <div class="op-cinema-cues" aria-label="Catering occasions"><span>WEDDINGS</span><span>OFFICE LUNCHES</span><span>PRIVATE PARTIES</span><span>FAMILY EVENTS</span><span>GROUP ORDERS</span></div>
            </div>
        </section>
        <section class="op-location-trail" id="locations">
            <header class="op-location-showcase-head op-reveal"><div class="op-location-ornament" aria-hidden="true"><i></i><span>✦</span><i></i></div><p class="op-overline">OUR FOUR FLORIDA RESTAURANTS</p><h2>Choose your <em>location.</em></h2><p>Select a restaurant to view its menu, current prices, and online ordering options.</p><div class="op-location-ornament op-location-ornament-bottom" aria-hidden="true"><i></i><span>✦</span><i></i></div></header>
            <nav class="op-location-deck" aria-label="Choose a restaurant location"><?php foreach ([['Baymeadows','JACKSONVILLE, FL','jacksonville-bay-meadows.webp','5th Element Baymeadows restaurant exterior'],['Towncenter','JACKSONVILLE, FL','town-center.webp','5th Element Towncenter restaurant exterior'],['Daytona','DAYTONA, FL','daytona-menu.webp','5th Element Daytona restaurant exterior'],['Palm Coast','PALM COAST, FL','palm-coast-fl.webp','5th Element Palm Coast restaurant exterior']] as [$name,$city,$image,$alt]): ?><a class="op-location-card op-reveal" href="#menu" aria-label="View menu and order from <?= $name ?>"><figure><img src="/assets/images/<?= $image ?>" alt="<?= $alt ?>" loading="lazy"></figure><div class="op-location-card-title"><h3><?= $name ?></h3><p><?= $city ?></p></div><span class="op-location-card-action">View Menu &amp; Order <b>→</b></span></a><?php endforeach; ?></nav>
        </section>
        <section class="op-voices" id="testimonials">
            <header class="op-voices-head op-reveal">
                <p class="op-overline">GUEST REVIEWS</p>
                <h2>What guests<br><em>are saying.</em></h2>
                <p>Recent feedback from diners at our Florida restaurant locations.</p>
            </header>
            <div class="op-slider" data-slider><div class="op-slider-viewport" id="testimonial-slider" tabindex="0"><div class="op-voice-wall op-slider-track"><?php foreach ([['The food is always fresh, full of flavour and the service is excellent. The biryani and butter chicken never miss.','Priya S.','Baymeadows'],['Amazing variety, authentic taste and a warm atmosphere. Highly recommend for both dining and catering.','Rahul M.','Towncenter'],['Everything from the appetisers to the desserts was absolutely delicious.','Neha K.','Daytona'],['A real gem on the coast. Rich, honest flavours, generous portions and such friendly staff.','Daniel R.','Palm Coast'],['We ordered catering for our daughter’s birthday and the spread was incredible.','Anita P.','Baymeadows'],['The tandoori platter and garlic naan are out of this world.','Marcus L.','Daytona']] as $i => [$quote,$name,$place]): ?><blockquote class="voice-<?= $i+1 ?> op-slider-slide"><span>★★★★★</span>
                        <p>“<?= $quote ?>”</p>
                        <footer><?= $name ?> <i>· <?= $place ?></i></footer>
                    </blockquote><?php endforeach; ?></div></div><div class="op-slider-controls"><button type="button" data-slider-prev aria-controls="testimonial-slider" aria-label="Show previous guest reviews">←</button><p><span data-slider-current>01</span> / 06 · GUEST REVIEWS</p><button type="button" data-slider-next aria-controls="testimonial-slider" aria-label="Show more guest reviews">→</button></div></div>
        </section>
        <section class="op-journal-tape" id="journal">
            <header class="op-tape-head op-reveal">
                <p class="op-overline">RECIPES &amp; RESTAURANT STORIES</p>
                <h2>From our<br><em>kitchen.</em></h2>
                <p>Learn about Indian dishes, ingredients, food traditions, and what our cooks are making.</p>
            </header>
            <div class="op-slider op-journal-slider" data-slider><div class="op-slider-viewport" id="journal-slider" tabindex="0"><div class="op-tape-stream op-slider-track"><?php foreach ([['The art of biryani: a royal legacy','ig1.webp'],['Five spices that wake up a kitchen','ig2.webp'],['Behind the pass: our kitchen story','ig3.webp'],['A guide to Indian street food','ig4.webp'],['How to pair wine with Indian food','ig5.webp'],['Festivals & feasts: seasonal menus','ig6.webp']] as $i => [$title,$image]): ?><a class="op-tape-story story-<?= $i+1 ?> op-slider-slide" href="#contact"><img src="/assets/images/<?= $image ?>" alt="" loading="lazy"><span>ARTICLE · 0<?= $i+1 ?></span>
                        <h3><?= $title ?></h3><b>Read article ↗</b>
                    </a><?php endforeach; ?></div></div><div class="op-slider-controls"><button type="button" data-slider-prev aria-controls="journal-slider" aria-label="Show previous articles">←</button><p><span data-slider-current>01</span> / 06 · STORIES FROM OUR KITCHEN</p><button type="button" data-slider-next aria-controls="journal-slider" aria-label="Show more articles">→</button></div></div>
        </section>
    </main><?php require __DIR__ . '/footer.php'; ?><script src="/assets/js/sample-3.js?v=6" defer></script>
</body>

</html>

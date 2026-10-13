<?php
$pageTitle = '5th Element Indian Restaurant — Authentic Indian Cuisine in Florida';
$pageDescription = 'Authentic Indian Cuisine across Florida — Dine-in, Takeout, Delivery & Catering. Locations in Jacksonville, Daytona, and Palm Coast.';
$sampleStylesheet = '/assets/css/sample-1.css';
require_once __DIR__ . '/../includes/head.php';
?>

<!-- ============================================================ -->
<!-- HEADER                                                        -->
<!-- ============================================================ -->
<?php require_once __DIR__ . '/_header.php'; ?>

<main class="flex-1">

<!-- ============================================================ -->
<!-- HERO INTERACTIVE                                              -->
<!-- ============================================================ -->
<section
  id="home"
  class="hi-root relative isolate flex flex-col min-h-[calc(100svh-72px)]"
  style="--mxs:0; --mys:0; --pulse:0.5;"
>
  <div class="relative flex-1 flex">
    <div class="relative flex-1 flex flex-col overflow-hidden bg-cream">
      <!-- Photographic layer -->
      <div class="relative flex-1 min-h-[520px] overflow-hidden">
        <div
          id="hero-photo"
          class="absolute inset-0"
          style="transform: translate3d(calc(var(--mxs) * -22px), calc(var(--mys) * -14px), 0) scale(1.07); transition: transform 160ms linear;"
        >
          <img
            src="/assets/images/hero-biryani.webp"
            alt="A signature 5th Element dish"
            class="w-full h-full object-cover"
          >
        </div>

        <!-- warm sepia wash over the photo -->
        <div aria-hidden="true" class="absolute inset-0" style="background: radial-gradient(ellipse at 50% 55%, rgba(60,20,10,0.35) 0%, rgba(40,15,8,0.72) 70%, rgba(30,10,5,0.85) 100%); mix-blend-mode: multiply;"></div>
        <div aria-hidden="true" class="absolute inset-0" style="background: linear-gradient(180deg, rgba(176,74,46,0.25) 0%, transparent 25%, transparent 65%, rgba(42,16,8,0.4) 100%);"></div>

        <!-- Corner decorations: dot clusters -->
        <div aria-hidden="true" class="absolute top-6 left-6 grid gap-1.5" style="grid-template-columns: repeat(6, 4px);">
          <?php for ($i = 0; $i < 24; $i++): ?>
          <span class="w-1 h-1 rounded-full bg-white/55"></span>
          <?php endfor; ?>
        </div>

        <!-- X marks -->
        <svg aria-hidden="true" viewBox="0 0 16 16" class="absolute top-6 right-6 w-3.5 h-3.5 text-white/60">
          <path d="M2 2 L14 14 M14 2 L2 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
        </svg>
        <svg aria-hidden="true" viewBox="0 0 16 16" class="absolute top-6 right-16 w-3.5 h-3.5 text-white/60">
          <path d="M2 2 L14 14 M14 2 L2 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
        </svg>
        <svg aria-hidden="true" viewBox="0 0 16 16" class="absolute bottom-24 left-6 w-3.5 h-3.5 text-white/60">
          <path d="M2 2 L14 14 M14 2 L2 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
        </svg>
        <svg aria-hidden="true" viewBox="0 0 16 16" class="absolute bottom-24 left-16 w-3.5 h-3.5 text-white/60">
          <path d="M2 2 L14 14 M14 2 L2 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
        </svg>

        <!-- Small dot cluster bottom-right -->
        <div aria-hidden="true" class="absolute bottom-6 right-6 grid gap-1.5" style="grid-template-columns: repeat(4, 4px);">
          <?php for ($i = 0; $i < 12; $i++): ?>
          <span class="w-1 h-1 rounded-full bg-white/55"></span>
          <?php endfor; ?>
        </div>

        <!-- Ornamental sprig -->
        <svg
          aria-hidden="true"
          viewBox="0 0 40 40"
          class="absolute top-20 right-24 w-10 h-10 text-[#E9C58A]/70 hidden md:block"
          id="hero-sprig"
          style="transform: translate3d(calc(var(--mxs) * -16px), calc(var(--mys) * -12px), 0); opacity: calc(0.55 + var(--pulse) * 0.35);"
        >
          <path d="M20 2 Q 24 12 32 14 Q 24 16 20 26 Q 16 16 8 14 Q 16 12 20 2 Z" fill="currentColor"/>
        </svg>

        <!-- CENTERED CONTENT -->
        <div
          id="hero-content"
          class="absolute inset-0 flex flex-col items-center justify-center text-center px-6"
          style="transform: translate3d(calc(var(--mxs) * 6px), calc(var(--mys) * 4px), 0);"
        >
          <!-- Pill tag -->
          <div class="inline-flex items-center gap-2 rounded-full bg-primary text-white text-[11px] font-semibold uppercase tracking-[0.22em] px-4 py-1.5">
            <span class="w-1.5 h-1.5 rounded-full bg-[#E9C58A]"></span>
            Authentic Indian Cuisine &middot; Since 2008
          </div>

          <!-- Headline -->
          <h1 class="mt-6 font-display text-white tracking-[-0.01em] leading-[1.02] text-[clamp(2.6rem,7vw,6rem)] max-w-[18ch]">
            A Taste of India,<br>
            <span class="italic text-transparent bg-clip-text" style="background-image: linear-gradient(120deg,#F3D9A7 0%,#E9C58A 50%,#F3D9A7 100%);">made for every occasion.</span>
          </h1>

          <!-- Subtitle -->
          <p class="mt-5 text-white/80 max-w-md text-[0.98rem]">
            Traditional flavours &middot; fresh ingredients &middot; unforgettable experiences across six Florida locations.
          </p>

          <!-- Location picker pill -->
          <div class="relative mt-9 w-full max-w-xl" id="location-picker">
            <div class="flex items-center bg-white rounded-full p-1.5 shadow-[0_12px_30px_-8px_rgba(0,0,0,0.35)]">
              <!-- Pin icon -->
              <span class="pl-4 pr-2 text-primary">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                  <path d="M12 22s7-7.58 7-13a7 7 0 10-14 0c0 5.42 7 13 7 13z" stroke="currentColor" stroke-width="1.8"/>
                  <circle cx="12" cy="9" r="2.6" stroke="currentColor" stroke-width="1.8"/>
                </svg>
              </span>
              <!-- Dropdown trigger -->
              <button
                type="button"
                id="location-btn"
                class="flex-1 text-left text-ink text-sm py-2.5 pr-3 focus:outline-none"
              >
                <span class="block text-[10px] uppercase tracking-[0.22em] text-muted">Find your 5th Element</span>
                <span class="font-medium" id="location-selected">Baymeadows, Jacksonville, Florida</span>
              </button>

              <button
                type="button"
                id="hero-magnet-btn"
                class="hi-magnet inline-flex items-center gap-2 rounded-full bg-primary hover:bg-primary-hover text-white text-[13px] font-semibold uppercase tracking-[0.18em] px-6 py-3"
              >
                Order Now
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none">
                  <path d="M5 12h14M13 5l7 7-7 7" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </button>
            </div>

            <!-- Dropdown panel -->
            <ul id="location-dropdown" role="listbox" class="hidden absolute left-6 right-28 top-full mt-2 rounded-2xl bg-white shadow-[0_20px_40px_-10px_rgba(0,0,0,0.3)] overflow-hidden z-20 text-left">
              <li>
                <button type="button" class="loc-option w-full px-5 py-3 text-sm text-ink hover:bg-cream-2 flex items-center justify-between bg-cream-2" data-location="Baymeadows, Jacksonville">
                  <span>Baymeadows, Jacksonville</span>
                  <span class="text-[10px] uppercase tracking-[0.2em] text-muted">Florida</span>
                </button>
              </li>
              <li>
                <button type="button" class="loc-option w-full px-5 py-3 text-sm text-ink hover:bg-cream-2 flex items-center justify-between" data-location="Towncenter, Jacksonville">
                  <span>Towncenter, Jacksonville</span>
                  <span class="text-[10px] uppercase tracking-[0.2em] text-muted">Florida</span>
                </button>
              </li>
              <li>
                <button type="button" class="loc-option w-full px-5 py-3 text-sm text-ink hover:bg-cream-2 flex items-center justify-between" data-location="Daytona">
                  <span>Daytona</span>
                  <span class="text-[10px] uppercase tracking-[0.2em] text-muted">Florida</span>
                </button>
              </li>
              <li>
                <button type="button" class="loc-option w-full px-5 py-3 text-sm text-ink hover:bg-cream-2 flex items-center justify-between" data-location="Palm Coast">
                  <span>Palm Coast</span>
                  <span class="text-[10px] uppercase tracking-[0.2em] text-muted">Florida</span>
                </button>
              </li>
            </ul>

            <!-- Secondary caption -->
            <div class="mt-5 flex items-center justify-center gap-5 text-[11px] uppercase tracking-[0.24em] text-white/75">
              <span>Dine-in</span>
              <span class="w-1 h-1 rounded-full bg-white/40"></span>
              <span>Takeout</span>
              <span class="w-1 h-1 rounded-full bg-white/40"></span>
              <span>Delivery</span>
              <span class="w-1 h-1 rounded-full bg-white/40"></span>
              <span>Catering</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ============================================================ -->
<!-- FEATURE STRIP                                                 -->
<!-- ============================================================ -->
<section class="bg-cream border-b border-primary/10">
  <div class="mx-auto max-w-7xl px-5 md:px-10 py-10 grid grid-cols-2 md:grid-cols-5 gap-8">

    <!-- 4 Locations -->
    <div class="group flex items-center gap-4">
      <span class="relative shrink-0">
        <span aria-hidden="true" class="absolute inset-0 rounded-full bg-primary/15 blur-lg scale-110 transition-opacity duration-300 opacity-50 group-hover:opacity-75"></span>
        <span class="relative inline-flex items-center justify-center w-14 h-14 rounded-full bg-white text-primary shadow-[0_6px_14px_-5px_rgba(192,57,43,0.3),0_1px_3px_-1px_rgba(42,31,23,0.08),inset_0_0_0_1px_rgba(192,57,43,0.06)] transition-all duration-300 group-hover:-translate-y-0.5 group-hover:shadow-[0_10px_20px_-6px_rgba(192,57,43,0.38),0_2px_6px_-1px_rgba(42,31,23,0.1),inset_0_0_0_1px_rgba(192,57,43,0.1)]">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2a7 7 0 00-7 7c0 5.5 7 13 7 13s7-7.5 7-13a7 7 0 00-7-7zm0 9.6a2.6 2.6 0 110-5.2 2.6 2.6 0 010 5.2z"/>
          </svg>
        </span>
      </span>
      <div>
        <div class="text-sm font-semibold text-ink">4 Locations</div>
        <div class="text-[11px] text-muted">in Florida</div>
      </div>
    </div>

    <!-- Dine-In -->
    <div class="group flex items-center gap-4">
      <span class="relative shrink-0">
        <span aria-hidden="true" class="absolute inset-0 rounded-full bg-primary/15 blur-lg scale-110 transition-opacity duration-300 opacity-50 group-hover:opacity-75"></span>
        <span class="relative inline-flex items-center justify-center w-14 h-14 rounded-full bg-white text-primary shadow-[0_6px_14px_-5px_rgba(192,57,43,0.3),0_1px_3px_-1px_rgba(42,31,23,0.08),inset_0_0_0_1px_rgba(192,57,43,0.06)] transition-all duration-300 group-hover:-translate-y-0.5 group-hover:shadow-[0_10px_20px_-6px_rgba(192,57,43,0.38),0_2px_6px_-1px_rgba(42,31,23,0.1),inset_0_0_0_1px_rgba(192,57,43,0.1)]">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path d="M8 2.5a1 1 0 00-1 1V8a1 1 0 01-2 0V3.5a1 1 0 10-2 0V9a3 3 0 002 2.83V21a1 1 0 102 0v-9.17A3 3 0 0010 9V3.5a1 1 0 00-1-1z"/>
            <path d="M19 2.5c-2.5 1.3-4 4-4 7s1.3 4.5 3 5V21a1 1 0 102 0V2.5z"/>
          </svg>
        </span>
      </span>
      <div>
        <div class="text-sm font-semibold text-ink">Dine-In</div>
        <div class="text-[11px] text-muted">Warm &amp; Welcoming</div>
      </div>
    </div>

    <!-- Takeout -->
    <div class="group flex items-center gap-4">
      <span class="relative shrink-0">
        <span aria-hidden="true" class="absolute inset-0 rounded-full bg-primary/15 blur-lg scale-110 transition-opacity duration-300 opacity-50 group-hover:opacity-75"></span>
        <span class="relative inline-flex items-center justify-center w-14 h-14 rounded-full bg-white text-primary shadow-[0_6px_14px_-5px_rgba(192,57,43,0.3),0_1px_3px_-1px_rgba(42,31,23,0.08),inset_0_0_0_1px_rgba(192,57,43,0.06)] transition-all duration-300 group-hover:-translate-y-0.5 group-hover:shadow-[0_10px_20px_-6px_rgba(192,57,43,0.38),0_2px_6px_-1px_rgba(42,31,23,0.1),inset_0_0_0_1px_rgba(192,57,43,0.1)]">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 6a4 4 0 118 0v1h2.5a1 1 0 011 .92l1 12A2.5 2.5 0 0118 22.5H6a2.5 2.5 0 01-2.49-2.58l1-12A1 1 0 015.5 7H8V6zm2 1h4V6a2 2 0 10-4 0v1z"/>
          </svg>
        </span>
      </span>
      <div>
        <div class="text-sm font-semibold text-ink">Takeout</div>
        <div class="text-[11px] text-muted">Quick &amp; Convenient</div>
      </div>
    </div>

    <!-- Delivery -->
    <div class="group flex items-center gap-4">
      <span class="relative shrink-0">
        <span aria-hidden="true" class="absolute inset-0 rounded-full bg-primary/15 blur-lg scale-110 transition-opacity duration-300 opacity-50 group-hover:opacity-75"></span>
        <span class="relative inline-flex items-center justify-center w-14 h-14 rounded-full bg-white text-primary shadow-[0_6px_14px_-5px_rgba(192,57,43,0.3),0_1px_3px_-1px_rgba(42,31,23,0.08),inset_0_0_0_1px_rgba(192,57,43,0.06)] transition-all duration-300 group-hover:-translate-y-0.5 group-hover:shadow-[0_10px_20px_-6px_rgba(192,57,43,0.38),0_2px_6px_-1px_rgba(42,31,23,0.1),inset_0_0_0_1px_rgba(192,57,43,0.1)]">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path d="M2 6a1 1 0 011-1h11a1 1 0 011 1v11H8.9a3 3 0 00-5.8 0H2a1 1 0 01-1-1V6h1z"/>
            <path d="M15 9h3.6a1 1 0 01.72.3l2.4 2.5a1 1 0 01.28.7V16a1 1 0 01-1 1h-1.1a3 3 0 00-5.8 0H15V9z"/>
            <circle cx="6" cy="18" r="2" fill="#fff"/>
            <circle cx="6" cy="18" r="1" fill="currentColor"/>
            <circle cx="17.5" cy="18" r="2" fill="#fff"/>
            <circle cx="17.5" cy="18" r="1" fill="currentColor"/>
          </svg>
        </span>
      </span>
      <div>
        <div class="text-sm font-semibold text-ink">Delivery</div>
        <div class="text-[11px] text-muted">To Your Door</div>
      </div>
    </div>

    <!-- Catering -->
    <div class="group flex items-center gap-4">
      <span class="relative shrink-0">
        <span aria-hidden="true" class="absolute inset-0 rounded-full bg-primary/15 blur-lg scale-110 transition-opacity duration-300 opacity-50 group-hover:opacity-75"></span>
        <span class="relative inline-flex items-center justify-center w-14 h-14 rounded-full bg-white text-primary shadow-[0_6px_14px_-5px_rgba(192,57,43,0.3),0_1px_3px_-1px_rgba(42,31,23,0.08),inset_0_0_0_1px_rgba(192,57,43,0.06)] transition-all duration-300 group-hover:-translate-y-0.5 group-hover:shadow-[0_10px_20px_-6px_rgba(192,57,43,0.38),0_2px_6px_-1px_rgba(42,31,23,0.1),inset_0_0_0_1px_rgba(192,57,43,0.1)]">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path d="M6.5 15h11v1.5A2.5 2.5 0 0115 19H9a2.5 2.5 0 01-2.5-2.5V15z"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M6 5a4 4 0 00-1.9 7.52c.1.05.17.15.17.26V13a1 1 0 001 1h13.5a1 1 0 001-1v-.22c0-.11.07-.21.17-.26A4 4 0 0017 5a4 4 0 00-5-2.4A4 4 0 006 5z"/>
            <path d="M9 20h1v1.5a.5.5 0 01-1 0V20zm2.5 0h1v1.5a.5.5 0 01-1 0V20zm2.5 0h1v1.5a.5.5 0 01-1 0V20z"/>
          </svg>
        </span>
      </span>
      <div>
        <div class="text-sm font-semibold text-ink">Catering</div>
        <div class="text-[11px] text-muted">For Every Occasion</div>
      </div>
    </div>

  </div>
</section>


<!-- ============================================================ -->
<!-- CHOOSE YOUR 5TH ELEMENT                                       -->
<!-- ============================================================ -->
<section class="bg-cream py-24">
  <div class="mx-auto max-w-7xl px-5 md:px-10">
    <div class="flex flex-col items-center gap-3 text-center">
      <span class="eyebrow">Choose Your 5th Element</span>
      <span class="divider-ornament">
        <svg width="10" height="10" viewBox="0 0 10 10" aria-hidden="true">
          <path d="M5 0 L6 4 L10 5 L6 6 L5 10 L4 6 L0 5 L4 4 Z" fill="currentColor"/>
        </svg>
      </span>
    </div>
    <h2 class="mt-4 text-center font-display text-4xl md:text-5xl">
      Great Food Brings People Together
    </h2>
    <div class="mt-14 grid sm:grid-cols-2 lg:grid-cols-4 gap-6">

      <?php
      $chooseCards = [
        ['title' => 'Dine With Us', 'body' => 'Experience authentic Indian cuisine in our warm and welcoming restaurants.', 'cta' => 'Find a location', 'img' => '/assets/images/dine.webp'],
        ['title' => 'Takeout', 'body' => 'Call ahead or stop by — your favourite dishes packed hot and ready to go.', 'cta' => 'Order takeout', 'img' => '/assets/images/order.webp'],
        ['title' => 'Order Online', 'body' => 'Enjoy your favourite dishes with easy pickup or delivery, straight from the menu.', 'cta' => 'Order now', 'img' => '/assets/images/dish-biryani.webp'],
        ['title' => 'Catering', 'body' => 'From intimate gatherings to large celebrations, we bring the flavours of India to your special events.', 'cta' => 'Explore catering', 'img' => '/assets/images/catering.webp'],
      ];
      foreach ($chooseCards as $c):
      ?>
      <div class="group flex flex-col rounded-lg bg-white shadow-[0_2px_20px_rgba(42,31,23,0.06)] overflow-hidden">
        <div class="relative h-52 overflow-hidden">
          <img src="<?php echo $c['img']; ?>" alt="<?php echo $c['title']; ?>" class="w-full h-full object-cover">
        </div>
        <div class="p-7">
          <div class="mb-3 inline-flex items-center justify-center w-11 h-11 rounded-full bg-primary/10 text-primary">&#10022;</div>
          <h3 class="text-xl font-semibold"><?php echo $c['title']; ?></h3>
          <p class="mt-2 text-sm text-muted leading-relaxed"><?php echo $c['body']; ?></p>
          <a href="#" class="mt-5 inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-wider text-primary hover:gap-3 transition-all">
            <?php echo $c['cta']; ?>
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none">
              <path d="M5 12h14M13 5l7 7-7 7" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </a>
        </div>
      </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>


<!-- ============================================================ -->
<!-- SIGNATURE DISHES (Dishes of the Week)                         -->
<!-- ============================================================ -->
<section id="menu" class="bg-cream pb-24">
  <div class="mx-auto max-w-7xl px-5 md:px-10">
    <div class="flex flex-col items-center gap-3 text-center">
      <span class="eyebrow">This Week on the Menu</span>
      <span class="divider-ornament">
        <svg width="10" height="10" viewBox="0 0 10 10" aria-hidden="true">
          <path d="M5 0 L6 4 L10 5 L6 6 L5 10 L4 6 L0 5 L4 4 Z" fill="currentColor"/>
        </svg>
      </span>
    </div>
    <h2 class="mt-4 text-center font-display text-4xl md:text-5xl">
      Dishes of the Week
    </h2>
    <p class="mt-3 text-center text-muted max-w-2xl mx-auto">
      Five hand-picked plates our chefs are proud of this week — from a sharp starter to a slow-cooked main and a sweet finish.
    </p>
    <div class="mt-14 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-5">

      <?php
      $dishes = [
        ['tag' => 'Starter', 'name' => 'Samosa Chaat', 'desc' => 'Crisp samosas crushed under tangy chutneys, yoghurt and chickpeas.', 'img' => '/assets/images/week-starter.webp'],
        ['tag' => 'Vegetarian', 'name' => 'Paneer Tikka Masala', 'desc' => 'Charred paneer in a silky tomato-butter gravy with warm spices.', 'img' => '/assets/images/paneer-tikka-masala.webp'],
        ['tag' => 'Non-Veg', 'name' => 'Lamb Rogan Josh', 'desc' => 'Slow-cooked lamb in a fragrant Kashmiri chilli and yoghurt sauce.', 'img' => '/assets/images/week-nonveg.webp'],
        ['tag' => "Chef's Pick", 'name' => 'Mango Lassi', 'desc' => 'Chilled sweet yoghurt blended with ripe Alphonso mango.', 'img' => '/assets/images/week-drink.webp'],
        ['tag' => 'Dessert', 'name' => 'Gulab Jamun', 'desc' => 'Warm milk-dumplings soaked in rose-cardamom syrup.', 'img' => '/assets/images/week-dessert.webp'],
      ];
      foreach ($dishes as $d):
      ?>
      <div class="group relative aspect-[3/4] rounded-xl overflow-hidden cursor-pointer">
        <img src="<?php echo $d['img']; ?>" alt="<?php echo $d['name']; ?>" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/0 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        <div class="absolute inset-x-0 bottom-0 p-5 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 ease-out">
          <h3 class="text-lg font-semibold text-white"><?php echo $d['name']; ?></h3>
        </div>
      </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>


<!-- ============================================================ -->
<!-- OUR STORY (hidden)                                            -->
<!-- ============================================================ -->
<section id="about" class="bg-cream hidden">
  <div class="grid md:grid-cols-2">
    <div class="relative min-h-[440px]">
      <img src="/assets/images/indian-cuisine.webp" alt="Assorted Indian spices" class="w-full h-full object-cover">
    </div>
    <div class="flex items-center bg-cream px-6 md:px-16 py-16">
      <div class="max-w-lg">
        <span class="eyebrow">Our Story</span>
        <h2 class="mt-3 font-display text-4xl md:text-5xl leading-tight">
          The Soul of<br> Indian Cuisine
        </h2>
        <p class="mt-6 text-muted leading-relaxed">
          At 5th Element, we believe food is more than a meal &mdash; it&rsquo;s a connection to culture, tradition and togetherness. Our chefs bring authentic Indian flavours to life using time-honoured recipes and the freshest ingredients.
        </p>
        <div class="mt-8 grid grid-cols-3 gap-4">
          <?php
          $values = ['Authentic recipes', 'Fresh ingredients', 'Indian hospitality'];
          foreach ($values as $v):
          ?>
          <div class="flex flex-col items-center text-center gap-2">
            <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary">&#10022;</div>
            <span class="text-xs font-semibold uppercase tracking-wide"><?php echo $v; ?></span>
          </div>
          <?php endforeach; ?>
        </div>
        <a href="#" class="mt-8 inline-flex items-center gap-2 rounded-md bg-primary hover:bg-primary-hover text-white text-xs font-semibold uppercase tracking-wider px-5 py-3 transition-colors">
          Learn more about us
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none">
            <path d="M5 12h14M13 5l7 7-7 7" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </a>
      </div>
    </div>
  </div>

  <!-- Cuisine Categories Grid -->
  <div class="mx-auto max-w-7xl px-5 md:px-10 py-20">
    <div class="flex flex-col items-center gap-3 text-center">
      <span class="eyebrow">What We Serve</span>
      <span class="divider-ornament">
        <svg width="10" height="10" viewBox="0 0 10 10" aria-hidden="true">
          <path d="M5 0 L6 4 L10 5 L6 6 L5 10 L4 6 L0 5 L4 4 Z" fill="currentColor"/>
        </svg>
      </span>
    </div>
    <h2 class="mt-4 text-center font-display text-4xl md:text-5xl">
      Explore Our Cuisines
    </h2>
    <p class="mt-3 text-center text-muted max-w-2xl mx-auto">
      From classic North Indian curries to bold Indo-Chinese fusion, fresh seafood and handcrafted breads &mdash; over 500 dishes to choose from.
    </p>
    <div class="mt-14 grid grid-cols-2 md:grid-cols-4 gap-5">
      <?php
      $cuisines = [
        ['name' => 'Appetizers', 'desc' => 'Samosas, pakoras, tikka & more', 'img' => '/assets/images/cuisine-appetizers-i.webp'],
        ['name' => 'Biryanis & Rice', 'desc' => 'Fragrant layered rice dishes', 'img' => '/assets/images/cuisine-biryani.webp'],
        ['name' => 'Curries', 'desc' => 'Rich gravies, veg & non-veg', 'img' => '/assets/images/week-veg.webp'],
        ['name' => 'Indo-Chinese', 'desc' => 'Manchurian, noodles & fried rice', 'img' => '/assets/images/cuisine-indochinese-i.webp'],
        ['name' => 'Tandoor & Breads', 'desc' => 'Naan, roti & clay-oven specials', 'img' => '/assets/images/ig5.webp'],
        ['name' => 'Jewels of the Sea', 'desc' => 'Prawn, fish & seafood masala', 'img' => '/assets/images/cuisine-seafood.webp'],
        ['name' => 'Desserts', 'desc' => 'Gulab jamun, rasmalai & kulfi', 'img' => '/assets/images/ig4.webp'],
        ['name' => 'Beverages', 'desc' => 'Lassi, chai & fresh juices', 'img' => '/assets/images/week-drink.webp'],
      ];
      foreach ($cuisines as $c):
      ?>
      <a href="#menu" class="cuisine-card group relative block rounded-xl overflow-hidden aspect-[4/3] shadow-[0_2px_20px_rgba(42,31,23,0.06)] transition-[transform,box-shadow] duration-500 ease-out hover:-translate-y-1.5 hover:shadow-[0_20px_44px_-12px_rgba(192,57,43,0.3),0_8px_18px_-8px_rgba(42,31,23,0.14)]">
        <img src="<?php echo $c['img']; ?>" alt="<?php echo $c['name']; ?>" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
        <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/20 to-transparent transition-opacity duration-500 group-hover:from-black/85"></div>
        <div class="absolute inset-0 flex flex-col justify-end p-5">
          <h3 class="text-white font-semibold text-lg leading-tight transition-transform duration-500 group-hover:-translate-y-1"><?php echo $c['name']; ?></h3>
          <p class="text-white/70 text-xs mt-1 leading-relaxed transition-all duration-500 opacity-0 translate-y-2 group-hover:opacity-100 group-hover:translate-y-0"><?php echo $c['desc']; ?></p>
          <div class="mt-3 flex items-center gap-1.5 text-gold text-[10px] font-semibold uppercase tracking-[0.2em] transition-all duration-500 opacity-0 translate-y-2 group-hover:opacity-100 group-hover:translate-y-0">
            Explore
            <svg width="10" height="10" viewBox="0 0 24 24" fill="none">
              <path d="M5 12h14M13 5l7 7-7 7" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ============================================================ -->
<!-- CATERING BANNER                                               -->
<!-- ============================================================ -->
<section id="catering" class="relative overflow-hidden min-h-[600px] lg:min-h-[680px] text-white">
  <img src="/assets/images/catering.webp" alt="Catering spread" class="absolute inset-0 w-full h-full object-cover">
  <div class="absolute inset-0 bg-gradient-to-r from-black/85 via-black/50 to-black/10"></div>

  <div class="relative z-10 mx-auto max-w-7xl px-5 md:px-10 py-20 md:py-36 lg:py-25 flex flex-col justify-center">
    <span class="eyebrow text-gold">Catering</span>
    <h2 class="mt-4 font-display text-4xl md:text-5xl lg:text-6xl max-w-xl leading-tight">
      For Every Celebration
    </h2>
    <p class="mt-6 max-w-lg text-white/75 leading-relaxed">
      Weddings, corporate events, private parties, family gatherings and more. Let us make your next event unforgettable with a customised Indian menu.
    </p>
    <a href="catering/" class="mt-8 inline-flex items-center gap-2 self-start rounded-full bg-primary hover:bg-primary-hover text-white text-xs font-semibold uppercase tracking-wider px-7 py-3.5 transition-colors">
      Explore Catering
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none">
        <path d="M5 12h14M13 5l7 7-7 7" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </a>

    <div class="mt-14 flex flex-wrap gap-8 md:gap-12">
      <!-- Weddings -->
      <div class="flex flex-col items-center gap-2.5 text-center">
        <span class="flex items-center justify-center w-14 h-14 rounded-full border border-white/20 bg-white/10 backdrop-blur-sm text-gold">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M20.8 4.6a5.5 5.5 0 00-7.8 0L12 5.7l-1-1.1a5.5 5.5 0 00-7.8 7.8l1 1.1L12 21.3l7.8-7.8 1-1.1a5.5 5.5 0 000-7.8z"/>
          </svg>
        </span>
        <span class="text-xs text-white/80 font-medium">Weddings</span>
      </div>
      <!-- Corporate Events -->
      <div class="flex flex-col items-center gap-2.5 text-center">
        <span class="flex items-center justify-center w-14 h-14 rounded-full border border-white/20 bg-white/10 backdrop-blur-sm text-gold">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <rect x="2" y="7" width="20" height="14" rx="2"/>
            <path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/>
            <path d="M12 12v.01"/>
            <path d="M2 12h20"/>
          </svg>
        </span>
        <span class="text-xs text-white/80 font-medium">Corporate Events</span>
      </div>
      <!-- Private Parties -->
      <div class="flex flex-col items-center gap-2.5 text-center">
        <span class="flex items-center justify-center w-14 h-14 rounded-full border border-white/20 bg-white/10 backdrop-blur-sm text-gold">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M5.8 11.3L2 22l10.7-3.8"/>
            <path d="M4 3h.01"/>
            <path d="M21 8h.01"/>
            <path d="M11 2h.01"/>
            <path d="M15 12l-8.5 8.5"/>
            <path d="M8 4.5l3 3"/>
            <path d="M17.5 7.5l3 3"/>
            <path d="M12 2.5l2 2"/>
            <path d="M19.5 10l2 2"/>
          </svg>
        </span>
        <span class="text-xs text-white/80 font-medium">Private Parties</span>
      </div>
      <!-- Family Gatherings -->
      <div class="flex flex-col items-center gap-2.5 text-center">
        <span class="flex items-center justify-center w-14 h-14 rounded-full border border-white/20 bg-white/10 backdrop-blur-sm text-gold">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/>
            <circle cx="9" cy="7" r="4"/>
            <path d="M23 21v-2a4 4 0 00-3-3.87"/>
            <path d="M16 3.13a4 4 0 010 7.75"/>
          </svg>
        </span>
        <span class="text-xs text-white/80 font-medium">Family Gatherings</span>
      </div>
      <!-- Special Events -->
      <div class="flex flex-col items-center gap-2.5 text-center">
        <span class="flex items-center justify-center w-14 h-14 rounded-full border border-white/20 bg-white/10 backdrop-blur-sm text-gold">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <polygon points="12 2 15.1 8.3 22 9.3 17 14.1 18.2 21 12 17.8 5.8 21 7 14.1 2 9.3 8.9 8.3 12 2"/>
          </svg>
        </span>
        <span class="text-xs text-white/80 font-medium">Special Events</span>
      </div>
    </div>
  </div>
</section>


<!-- ============================================================ -->
<!-- LOCATIONS                                                     -->
<!-- ============================================================ -->
<section id="locations" class="bg-cream py-24">
  <div class="mx-auto max-w-7xl px-5 md:px-10">
    <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6">
      <div>
        <div class="flex flex-col items-center gap-3 text-center md:items-start md:text-left">
          <span class="eyebrow">Our Locations</span>
          <span class="divider-ornament">
            <svg width="10" height="10" viewBox="0 0 10 10" aria-hidden="true">
              <path d="M5 0 L6 4 L10 5 L6 6 L5 10 L4 6 L0 5 L4 4 Z" fill="currentColor"/>
            </svg>
          </span>
        </div>
        <h2 class="mt-4 font-display text-4xl md:text-5xl">
          Find Your 5th Element
        </h2>
        <p class="mt-3 text-muted max-w-xl">
          Visit any of our locations across Florida and experience authentic Indian cuisine.
        </p>
      </div>
      <a href="#" class="self-start inline-flex items-center gap-2 rounded-md bg-primary hover:bg-primary-hover text-white text-xs font-semibold uppercase tracking-wider px-5 py-3 transition-colors">
        View all locations
      </a>
    </div>

    <div class="mt-12 grid grid-cols-2 md:grid-cols-4 gap-5 items-stretch">
      <?php
      $locations = [
        ['city' => 'Baymeadows', 'region' => 'Jacksonville', 'img' => '/assets/images/loc-jacksonville.webp'],
        ['city' => 'Towncenter', 'region' => 'Jacksonville', 'img' => '/assets/images/loc-pompano.webp'],
        ['city' => 'Daytona', 'region' => 'Florida', 'img' => '/assets/images/loc-daytona.webp'],
        ['city' => 'Palm Coast', 'region' => 'Florida', 'img' => '/assets/images/loc-palm.webp'],
      ];
      foreach ($locations as $l):
      ?>
      <a href="#" class="group relative block rounded-lg bg-white overflow-hidden will-change-transform shadow-[0_2px_20px_rgba(42,31,23,0.06)] transition-[transform,box-shadow] duration-[700ms] [transition-timing-function:cubic-bezier(0.22,0.61,0.36,1)] hover:scale-[1.05] hover:z-10 hover:shadow-[0_22px_45px_-14px_rgba(42,31,23,0.28),0_8px_18px_-8px_rgba(42,31,23,0.14)]">
        <div class="relative h-40 overflow-hidden">
          <img src="<?php echo $l['img']; ?>" alt="<?php echo $l['city']; ?>" class="w-full h-full object-cover transition-opacity duration-[700ms] [transition-timing-function:cubic-bezier(0.22,0.61,0.36,1)] group-hover:opacity-70">
        </div>
        <div class="p-4 text-center">
          <div class="font-semibold text-sm text-ink"><?php echo $l['city']; ?></div>
          <div class="text-[10px] uppercase tracking-widest text-muted mt-0.5"><?php echo $l['region']; ?></div>
          <div class="mt-3 flex justify-center">
            <span class="inline-flex items-center justify-center w-9 h-9 rounded-full border border-primary text-primary transition-all group-hover:bg-primary group-hover:text-white">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M5 12h14M13 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </span>
          </div>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ============================================================ -->
<!-- TESTIMONIALS                                                  -->
<!-- ============================================================ -->
<section class="bg-cream py-20" id="testimonials-section">
  <div class="mx-auto max-w-7xl px-5 md:px-10">
    <div class="text-center mb-12">
      <span class="text-[0.72rem] font-semibold tracking-[0.32em] uppercase text-primary">
        What Our Guests Say
      </span>
      <h2 class="mt-3 font-display text-4xl md:text-5xl text-ink">
        Reviews
      </h2>
    </div>

    <div id="testimonials-grid" class="ts-slide grid md:grid-cols-3 gap-6">
      <!-- Cards injected by JS -->
    </div>

    <!-- Pagination dots -->
    <div id="testimonials-dots" class="mt-8 flex items-center justify-center gap-2">
      <!-- Dots injected by JS -->
    </div>
  </div>
</section>


<!-- ============================================================ -->
<!-- BLOG SLIDER                                                   -->
<!-- ============================================================ -->
<section id="blogs" class="bg-cream pt-16 pb-20">
  <div class="mx-auto max-w-7xl px-5 md:px-10">
    <!-- Header -->
    <div class="flex items-center justify-between mb-8">
      <div>
        <span class="eyebrow">From Our Kitchen</span>
        <h3 class="mt-1 font-display text-2xl md:text-3xl">Latest Blogs</h3>
        <p class="text-sm text-muted mt-1">Stories, recipes, and culinary inspiration.</p>
      </div>
      <div class="flex items-center gap-3">
        <a href="#" class="hidden sm:inline-flex items-center gap-1.5 text-sm font-semibold text-primary hover:underline">
          View All
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </a>
        <div class="flex items-center gap-2">
          <button id="blog-prev" aria-label="Previous blogs" class="w-9 h-9 rounded-full border border-ink/20 flex items-center justify-center text-ink/60 hover:bg-primary hover:text-white hover:border-transparent transition-colors">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none">
              <path d="M19 12H5M12 19l-7-7 7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>
          <button id="blog-next" aria-label="Next blogs" class="w-9 h-9 rounded-full border border-ink/20 flex items-center justify-center text-ink/60 hover:bg-primary hover:text-white hover:border-transparent transition-colors">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none">
              <path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Slider -->
    <div id="blog-slider-wrap" class="overflow-hidden">
      <div id="blog-slider-track" class="flex gap-4 transition-transform duration-500 ease-out">
        <!-- Blog cards injected by JS -->
      </div>
    </div>

    <!-- Dots -->
    <div id="blog-dots" class="mt-6 flex justify-center gap-2">
      <!-- Dots injected by JS -->
    </div>
  </div>
</section>


<!-- ============================================================ -->
<!-- FEATURED ON                                                   -->
<!-- ============================================================ -->
<section class="bg-cream py-16">
  <div class="mx-auto max-w-7xl px-5 md:px-10">
    <h2 class="text-center font-display text-3xl md:text-4xl text-ink">Featured On</h2>
    <div class="mt-10 grid grid-cols-2 md:grid-cols-4 gap-8 items-center">
      <?php
      $logos = [
        ['label' => 'Food Magazine', 'src' => '/assets/images/food-magazine.webp'],
        ['label' => 'Good Food', 'src' => '/assets/images/good-food-mg.webp'],
        ['label' => 'TripAdvisor', 'src' => '/assets/images/trip-advisor-mg.webp'],
        ['label' => 'Yelp', 'src' => '/assets/images/yelp-mg.webp'],
      ];
      foreach ($logos as $m):
      ?>
      <div class="flex justify-center items-center h-20 opacity-85 hover:opacity-100 transition-opacity">
        <img src="<?php echo $m['src']; ?>" alt="<?php echo $m['label']; ?>" width="200" height="100" class="object-contain max-h-20">
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

</main>

<!-- ============================================================ -->
<!-- FOOTER                                                        -->
<!-- ============================================================ -->
<?php require_once __DIR__ . '/_footer.php'; ?>


<!-- ============================================================ -->
<!-- JAVASCRIPT                                                    -->
<!-- ============================================================ -->
<script>
(function() {
  'use strict';

  /* ------------------------------------------------------------ */
  /* HERO PARALLAX                                                 */
  /* ------------------------------------------------------------ */
  var heroRoot = document.querySelector('.hi-root');
  if (heroRoot) {
    var target = { x: 0, y: 0 };
    var smooth = { x: 0, y: 0 };
    var hasPointer = false;
    var start = performance.now();
    var coarse = window.matchMedia('(pointer: coarse)').matches;

    heroRoot.addEventListener('pointermove', function(e) {
      var r = heroRoot.getBoundingClientRect();
      target.x = ((e.clientX - r.left) / r.width) * 2 - 1;
      target.y = ((e.clientY - r.top) / r.height) * 2 - 1;
      hasPointer = true;
    });
    heroRoot.addEventListener('pointerleave', function() {
      hasPointer = false;
      target.x = 0;
      target.y = 0;
    });

    // Magnetic button
    var magnetBtn = document.getElementById('hero-magnet-btn');
    if (magnetBtn) {
      magnetBtn.addEventListener('pointermove', function(e) {
        var r = magnetBtn.getBoundingClientRect();
        var dx = (e.clientX - (r.left + r.width / 2)) * 0.28;
        var dy = (e.clientY - (r.top + r.height / 2)) * 0.28;
        magnetBtn.style.setProperty('--bx', dx + 'px');
        magnetBtn.style.setProperty('--by', dy + 'px');
      });
      magnetBtn.addEventListener('pointerleave', function() {
        magnetBtn.style.setProperty('--bx', '0px');
        magnetBtn.style.setProperty('--by', '0px');
      });
    }

    function heroTick(now) {
      var t = (now - start) / 1000;
      if (coarse && !hasPointer) {
        target.x = Math.sin(t * 0.55) * 0.6;
        target.y = Math.sin(t * 0.8) * 0.35;
      }
      var bx = Math.sin(t * 0.7) * 0.04;
      var by = Math.cos(t * 0.5) * 0.04;
      smooth.x += (target.x + bx - smooth.x) * 0.09;
      smooth.y += (target.y + by - smooth.y) * 0.09;
      heroRoot.style.setProperty('--mxs', smooth.x.toFixed(4));
      heroRoot.style.setProperty('--mys', smooth.y.toFixed(4));
      heroRoot.style.setProperty('--pulse', (0.5 + 0.5 * Math.sin(t * 2)).toFixed(3));
      requestAnimationFrame(heroTick);
    }
    requestAnimationFrame(heroTick);
  }

  /* ------------------------------------------------------------ */
  /* LOCATION DROPDOWN                                             */
  /* ------------------------------------------------------------ */
  var locBtn = document.getElementById('location-btn');
  var locDropdown = document.getElementById('location-dropdown');
  var locSelected = document.getElementById('location-selected');
  if (locBtn && locDropdown) {
    locBtn.addEventListener('click', function() {
      locDropdown.classList.toggle('hidden');
    });
    document.querySelectorAll('.loc-option').forEach(function(opt) {
      opt.addEventListener('click', function() {
        var loc = this.getAttribute('data-location');
        locSelected.textContent = loc + ', Florida';
        // Update active style
        document.querySelectorAll('.loc-option').forEach(function(o) {
          o.classList.remove('bg-cream-2');
        });
        this.classList.add('bg-cream-2');
        locDropdown.classList.add('hidden');
      });
    });
    // Close on outside click
    document.addEventListener('click', function(e) {
      if (!e.target.closest('#location-picker')) {
        locDropdown.classList.add('hidden');
      }
    });
  }

  /* ------------------------------------------------------------ */
  /* TESTIMONIALS SLIDER                                           */
  /* ------------------------------------------------------------ */
  var REVIEWS = [
    { text: "The food is always fresh, full of flavour and the service is excellent. 5th Element is our go-to spot for Indian food on the First Coast — the biryani and butter chicken never miss.", name: "Priya S.", location: "Baymeadows, Jacksonville", rating: 5 },
    { text: "Amazing variety, authentic taste and a warm atmosphere. Highly recommend for both dining and catering — they handled our office lunch for 40 people flawlessly.", name: "Rahul M.", location: "Towncenter, Jacksonville", rating: 5 },
    { text: "Everything from the appetisers to the desserts was absolutely delicious. The paneer tikka is the best I’ve had outside India. Can’t wait to visit again!", name: "Neha K.", location: "Daytona, Florida", rating: 5 },
    { text: "A real gem on the coast. Rich, honest flavours, generous portions and such friendly staff. We’ve been back three weekends in a row.", name: "Daniel R.", location: "Palm Coast, Florida", rating: 5 },
    { text: "We ordered catering for our daughter’s birthday and the spread was incredible. Every dish was cooked to perfection and our guests couldn’t stop complimenting the food.", name: "Anita P.", location: "Baymeadows, Jacksonville", rating: 5 },
    { text: "Best Indian restaurant in Florida, hands down. The tandoori platter and garlic naan are out of this world. Great ambiance and very attentive staff.", name: "Marcus L.", location: "Daytona, Florida", rating: 5 }
  ];

  var PER_PAGE = 3;
  var PAGES = Math.ceil(REVIEWS.length / PER_PAGE);
  var tsPage = 0;
  var tsGrid = document.getElementById('testimonials-grid');
  var tsDots = document.getElementById('testimonials-dots');

  function renderTestimonials() {
    if (!tsGrid) return;
    var visible = REVIEWS.slice(tsPage * PER_PAGE, tsPage * PER_PAGE + PER_PAGE);
    var html = '';
    visible.forEach(function(review) {
      var stars = '';
      for (var s = 0; s < review.rating; s++) {
        stars += '<svg width="16" height="16" viewBox="0 0 24 24" fill="#C9A876" aria-hidden="true"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>';
      }
      html += '<div class="rounded-2xl bg-white ring-1 ring-ink/[0.08] px-7 py-8 shadow-[0_4px_24px_rgba(42,31,23,0.06)] flex flex-col">'
        + '<div class="flex items-center gap-1 mb-4">' + stars + '</div>'
        + '<p class="italic text-ink text-sm leading-relaxed flex-1">&ldquo;' + review.text + '&rdquo;</p>'
        + '<div class="mt-5 flex items-center gap-3 pt-5 border-t border-ink/[0.08]">'
        + '<div class="w-9 h-9 rounded-full bg-primary flex items-center justify-center text-white text-xs font-bold shrink-0">' + review.name.charAt(0) + '</div>'
        + '<div><div class="text-sm font-semibold text-ink">' + review.name + '</div><div class="text-xs text-muted">' + review.location + '</div></div>'
        + '</div></div>';
    });
    tsGrid.innerHTML = html;
    // Reset animation
    tsGrid.classList.remove('ts-slide');
    void tsGrid.offsetWidth;
    tsGrid.classList.add('ts-slide');

    // Render dots
    if (tsDots && PAGES > 1) {
      var dotsHtml = '';
      for (var d = 0; d < PAGES; d++) {
        dotsHtml += '<button data-ts-page="' + d + '" aria-label="Page ' + (d + 1) + '" class="h-1.5 rounded-full transition-all ' + (d === tsPage ? 'w-8 bg-primary' : 'w-2 bg-ink/20 hover:bg-ink/40') + '"></button>';
      }
      tsDots.innerHTML = dotsHtml;
      tsDots.querySelectorAll('button').forEach(function(btn) {
        btn.addEventListener('click', function() {
          tsPage = parseInt(this.getAttribute('data-ts-page'));
          renderTestimonials();
        });
      });
    }
  }
  renderTestimonials();

  /* ------------------------------------------------------------ */
  /* BLOG SLIDER                                                   */
  /* ------------------------------------------------------------ */
  var BLOG_POSTS = [
    { img: "/assets/images/ig1.webp", title: "The Art of Biryani: A Royal Legacy", date: "Sep 28, 2026" },
    { img: "/assets/images/ig2.webp", title: "5 Spices That Define Indian Cooking", date: "Sep 20, 2026" },
    { img: "/assets/images/ig3.webp", title: "Behind the Scenes: Our Kitchen Story", date: "Sep 12, 2026" },
    { img: "/assets/images/ig4.webp", title: "A Guide to Indian Street Food", date: "Aug 30, 2026" },
    { img: "/assets/images/ig5.webp", title: "Pairing Wine With Indian Cuisine", date: "Aug 22, 2026" },
    { img: "/assets/images/ig6.webp", title: "Festivals & Feasts: Seasonal Menus", date: "Aug 15, 2026" },
    { img: "/assets/images/ig7.webp", title: "From Farm to Table: Fresh Ingredients", date: "Aug 5, 2026" },
    { img: "/assets/images/ig1.webp", title: "Mastering the Tandoor: Tips & Tricks", date: "Jul 28, 2026" }
  ];

  var BLOG_VISIBLE = 4;
  var blogMaxIndex = BLOG_POSTS.length - BLOG_VISIBLE;
  var blogIdx = 0;
  var blogPaused = false;
  var blogTimer = null;
  var blogTrack = document.getElementById('blog-slider-track');
  var blogDotsEl = document.getElementById('blog-dots');
  var blogWrap = document.getElementById('blog-slider-wrap');

  function renderBlogSlider() {
    if (!blogTrack) return;
    var html = '';
    BLOG_POSTS.forEach(function(post) {
      html += '<a href="#" class="group relative aspect-[3/4] overflow-hidden rounded-xl shrink-0" style="width: calc(25% - 12px);">'
        + '<img src="' + post.img + '" alt="' + post.title + '" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">'
        + '<div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>'
        + '<div class="absolute inset-x-0 bottom-0 p-4 flex flex-col justify-end">'
        + '<span class="text-[10px] uppercase tracking-wider text-white/60 font-medium">' + post.date + '</span>'
        + '<h4 class="mt-1 text-sm font-semibold text-white leading-snug line-clamp-2 group-hover:text-gold transition-colors">' + post.title + '</h4>'
        + '</div></a>';
    });
    blogTrack.innerHTML = html;
  }

  function updateBlogPosition() {
    if (!blogTrack) return;
    blogTrack.style.transform = 'translateX(calc(-' + blogIdx + ' * (25% - 12px + 16px)))';
    renderBlogDots();
  }

  function renderBlogDots() {
    if (!blogDotsEl) return;
    var html = '';
    for (var d = 0; d <= blogMaxIndex; d++) {
      html += '<button data-blog-idx="' + d + '" aria-label="Go to slide ' + (d + 1) + '" class="h-1.5 rounded-full transition-all ' + (d === blogIdx ? 'w-8 bg-primary' : 'w-2 bg-ink/20 hover:bg-ink/40') + '"></button>';
    }
    blogDotsEl.innerHTML = html;
    blogDotsEl.querySelectorAll('button').forEach(function(btn) {
      btn.addEventListener('click', function() {
        blogIdx = parseInt(this.getAttribute('data-blog-idx'));
        updateBlogPosition();
      });
    });
  }

  function blogNext() {
    blogIdx = blogIdx >= blogMaxIndex ? 0 : blogIdx + 1;
    updateBlogPosition();
  }
  function blogPrev() {
    blogIdx = blogIdx <= 0 ? blogMaxIndex : blogIdx - 1;
    updateBlogPosition();
  }

  renderBlogSlider();
  updateBlogPosition();

  var blogPrevBtn = document.getElementById('blog-prev');
  var blogNextBtn = document.getElementById('blog-next');
  if (blogPrevBtn) blogPrevBtn.addEventListener('click', blogPrev);
  if (blogNextBtn) blogNextBtn.addEventListener('click', blogNext);

  // Autoplay
  function startBlogAutoplay() {
    if (blogTimer) clearInterval(blogTimer);
    blogTimer = setInterval(blogNext, 5000);
  }
  startBlogAutoplay();

  if (blogWrap) {
    blogWrap.addEventListener('mouseenter', function() {
      if (blogTimer) clearInterval(blogTimer);
    });
    blogWrap.addEventListener('mouseleave', function() {
      startBlogAutoplay();
    });
  }

})();
</script>

<?php require_once __DIR__ . '/../includes/foot.php'; ?>

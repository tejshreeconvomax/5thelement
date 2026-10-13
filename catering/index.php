<?php
$pageTitle = 'Catering Services — 5th Element Indian Restaurant';
$pageDescription = 'Premium Indian catering across Florida. Weddings, corporate events, birthdays and private parties with 500+ authentic dishes.';
$isInnerPage = true;
include '../includes/head.php';
?>
<?php include '../includes/header-inner.php'; ?>

<main class="flex-1">

<!-- Hero -->
<section class="relative min-h-[650px] md:min-h-[750px] lg:min-h-[800px] flex items-center overflow-hidden">
  <img src="/assets/images/catering.webp" alt="Indian catering spread" class="absolute inset-0 w-full h-full object-cover" />
  <div class="absolute inset-0 bg-gradient-to-br from-[#1A120B]/95 via-[#1A120B]/80 to-[#C0392B]/40"></div>

  <!-- decorative elements -->
  <div class="absolute top-0 left-0 w-72 h-72 rounded-full bg-[#C0392B]/10 blur-[100px]"></div>
  <div class="absolute bottom-0 right-0 w-96 h-96 rounded-full bg-[#C9A876]/10 blur-[120px]"></div>
  <svg aria-hidden="true" viewBox="0 0 60 60" class="absolute top-10 right-10 w-16 h-16 text-[#C9A876]/20">
    <path d="M30 2 L32 26 L58 30 L32 32 L30 58 L28 32 L2 30 L28 28 Z" fill="currentColor" />
  </svg>
  <svg aria-hidden="true" viewBox="0 0 60 60" class="absolute bottom-10 left-10 w-12 h-12 text-[#C9A876]/15">
    <path d="M30 2 L32 26 L58 30 L32 32 L30 58 L28 32 L2 30 L28 28 Z" fill="currentColor" />
  </svg>

  <div class="relative mx-auto max-w-7xl px-5 md:px-10 py-20 text-white text-center flex flex-col items-center">
    <span class="inline-flex items-center gap-2 rounded-full bg-white/10 backdrop-blur-sm text-[11px] font-semibold uppercase tracking-[0.22em] px-5 py-2 ring-1 ring-white/20">
      <span class="w-1.5 h-1.5 rounded-full bg-[#C9A876] animate-pulse"></span>
      Catering Services
    </span>
    <h1 class="mt-6 font-display text-5xl md:text-6xl lg:text-7xl leading-[1.05] max-w-2xl">
      Authentic<br>
      <span class="italic text-transparent bg-clip-text" style="background-image: linear-gradient(120deg,#F3D9A7 0%,#E9C58A 50%,#F3D9A7 100%)">
        Indian Cuisine
      </span>
    </h1>
    <p class="mt-5 text-white/80 max-w-lg text-lg leading-relaxed">
      Impeccable service, unforgettable celebrations. From grand weddings to
      intimate gatherings across Florida.
    </p>
    <div class="mt-8 flex flex-wrap gap-4">
      <a href="#enquiry" class="inline-flex items-center gap-2 rounded-full bg-[#C0392B] hover:bg-[#A93123] text-white text-sm font-semibold uppercase tracking-wider px-7 py-3.5 transition-colors">
        Get a Quote
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
      <a href="tel:5102995378" class="inline-flex items-center gap-2 rounded-full bg-white/10 backdrop-blur-sm hover:bg-white/20 text-white text-sm font-semibold px-7 py-3.5 ring-1 ring-white/25 transition-colors">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M22 16.9v3a2 2 0 01-2.2 2 19.8 19.8 0 01-8.6-3.1 19.5 19.5 0 01-6-6 19.8 19.8 0 01-3.1-8.7A2 2 0 014.1 2h3a2 2 0 012 1.7c.1.9.3 1.8.6 2.6a2 2 0 01-.5 2.1l-1.3 1.3a16 16 0 006 6l1.3-1.3a2 2 0 012.1-.5c.8.3 1.7.5 2.6.6A2 2 0 0122 16.9z" stroke="currentColor" stroke-width="1.6"/></svg>
        510-299-5378
      </a>
    </div>
    <div class="mt-10 flex flex-wrap gap-6 text-sm text-white/75">
      <span class="flex items-center gap-2"><span class="text-[#C9A876]">&#x25C8;</span>Weddings</span>
      <span class="flex items-center gap-2"><span class="text-[#C9A876]">&#x25C8;</span>Corporate</span>
      <span class="flex items-center gap-2"><span class="text-[#C9A876]">&#x25C8;</span>Birthdays</span>
      <span class="flex items-center gap-2"><span class="text-[#C9A876]">&#x25C8;</span>Festivals</span>
      <span class="flex items-center gap-2"><span class="text-[#C9A876]">&#x25C8;</span>Private Parties</span>
    </div>
  </div>
</section>

<!-- Intro -->
<section class="bg-[#FBF7F0] py-20 overflow-hidden">
  <div class="mx-auto max-w-7xl px-5 md:px-10">
    <div class="grid md:grid-cols-2 gap-12 md:gap-16 items-center">
      <div>
        <span class="text-[0.72rem] font-semibold tracking-[0.32em] uppercase text-[#C0392B]">
          Florida&rsquo;s Most Loved
        </span>
        <h2 class="mt-3 font-display text-4xl md:text-5xl text-[#2A1F17]">
          Exceptional Flavours for Every Occasion
        </h2>
        <p class="mt-5 text-[#6B5D51] leading-relaxed">
          At 5th Element, we bring the vibrant and bold flavours of Indian and
          Indo-Chinese cuisine to your special events. Each dish is made with
          the finest ingredients and expertly crafted to deliver authentic taste
          and elegant presentation.
        </p>
        <div class="mt-8 flex flex-wrap gap-4">
          <a href="#enquiry" class="inline-flex items-center gap-2 rounded-full bg-[#C0392B] hover:bg-[#A93123] text-white text-sm font-semibold uppercase tracking-wider px-7 py-3.5 transition-colors">
            Get a Quote
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </a>
        </div>
      </div>
      <div class="relative group">
        <div class="relative rounded-2xl overflow-hidden shadow-[0_20px_60px_-15px_rgba(42,31,23,0.25)] transition-shadow duration-700 group-hover:shadow-[0_30px_70px_-15px_rgba(192,57,43,0.3)]">
          <div class="relative aspect-[4/3]">
            <img src="/assets/images/indian-cuisine.webp" alt="Indian cuisine beautifully plated" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
          </div>
        </div>
        <div class="absolute -bottom-4 -left-4 w-24 h-24 rounded-xl bg-[#C0392B] flex flex-col items-center justify-center text-white shadow-lg">
          <span class="text-2xl font-bold leading-none">500+</span>
          <span class="text-[9px] uppercase tracking-wider mt-1">Dishes</span>
        </div>
        <div class="absolute -top-3 -right-3 w-20 h-20 rounded-full border-4 border-[#FBF7F0] bg-[#C9A876] flex flex-col items-center justify-center text-white shadow-lg">
          <span class="text-lg font-bold leading-none">4.9</span>
          <span class="text-[8px] uppercase tracking-wider mt-0.5">&#9733; Rating</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Event Types -->
<section class="bg-[#FBF7F0] pb-24">
  <div class="mx-auto max-w-7xl px-5 md:px-10">
    <div class="text-center mb-14">
      <span class="text-[0.72rem] font-semibold tracking-[0.32em] uppercase text-[#C0392B]">
        Your celebrations deserve the best
      </span>
      <h2 class="mt-3 font-display text-4xl md:text-5xl text-[#2A1F17]">
        Events We Cater
      </h2>
    </div>
    <div class="grid md:grid-cols-3 lg:grid-cols-5 gap-5">
      <?php
      $eventTypes = [
        ['title' => 'Wedding Receptions', 'desc' => 'Grand feasts with custom menus, elegant presentation and professional service for your most special day.', 'img' => '/assets/images/event-wedding.webp'],
        ['title' => 'Birthday Celebrations', 'desc' => 'From intimate family birthdays to lavish milestone parties, we bring joy through food.', 'img' => '/assets/images/event-birthday.webp'],
        ['title' => 'Corporate Events', 'desc' => 'Professional lunch catering, team dinners and conference meals that impress every time.', 'img' => '/assets/images/event-corporate.webp'],
        ['title' => 'Festive Occasions', 'desc' => 'Celebrate Diwali, Eid, Navratri and every festival with authentic traditional dishes.', 'img' => '/assets/images/event-festive.webp'],
        ['title' => 'Private Gatherings', 'desc' => 'House parties, anniversaries, baby showers — customised menus for your closest circle.', 'img' => '/assets/images/catering.webp'],
      ];
      foreach ($eventTypes as $e): ?>
      <div class="group relative rounded-xl overflow-hidden aspect-[3/4] cursor-pointer shadow-[0_2px_20px_rgba(42,31,23,0.06)] transition-all duration-700 ease-out hover:-translate-y-2 hover:shadow-[0_24px_50px_-14px_rgba(192,57,43,0.3)]">
        <img src="<?= htmlspecialchars($e['img']) ?>" alt="<?= htmlspecialchars($e['title']) ?>" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent transition-all duration-500 group-hover:from-black/85 group-hover:via-black/40"></div>
        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 bg-[#C0392B]/15"></div>
        <div class="absolute inset-x-0 bottom-0 p-5 flex flex-col">
          <h3 class="text-white font-display text-xl leading-tight"><?= htmlspecialchars($e['title']) ?></h3>
          <p class="text-white/75 text-xs mt-2 leading-relaxed max-h-0 opacity-0 transition-all duration-500 group-hover:max-h-24 group-hover:opacity-100"><?= htmlspecialchars($e['desc']) ?></p>
          <span class="mt-3 inline-flex items-center gap-1.5 text-[#C9A876] text-[10px] font-semibold uppercase tracking-[0.2em] opacity-0 translate-y-3 transition-all duration-500 delay-75 group-hover:opacity-100 group-hover:translate-y-0">
            Learn more
            <svg width="10" height="10" viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 5l7 7-7 7" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </span>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Services Grid -->
<section class="relative overflow-hidden text-white py-24"
         style="background:
           radial-gradient(ellipse 60% 50% at 85% 0%, rgba(201,168,118,0.08), transparent 60%),
           radial-gradient(ellipse 70% 60% at 15% 100%, rgba(192,57,43,0.06), transparent 60%),
           linear-gradient(180deg, #15100A 0%, #1A120B 50%, #15100A 100%);">
  <!-- Decorative ornamental pattern top-left -->
  <svg class="absolute -top-10 -left-10 w-80 h-80 text-[#C9A876]/[0.04] pointer-events-none" viewBox="0 0 200 200" fill="none" stroke="currentColor" stroke-width="0.5" aria-hidden="true">
    <circle cx="100" cy="100" r="90"/>
    <circle cx="100" cy="100" r="70"/>
    <circle cx="100" cy="100" r="50"/>
    <g>
      <?php for ($i = 0; $i < 16; $i++):
        $angle = $i * 22.5;
      ?>
      <line x1="100" y1="10" x2="100" y2="30" transform="rotate(<?= $angle ?> 100 100)"/>
      <?php endfor; ?>
    </g>
  </svg>
  <!-- Decorative ornamental pattern bottom-right -->
  <svg class="absolute -bottom-16 -right-16 w-96 h-96 text-[#C9A876]/[0.03] pointer-events-none" viewBox="0 0 200 200" fill="none" stroke="currentColor" stroke-width="0.5" aria-hidden="true">
    <circle cx="100" cy="100" r="95"/>
    <circle cx="100" cy="100" r="75"/>
    <circle cx="100" cy="100" r="55"/>
    <g>
      <?php for ($i = 0; $i < 24; $i++):
        $angle = $i * 15;
      ?>
      <line x1="100" y1="5" x2="100" y2="25" transform="rotate(<?= $angle ?> 100 100)"/>
      <?php endfor; ?>
    </g>
  </svg>
  <!-- Top gold divider -->
  <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-[#C9A876]/30 to-transparent"></div>
  <!-- Bottom gold divider -->
  <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-[#C9A876]/30 to-transparent"></div>

  <div class="relative mx-auto max-w-7xl px-5 md:px-10">
    <div class="text-center mb-16">
      <div class="inline-flex items-center gap-3 mb-4">
        <span class="h-px w-10 bg-[#C9A876]/40"></span>
        <span class="text-[0.72rem] font-semibold tracking-[0.32em] uppercase text-[#C9A876]">
          Our Catering Services
        </span>
        <span class="h-px w-10 bg-[#C9A876]/40"></span>
      </div>
      <h2 class="font-display text-4xl md:text-5xl">
        Everything You Need
      </h2>
    </div>

    <?php
    $services = [
      ['icon' => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" stroke-linecap="round" stroke-linejoin="round"/></svg>', 'title' => '500+ Indian Dishes', 'desc' => 'Choose from over 500 authentic dishes including traditional and contemporary options, all made with premium ingredients.'],
      ['icon' => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"><path d="M12 22s7-7.58 7-13a7 7 0 10-14 0c0 5.42 7 13 7 13z" stroke-linecap="round"/><circle cx="12" cy="9" r="2.5"/></svg>', 'title' => 'Nationwide Service', 'desc' => 'Catering available across the U.S., ensuring timely delivery and authentic Indian cuisine wherever your event is held.'],
      ['icon' => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"><path d="M16 4h2a2 2 0 012 2v14a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2h2" stroke-linecap="round"/><rect x="8" y="2" width="8" height="4" rx="1"/><path d="M9 14l2 2 4-4" stroke-linecap="round" stroke-linejoin="round"/></svg>', 'title' => 'Customised Menus', 'desc' => 'We work with you to create personalised menus that fit your event\'s theme, taste and dietary needs.'],
      ['icon' => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"><path d="M12 2a3 3 0 00-3 3v4a3 3 0 006 0V5a3 3 0 00-3-3z"/><path d="M19 10v1a7 7 0 01-14 0v-1M12 18v4M8 22h8" stroke-linecap="round"/></svg>', 'title' => 'Veg, Non-Veg &amp; Vegan', 'desc' => 'Vegetarian gravies, tender non-veg dishes, vegan meals, Jain-friendly and gluten-free options available.'],
      ['icon' => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 3v18" stroke-linecap="round"/></svg>', 'title' => 'Menu &amp; Placard Design', 'desc' => 'Customised placard designs for labelling dishes, personalising your event decor and adding a stylish touch.'],
      ['icon' => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" stroke-linecap="round"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75" stroke-linecap="round"/></svg>', 'title' => 'Professional Staff', 'desc' => 'Our trained team handles setup, service and cleanup — so you can enjoy your celebration worry-free.'],
    ];
    ?>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
      <?php foreach ($services as $i => $s): ?>
      <div class="group relative overflow-hidden rounded-2xl p-8 bg-white/[0.03] ring-1 ring-white/[0.06] transition-all duration-500 hover:bg-white/[0.06] hover:ring-[#C9A876]/20 hover:-translate-y-1 hover:shadow-[0_20px_50px_-15px_rgba(201,168,118,0.12)]">
        <span class="absolute top-5 right-6 font-display text-[3.5rem] leading-none font-bold text-white/[0.03] select-none transition-colors duration-500 group-hover:text-[#C9A876]/[0.07]"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></span>
        <div class="relative">
          <div class="w-14 h-14 rounded-xl bg-[#C0392B]/10 flex items-center justify-center text-[#C9A876] transition-all duration-500 group-hover:bg-[#C0392B] group-hover:text-white group-hover:shadow-[0_8px_24px_rgba(192,57,43,0.3)]">
            <?= $s['icon'] ?>
          </div>
          <h3 class="mt-5 text-lg font-semibold text-[#FBF7F0]"><?= $s['title'] ?></h3>
          <p class="mt-2 text-sm text-white/50 leading-relaxed"><?= $s['desc'] ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Catering Locations -->
<section class="bg-[#FBF7F0] py-24">
  <div class="mx-auto max-w-7xl px-5 md:px-10">
    <div class="text-center mb-14">
      <span class="text-[0.72rem] font-semibold tracking-[0.32em] uppercase text-[#C0392B]">
        We Serve Across Florida
      </span>
      <h2 class="mt-3 font-display text-4xl md:text-5xl text-[#2A1F17]">
        Catering Locations
      </h2>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
      <?php
      $locations = [
        ['city' => 'Baymeadows', 'region' => 'Jacksonville', 'href' => 'jacksonville.php', 'img' => '/assets/images/loc-jacksonville.webp'],
        ['city' => 'Towncenter', 'region' => 'Jacksonville', 'href' => 'jacksonville.php', 'img' => '/assets/images/loc-pompano.webp'],
        ['city' => 'Daytona Beach', 'region' => 'Florida', 'href' => '#', 'img' => '/assets/images/loc-daytona.webp'],
        ['city' => 'Palm Coast', 'region' => 'Florida', 'href' => '#', 'img' => '/assets/images/loc-palm.webp'],
      ];
      foreach ($locations as $l): ?>
      <a href="<?= htmlspecialchars($l['href']) ?>" class="group relative block rounded-xl overflow-hidden shadow-[0_2px_20px_rgba(42,31,23,0.06)] transition-all duration-500 hover:-translate-y-1.5 hover:shadow-[0_20px_40px_-12px_rgba(192,57,43,0.25)]">
        <div class="relative h-48 overflow-hidden">
          <img src="<?= htmlspecialchars($l['img']) ?>" alt="<?= htmlspecialchars($l['city']) ?>" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
          <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        </div>
        <div class="bg-white p-5 text-center">
          <div class="flex items-center justify-center gap-2">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" class="text-[#C0392B] shrink-0">
              <path d="M12 22s7-7.58 7-13a7 7 0 10-14 0c0 5.42 7 13 7 13z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
              <circle cx="12" cy="9" r="2.5" stroke="currentColor" stroke-width="1.8"/>
            </svg>
            <h3 class="font-semibold text-[#2A1F17]"><?= htmlspecialchars($l['city']) ?></h3>
          </div>
          <div class="text-[10px] uppercase tracking-widest text-[#6B5D51] mt-0.5"><?= htmlspecialchars($l['region']) ?></div>
          <div class="mt-3 inline-flex items-center gap-1.5 text-[#C0392B] text-[10px] font-semibold uppercase tracking-[0.2em] opacity-0 group-hover:opacity-100 transition-opacity duration-500">
            View Menu
            <svg width="10" height="10" viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 5l7 7-7 7" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </div>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="bg-[#FBF7F0] py-20">
  <div class="mx-auto max-w-7xl px-5 md:px-10">
    <div class="text-center mb-12">
      <span class="text-[0.72rem] font-semibold tracking-[0.32em] uppercase text-[#C0392B]">
        What Our Guests Say
      </span>
      <h2 class="mt-3 font-display text-4xl md:text-5xl text-[#2A1F17]">
        Reviews
      </h2>
    </div>

    <div id="testimonials-track" class="grid md:grid-cols-3 gap-6">
      <!-- Reviews injected by JS -->
    </div>

    <div id="testimonials-dots" class="mt-8 flex items-center justify-center gap-2"></div>
  </div>

  <style>
    .ts-slide { animation: ts-in 520ms cubic-bezier(.2,.7,.2,1) both; }
    @keyframes ts-in { 0% { opacity:0; transform:translateY(10px); } 100% { opacity:1; transform:translateY(0); } }
    @media (prefers-reduced-motion: reduce) { .ts-slide { animation: none; } }
  </style>

  <script>
  (function(){
    var reviews = [
      { text: "The food is always fresh, full of flavour and the service is excellent. 5th Element is our go-to spot for Indian food on the First Coast — the biryani and butter chicken never miss.", name: "Priya S.", location: "Baymeadows, Jacksonville", rating: 5 },
      { text: "Amazing variety, authentic taste and a warm atmosphere. Highly recommend for both dining and catering — they handled our office lunch for 40 people flawlessly.", name: "Rahul M.", location: "Towncenter, Jacksonville", rating: 5 },
      { text: "Everything from the appetisers to the desserts was absolutely delicious. The paneer tikka is the best I’ve had outside India. Can’t wait to visit again!", name: "Neha K.", location: "Daytona, Florida", rating: 5 },
      { text: "A real gem on the coast. Rich, honest flavours, generous portions and such friendly staff. We’ve been back three weekends in a row.", name: "Daniel R.", location: "Palm Coast, Florida", rating: 5 },
      { text: "We ordered catering for our daughter’s birthday and the spread was incredible. Every dish was cooked to perfection and our guests couldn’t stop complimenting the food.", name: "Anita P.", location: "Baymeadows, Jacksonville", rating: 5 },
      { text: "Best Indian restaurant in Florida, hands down. The tandoori platter and garlic naan are out of this world. Great ambiance and very attentive staff.", name: "Marcus L.", location: "Daytona, Florida", rating: 5 }
    ];
    var perPage = 3;
    var pages = Math.ceil(reviews.length / perPage);
    var currentPage = 0;
    var track = document.getElementById('testimonials-track');
    var dots = document.getElementById('testimonials-dots');

    function starSvg() {
      return '<svg width="16" height="16" viewBox="0 0 24 24" fill="#C9A876" aria-hidden="true"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>';
    }

    function render() {
      var start = currentPage * perPage;
      var visible = reviews.slice(start, start + perPage);
      var html = '';
      for (var i = 0; i < visible.length; i++) {
        var r = visible[i];
        var stars = '';
        for (var s = 0; s < r.rating; s++) stars += starSvg();
        html += '<div class="rounded-2xl bg-white ring-1 ring-[#2A1F17]/8 px-7 py-8 shadow-[0_4px_24px_rgba(42,31,23,0.06)] flex flex-col">'
          + '<div class="flex items-center gap-1 mb-4">' + stars + '</div>'
          + '<p class="italic text-[#2A1F17] text-sm leading-relaxed flex-1">&ldquo;' + r.text + '&rdquo;</p>'
          + '<div class="mt-5 flex items-center gap-3 pt-5 border-t border-[#2A1F17]/8">'
          + '<div class="w-9 h-9 rounded-full bg-[#C0392B] flex items-center justify-center text-white text-xs font-bold shrink-0">' + r.name.charAt(0) + '</div>'
          + '<div><div class="text-sm font-semibold text-[#2A1F17]">' + r.name + '</div>'
          + '<div class="text-xs text-[#6B5D51]">' + r.location + '</div></div>'
          + '</div></div>';
      }
      track.className = 'ts-slide grid md:grid-cols-3 gap-6';
      track.innerHTML = html;
      // force reflow for animation
      void track.offsetWidth;

      // dots
      var dhtml = '';
      for (var d = 0; d < pages; d++) {
        dhtml += '<button onclick="window.__tsDot(' + d + ')" aria-label="Page ' + (d+1) + '" class="h-1.5 rounded-full transition-all ' + (d === currentPage ? 'w-8 bg-[#C0392B]' : 'w-2 bg-[#2A1F17]/20 hover:bg-[#2A1F17]/40') + '"></button>';
      }
      dots.innerHTML = dhtml;
    }

    window.__tsDot = function(p) {
      currentPage = p;
      render();
    };

    render();
  })();
  </script>
</section>

<!-- Enquiry CTA -->
<section id="enquiry" class="bg-[#1A120B] text-white py-20">
  <div class="mx-auto max-w-7xl px-5 md:px-10">
    <div class="grid md:grid-cols-2 gap-12 md:gap-16 items-center">
      <div>
        <span class="text-[0.72rem] font-semibold tracking-[0.32em] uppercase text-[#C9A876]">
          Ready to get started?
        </span>
        <h2 class="mt-3 font-display text-4xl md:text-5xl">
          Let&rsquo;s Plan Your Event
        </h2>
        <p class="mt-4 text-white/60 leading-relaxed max-w-md">
          Tell us about your event and we&rsquo;ll create a custom menu and
          quote tailored to your needs.
        </p>
      </div>

      <div class="rounded-2xl bg-white/5 ring-1 ring-white/10 p-8 md:p-10">
        <div class="space-y-5">
          <a href="mailto:caterings@my5thelement.com" class="flex items-center gap-4 group">
            <div class="w-12 h-12 rounded-xl bg-[#C0392B]/15 flex items-center justify-center text-[#C9A876] shrink-0 group-hover:bg-[#C0392B]/25 transition-colors">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><rect x="3" y="5" width="18" height="14" rx="2" stroke="currentColor" stroke-width="1.6"/><path d="M3 7l9 7 9-7" stroke="currentColor" stroke-width="1.6"/></svg>
            </div>
            <div>
              <div class="text-xs text-white/50 uppercase tracking-wider">Email us</div>
              <div class="text-sm font-semibold text-white group-hover:text-[#C9A876] transition-colors">caterings@my5thelement.com</div>
            </div>
          </a>

          <div class="h-px bg-white/10"></div>

          <a href="tel:5102995378" class="flex items-center gap-4 group">
            <div class="w-12 h-12 rounded-xl bg-[#C0392B]/15 flex items-center justify-center text-[#C9A876] shrink-0 group-hover:bg-[#C0392B]/25 transition-colors">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M22 16.9v3a2 2 0 01-2.2 2 19.8 19.8 0 01-8.6-3.1 19.5 19.5 0 01-6-6 19.8 19.8 0 01-3.1-8.7A2 2 0 014.1 2h3a2 2 0 012 1.7c.1.9.3 1.8.6 2.6a2 2 0 01-.5 2.1l-1.3 1.3a16 16 0 006 6l1.3-1.3a2 2 0 012.1-.5c.8.3 1.7.5 2.6.6A2 2 0 0122 16.9z" stroke="currentColor" stroke-width="1.6"/></svg>
            </div>
            <div>
              <div class="text-xs text-white/50 uppercase tracking-wider">Call us</div>
              <div class="text-sm font-semibold text-white group-hover:text-[#C9A876] transition-colors">510-299-5378</div>
            </div>
          </a>

          <div class="h-px bg-white/10"></div>

          <a href="tel:9048934265" class="flex items-center gap-4 group">
            <div class="w-12 h-12 rounded-xl bg-[#C0392B]/15 flex items-center justify-center text-[#C9A876] shrink-0 group-hover:bg-[#C0392B]/25 transition-colors">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M22 16.9v3a2 2 0 01-2.2 2 19.8 19.8 0 01-8.6-3.1 19.5 19.5 0 01-6-6 19.8 19.8 0 01-3.1-8.7A2 2 0 014.1 2h3a2 2 0 012 1.7c.1.9.3 1.8.6 2.6a2 2 0 01-.5 2.1l-1.3 1.3a16 16 0 006 6l1.3-1.3a2 2 0 012.1-.5c.8.3 1.7.5 2.6.6A2 2 0 0122 16.9z" stroke="currentColor" stroke-width="1.6"/></svg>
            </div>
            <div>
              <div class="text-xs text-white/50 uppercase tracking-wider">Alternate</div>
              <div class="text-sm font-semibold text-white group-hover:text-[#C9A876] transition-colors">904-893-4265</div>
            </div>
          </a>
        </div>

        <a href="#enquiry" class="mt-8 w-full inline-flex items-center justify-center gap-2 rounded-full bg-[#C0392B] hover:bg-[#A93123] text-white text-sm font-semibold uppercase tracking-wider px-7 py-3.5 transition-colors">
          Get a Quote
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
      </div>
    </div>
  </div>
</section>

</main>

<?php include '../includes/footer.php'; ?>
<?php include '../includes/foot.php'; ?>

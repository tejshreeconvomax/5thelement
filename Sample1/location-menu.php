<?php
$pageTitle = 'Jacksonville Catering Menu — 5th Element Indian Restaurant';
$pageDescription = 'Full catering menu and pricing for Jacksonville FL. 200+ authentic Indian dishes for weddings, corporate events and parties.';
$isInnerPage = true;
$sampleStylesheet = '/assets/css/sample-1.css';
include __DIR__ . '/../includes/head.php';
?>
<?php include __DIR__ . '/_header-inner.php'; ?>

<main class="flex-1">

<style>
  .menu-fade { animation: menu-in 400ms cubic-bezier(.2,.7,.2,1) both; }
  @keyframes menu-in { 0% { opacity:0; transform:translateY(8px); } 100% { opacity:1; transform:translateY(0); } }
  @media (prefers-reduced-motion: reduce) { .menu-fade { animation: none; } }
  .scrollbar-hide::-webkit-scrollbar { display: none; }
  .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
</style>

<!-- Hero -->
<section class="relative min-h-[480px] md:min-h-[560px] flex items-center overflow-hidden">
  <img src="/assets/images/event-wedding.webp" alt="5th Element catering in Jacksonville" class="absolute inset-0 w-full h-full object-cover" />
  <div class="absolute inset-0 bg-gradient-to-r from-[#1A120B]/95 via-[#1A120B]/75 to-[#1A120B]/30"></div>
  <div class="relative mx-auto max-w-7xl px-5 md:px-10 py-20 text-white">
    <a href="index.php" class="inline-flex items-center gap-2 text-[11px] font-semibold uppercase tracking-[0.2em] text-[#C9A876] hover:text-white transition-colors mb-6">
      <svg width="12" height="12" viewBox="0 0 24 24" fill="none"><path d="M19 12H5M12 19l-7-7 7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
      All Catering Locations
    </a>
    <h1 class="font-display text-4xl md:text-6xl leading-[1.05] max-w-2xl">
      Jacksonville&rsquo;s Highest Rated<br>
      <span class="italic text-transparent bg-clip-text" style="background-image: linear-gradient(120deg,#F3D9A7 0%,#E9C58A 50%,#F3D9A7 100%)">
        Catering Service
      </span>
    </h1>
    <p class="mt-5 text-white/80 max-w-lg leading-relaxed">
      Make your special occasion unforgettable with authentic Indian cuisine.
      Weddings, engagements, birthdays, corporate events and more.
    </p>
    <div class="mt-8 flex flex-wrap gap-4">
      <a href="mailto:caterings@my5thelement.com" class="inline-flex items-center gap-2 rounded-full bg-[#C0392B] hover:bg-[#A93123] text-white text-sm font-semibold uppercase tracking-wider px-7 py-3.5 transition-colors">
        Get a Quote
      </a>
      <a href="tel:9048934265" class="inline-flex items-center gap-2 rounded-full bg-white/10 hover:bg-white/20 text-white text-sm font-semibold px-7 py-3.5 ring-1 ring-white/25 transition-colors">
        904-893-4265
      </a>
    </div>
  </div>
</section>

<!-- Stats Strip -->
<section class="bg-[#C0392B] text-white">
  <div class="mx-auto max-w-7xl px-5 md:px-10 py-8 grid grid-cols-2 md:grid-cols-4 gap-8">
    <?php
    $highlights = [
      ['stat' => '200+', 'label' => 'Dishes Available'],
      ['stat' => '35+', 'label' => '5-Star Reviews'],
      ['stat' => '4', 'label' => 'Florida Locations'],
      ['stat' => '15+', 'label' => 'Years Experience'],
    ];
    foreach ($highlights as $h): ?>
    <div class="text-center">
      <div class="font-display text-3xl md:text-4xl"><?= $h['stat'] ?></div>
      <div class="text-xs uppercase tracking-[0.2em] text-white/80 mt-1"><?= $h['label'] ?></div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<?php
  $menuJson = file_get_contents(__DIR__ . '/../catering/jacksonville-menu.json');
?>
<!-- Full Menu with Tabs -->
<section class="bg-[#FBF7F0] py-24">
  <div class="mx-auto max-w-7xl px-5 md:px-10">
    <div class="text-center mb-12">
      <span class="text-[0.72rem] font-semibold tracking-[0.32em] uppercase text-[#C0392B]">
        Our Catering Menu
      </span>
      <h2 class="mt-3 font-display text-4xl md:text-5xl text-[#2A1F17]">
        Full Menu &amp; Pricing
      </h2>
      <p class="mt-3 text-[#6B5D51] max-w-xl mx-auto text-sm">
        Prices reflect prevailing market rates and may vary. Each dish is available in
        multiple tray sizes — pick what fits your event.
      </p>

      <!-- Tray legend -->
      <div class="mt-6 inline-flex flex-wrap items-center justify-center gap-3 text-[11px] text-[#6B5D51]">
        <span class="inline-flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-[#C9A876]"></span>Small · 8–12</span>
        <span class="inline-flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-[#C9A876]"></span>Medium · 15–20</span>
        <span class="inline-flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-[#C9A876]"></span>Medium Large · 30–40</span>
        <span class="inline-flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-[#C9A876]"></span>Large · 50–60</span>
      </div>
    </div>

    <!-- Tab Navigation -->
    <div id="menu-tabs" class="flex overflow-x-auto gap-2 pb-4 mb-8 scrollbar-hide"></div>

    <!-- Menu Items Grid -->
    <div id="menu-grid" class="menu-fade grid sm:grid-cols-2 lg:grid-cols-3 gap-4"></div>

    <!-- Category quick info -->
    <div id="menu-info" class="mt-6 text-center text-xs text-[#6B5D51]"></div>
  </div>
</section>

<script>
(function(){
  var MENU = <?= $menuJson ?>;

  var activeTab = 0;
  var tabsEl = document.getElementById('menu-tabs');
  var gridEl = document.getElementById('menu-grid');
  var infoEl = document.getElementById('menu-info');

  function escHtml(s) {
    var d = document.createElement('div');
    d.textContent = s;
    return d.innerHTML;
  }

  function renderTabs() {
    var html = '';
    for (var i = 0; i < MENU.length; i++) {
      var cat = MENU[i];
      var isActive = (i === activeTab);
      html += '<button data-tab="' + i + '" class="shrink-0 flex items-center gap-2 rounded-full px-5 py-2.5 text-sm font-medium transition-all '
        + (isActive ? 'bg-[#1A120B] text-white shadow-lg' : 'bg-white text-[#2A1F17] ring-1 ring-[#2A1F17]/10 hover:ring-[#C0392B]/30 hover:text-[#C0392B]')
        + '">'
        + '<span class="text-base">' + cat.icon + '</span>'
        + escHtml(cat.label)
        + '<span class="text-[10px] font-bold rounded-full px-2 py-0.5 '
        + (isActive ? 'bg-white/20 text-white' : 'bg-[#C0392B]/10 text-[#C0392B]')
        + '">' + cat.items.length + '</span>'
        + '</button>';
    }
    tabsEl.innerHTML = html;
  }

  function fmtPrice(n) {
    return '$' + (Number.isInteger(n) ? n : n.toFixed(2));
  }

  function renderGrid() {
    var cat = MENU[activeTab];
    var html = '';
    for (var j = 0; j < cat.items.length; j++) {
      var item = cat.items[j];
      html += '<div class="bg-white rounded-xl p-5 ring-1 ring-[#2A1F17]/[0.06] hover:ring-[#C0392B]/25 hover:shadow-lg transition-all">';
      html += '<h3 class="text-sm font-semibold text-[#2A1F17] mb-3">' + escHtml(item.name) + '</h3>';

      if (item.options && item.options.length) {
        // Build tray option grid
        html += '<div class="grid grid-cols-2 gap-2">';
        for (var k = 0; k < item.options.length; k++) {
          var opt = item.options[k];
          html += '<div class="flex items-center justify-between gap-2 rounded-lg bg-[#FBF7F0] px-3 py-2 ring-1 ring-[#C9A876]/15">'
            + '<div class="min-w-0">'
            +   '<div class="text-[11px] font-semibold text-[#2A1F17] leading-tight">' + escHtml(opt.size) + '</div>'
            +   (opt.people ? '<div class="text-[10px] text-[#6B5D51] leading-tight mt-0.5">' + escHtml(opt.people) + '</div>' : '')
            + '</div>'
            + '<span class="shrink-0 text-sm font-bold text-[#C0392B]">' + escHtml(fmtPrice(opt.price)) + '</span>'
            + '</div>';
        }
        html += '</div>';
      } else if (item.simple) {
        html += '<div class="flex items-center justify-between gap-2 rounded-lg bg-[#FBF7F0] px-3 py-2 ring-1 ring-[#C9A876]/15">'
          +   '<span class="text-[11px] font-medium text-[#6B5D51]">' + escHtml(item.unit || 'Price') + '</span>'
          +   '<span class="text-sm font-bold text-[#C0392B]">' + escHtml(item.simple) + (item.unit === 'per piece' ? ' <span class="text-[10px] font-normal text-[#6B5D51]">/pc</span>' : '') + '</span>'
          + '</div>';
      }

      html += '</div>';
    }
    gridEl.innerHTML = html;
    gridEl.className = 'menu-fade grid sm:grid-cols-2 lg:grid-cols-3 gap-4';
    void gridEl.offsetWidth; // force reflow for animation
    infoEl.textContent = 'Showing ' + cat.items.length + ' items in ' + cat.label;
  }

  function setTab(i) {
    activeTab = i;
    renderTabs();
    renderGrid();
    // Scroll active tab into view
    var activeBtn = tabsEl.querySelector('[data-tab="' + i + '"]');
    if (activeBtn) activeBtn.scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });
  }

  tabsEl.addEventListener('click', function(e) {
    var btn = e.target.closest('[data-tab]');
    if (btn) setTab(parseInt(btn.getAttribute('data-tab'), 10));
  });

  renderTabs();
  renderGrid();
})();
</script>

<!-- Why Choose Us -->
<section class="bg-[#1A120B] text-white py-24">
  <div class="mx-auto max-w-7xl px-5 md:px-10">
    <div class="grid md:grid-cols-2 gap-16 items-center">
      <div>
        <span class="text-[0.72rem] font-semibold tracking-[0.32em] uppercase text-[#C9A876]">
          Why 5th Element
        </span>
        <h2 class="mt-3 font-display text-4xl md:text-5xl leading-tight">
          More Than Just Food &mdash; It&rsquo;s an Experience
        </h2>
        <p class="mt-5 text-white/70 leading-relaxed">
          We don&rsquo;t just serve food &mdash; we serve experiences. Every platter
          is plated with care and presented to impress, right down to the
          last detail.
        </p>
        <div class="mt-8 space-y-5">
          <?php
          $whyItems = [
            ['title' => 'Halal Certified', 'desc' => 'All our meat dishes are 100% halal.'],
            ['title' => 'Vegan & Gluten-Free', 'desc' => 'Full menus for every dietary preference.'],
            ['title' => 'On-Time Delivery', 'desc' => 'Hot, fresh food delivered right when you need it.'],
            ['title' => 'Full Service', 'desc' => 'Setup, serving staff and cleanup included.'],
          ];
          foreach ($whyItems as $item): ?>
          <div class="flex items-start gap-4">
            <span class="mt-1 shrink-0 w-6 h-6 rounded-full bg-[#C0392B]/20 flex items-center justify-center">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none"><path d="M20 6L9 17l-5-5" stroke="#C9A876" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </span>
            <div>
              <div class="font-semibold text-sm"><?= htmlspecialchars($item['title']) ?></div>
              <div class="text-xs text-white/60"><?= htmlspecialchars($item['desc']) ?></div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="relative">
        <div class="relative aspect-[4/5] rounded-xl overflow-hidden">
          <img src="/assets/images/event-festive.webp" alt="5th Element catering experience" class="w-full h-full object-cover" />
        </div>
        <div class="absolute -bottom-6 -left-6 rounded-xl bg-[#C0392B] text-white p-6 shadow-2xl max-w-[200px]">
          <div class="font-display text-3xl">4.9</div>
          <div class="flex gap-0.5 mt-1">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="#C9A876"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg width="12" height="12" viewBox="0 0 24 24" fill="#C9A876"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg width="12" height="12" viewBox="0 0 24 24" fill="#C9A876"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg width="12" height="12" viewBox="0 0 24 24" fill="#C9A876"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg width="12" height="12" viewBox="0 0 24 24" fill="#C9A876"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          </div>
          <div class="text-[10px] text-white/80 mt-2 uppercase tracking-wider">Google Reviews</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Contact / Enquiry -->
<section class="bg-[#FBF7F0] py-24">
  <div class="mx-auto max-w-7xl px-5 md:px-10">
    <div class="grid md:grid-cols-2 gap-12 items-start">
      <div>
        <span class="text-[0.72rem] font-semibold tracking-[0.32em] uppercase text-[#C0392B]">
          Get In Touch
        </span>
        <h2 class="mt-3 font-display text-4xl md:text-5xl text-[#2A1F17] leading-tight">
          Big Wedding or a Small Family Get-Together?
        </h2>
        <p class="mt-5 text-[#6B5D51] leading-relaxed">
          We handle it all with great Indian food and full management support.
          Reach out and let&rsquo;s start planning your event.
        </p>
        <div class="mt-8 space-y-4">
          <a href="mailto:caterings@my5thelement.com" class="flex items-center gap-4 group">
            <span class="w-12 h-12 rounded-full bg-[#C0392B]/10 flex items-center justify-center text-[#C0392B] group-hover:bg-[#C0392B] group-hover:text-white transition-colors">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><rect x="3" y="5" width="18" height="14" rx="2" stroke="currentColor" stroke-width="1.6"/><path d="M3 7l9 7 9-7" stroke="currentColor" stroke-width="1.6"/></svg>
            </span>
            <div>
              <div class="text-xs text-[#6B5D51]">Email</div>
              <div class="text-sm font-semibold text-[#2A1F17]">caterings@my5thelement.com</div>
            </div>
          </a>
          <a href="tel:5102995378" class="flex items-center gap-4 group">
            <span class="w-12 h-12 rounded-full bg-[#C0392B]/10 flex items-center justify-center text-[#C0392B] group-hover:bg-[#C0392B] group-hover:text-white transition-colors">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M22 16.9v3a2 2 0 01-2.2 2 19.8 19.8 0 01-8.6-3.1 19.5 19.5 0 01-6-6 19.8 19.8 0 01-3.1-8.7A2 2 0 014.1 2h3a2 2 0 012 1.7c.1.9.3 1.8.6 2.6a2 2 0 01-.5 2.1l-1.3 1.3a16 16 0 006 6l1.3-1.3a2 2 0 012.1-.5c.8.3 1.7.5 2.6.6A2 2 0 0122 16.9z" stroke="currentColor" stroke-width="1.6"/></svg>
            </span>
            <div>
              <div class="text-xs text-[#6B5D51]">Phone</div>
              <div class="text-sm font-semibold text-[#2A1F17]">510-299-5378 / 904-893-4265</div>
            </div>
          </a>
          <div class="flex items-center gap-4">
            <span class="w-12 h-12 rounded-full bg-[#C0392B]/10 flex items-center justify-center text-[#C0392B]">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M12 22s7-7.58 7-13a7 7 0 10-14 0c0 5.42 7 13 7 13z" stroke="currentColor" stroke-width="1.6"/><circle cx="12" cy="9" r="2.6" stroke="currentColor" stroke-width="1.6"/></svg>
            </span>
            <div>
              <div class="text-xs text-[#6B5D51]">Locations</div>
              <div class="text-sm font-semibold text-[#2A1F17]">Baymeadows &amp; Towncenter, Jacksonville FL</div>
            </div>
          </div>
        </div>
      </div>

      <div class="grid grid-cols-2 gap-4">
        <div class="relative aspect-square rounded-xl overflow-hidden">
          <img src="/assets/images/ig2.webp" alt="Indian thali" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" />
        </div>
        <div class="relative aspect-square rounded-xl overflow-hidden mt-8">
          <img src="/assets/images/event-corporate.webp" alt="Corporate catering" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" />
        </div>
        <div class="relative aspect-square rounded-xl overflow-hidden -mt-4">
          <img src="/assets/images/event-birthday.webp" alt="Birthday celebration" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" />
        </div>
        <div class="relative aspect-square rounded-xl overflow-hidden mt-4">
          <img src="/assets/images/ig6.webp" alt="Biryani" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" />
        </div>
      </div>
    </div>
  </div>
</section>

</main>

<?php include __DIR__ . '/_footer.php'; ?>
<?php include __DIR__ . '/../includes/foot.php'; ?>

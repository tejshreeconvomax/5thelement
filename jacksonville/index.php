<?php
$pageTitle = '5th Element Indian Restaurant — Baymeadows, Jacksonville FL';
$pageDescription = "Baymeadows's favorite Indian restaurant. Dine-in, delivery, takeout & catering. Daily lunch buffet. 9551 Baymeadows Rd, Jacksonville FL 32256.";
$isInnerPage = true;
include '../includes/head.php';
?>
<?php include '../includes/header-inner.php'; ?>

<main class="flex-1">

<!-- Hero -->
<section class="relative min-h-[500px] md:min-h-[600px] flex items-center overflow-hidden">
  <img src="/assets/images/loc-jacksonville.webp" alt="5th Element Indian Restaurant Jacksonville" class="absolute inset-0 w-full h-full object-cover" />
  <div class="absolute inset-0 bg-gradient-to-r from-[#1A120B]/95 via-[#1A120B]/70 to-transparent"></div>
  <div class="relative mx-auto max-w-7xl px-5 md:px-10 py-20 text-white">
    <span class="inline-flex items-center gap-2 rounded-full bg-[#C0392B]/20 ring-1 ring-[#C0392B]/30 text-[#C9A876] text-[11px] font-semibold uppercase tracking-[0.2em] px-4 py-1.5 mb-6">
      <span class="w-1.5 h-1.5 rounded-full bg-[#C9A876] animate-pulse"></span>
      Baymeadows, Jacksonville
    </span>
    <h1 class="font-display text-4xl md:text-6xl leading-[1.05] max-w-2xl">
      Baymeadows&rsquo;s Favourite<br>
      <span class="italic text-transparent bg-clip-text" style="background-image: linear-gradient(120deg,#F3D9A7 0%,#E9C58A 50%,#F3D9A7 100%)">
        Indian Restaurant
      </span>
    </h1>
    <p class="mt-5 text-white/80 max-w-lg leading-relaxed">
      Authentic Indian cuisine crafted with love and tradition. Dine in,
      order delivery, pick up takeout, or let us cater your next event.
    </p>
    <div class="mt-8 flex flex-wrap gap-4">
      <a href="/#order" class="inline-flex items-center gap-2 rounded-full bg-[#C0392B] hover:bg-[#A93123] text-white text-sm font-semibold uppercase tracking-wider px-7 py-3.5 transition-colors">
        Order Online
      </a>
      <a href="tel:9044488265" class="inline-flex items-center gap-2 rounded-full bg-white/10 hover:bg-white/20 text-white text-sm font-semibold px-7 py-3.5 ring-1 ring-white/25 transition-colors">
        904-448-8265
      </a>
    </div>
  </div>
</section>

<!-- Services -->
<section class="bg-[#FBF7F0] py-20">
  <div class="mx-auto max-w-7xl px-5 md:px-10">
    <div class="text-center mb-14">
      <span class="text-[0.72rem] font-semibold tracking-[0.32em] uppercase text-[#C0392B]">
        How We Serve You
      </span>
      <h2 class="mt-3 font-display text-4xl md:text-5xl text-[#2A1F17]">
        Our Services
      </h2>
    </div>
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <?php
      $services = [
        [
          'title' => 'Dine In',
          'desc' => 'Enjoy a relaxed meal in our warm, inviting dining room.',
          'icon' => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 002-2V2" /><path d="M7 2v20" /><path d="M21 15V2v0a5 5 0 00-5 5v6c0 1.1.9 2 2 2h3zm0 0v7" /></svg>',
        ],
        [
          'title' => 'Delivery',
          'desc' => 'Hot, fresh Indian food delivered straight to your door.',
          'icon' => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13" rx="2" /><path d="M16 8h4l3 3v5h-7V8z" /><circle cx="5.5" cy="18.5" r="2.5" /><circle cx="18.5" cy="18.5" r="2.5" /></svg>',
        ],
        [
          'title' => 'Takeout',
          'desc' => 'Order ahead and pick up — no wait, no fuss.',
          'icon' => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z" /><path d="M3 6h18" /><path d="M16 10a4 4 0 01-8 0" /></svg>',
        ],
        [
          'title' => 'Catering',
          'desc' => 'Full-service catering for weddings, parties & corporate events.',
          'icon' => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" /><circle cx="9" cy="7" r="4" /><path d="M23 21v-2a4 4 0 00-3-3.87" /><path d="M16 3.13a4 4 0 010 7.75" /></svg>',
        ],
      ];
      foreach ($services as $s): ?>
      <div class="group rounded-2xl bg-white p-7 ring-1 ring-[#2A1F17]/6 hover:ring-[#C0392B]/20 hover:shadow-lg transition-all text-center">
        <div class="mx-auto w-14 h-14 rounded-xl bg-[#C0392B]/10 flex items-center justify-center text-[#C0392B] group-hover:bg-[#C0392B] group-hover:text-white transition-colors">
          <?= $s['icon'] ?>
        </div>
        <h3 class="mt-5 font-semibold text-[#2A1F17]"><?= htmlspecialchars($s['title']) ?></h3>
        <p class="mt-2 text-xs text-[#6B5D51] leading-relaxed"><?= $s['desc'] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Lunch Buffet -->
<section class="bg-[#1A120B] text-white py-20">
  <div class="mx-auto max-w-7xl px-5 md:px-10">
    <div class="grid md:grid-cols-2 gap-14 items-center">
      <div>
        <span class="text-[0.72rem] font-semibold tracking-[0.32em] uppercase text-[#C9A876]">
          Daily Special
        </span>
        <h2 class="mt-3 font-display text-4xl md:text-5xl leading-tight">
          All-You-Can-Eat<br>
          Lunch Buffet
        </h2>
        <p class="mt-5 text-white/70 leading-relaxed">
          Enjoy our legendary lunch buffet featuring over 30 rotating dishes &mdash; from
          biryanis and curries to fresh naans, chutneys and desserts. A new spread every day.
        </p>
        <div class="mt-8 space-y-3">
          <?php
          $buffet = [
            ['day' => 'Monday &ndash; Friday', 'time' => '11:00 AM &ndash; 2:30 PM'],
            ['day' => 'Saturday &ndash; Sunday', 'time' => '11:00 AM &ndash; 3:00 PM'],
          ];
          foreach ($buffet as $b): ?>
          <div class="flex items-center gap-4">
            <span class="w-2 h-2 rounded-full bg-[#C9A876]"></span>
            <span class="text-sm font-medium"><?= $b['day'] ?></span>
            <span class="flex-1 border-b border-white/10"></span>
            <span class="text-sm text-[#C9A876] font-semibold"><?= $b['time'] ?></span>
          </div>
          <?php endforeach; ?>
        </div>
        <a href="/#book" class="mt-8 inline-flex items-center gap-2 rounded-full bg-[#C0392B] hover:bg-[#A93123] text-white text-sm font-semibold uppercase tracking-wider px-7 py-3.5 transition-colors">
          Reserve a Table
        </a>
      </div>
      <div class="relative aspect-[4/3] rounded-xl overflow-hidden">
        <img src="/assets/images/indian-cuisine.webp" alt="Lunch buffet spread" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-gradient-to-t from-[#1A120B]/40 to-transparent"></div>
      </div>
    </div>
  </div>
</section>

<!-- Visit Us -->
<section class="bg-[#FBF7F0] py-20">
  <div class="mx-auto max-w-7xl px-5 md:px-10">
    <div class="grid md:grid-cols-2 gap-14 items-start">
      <div>
        <span class="text-[0.72rem] font-semibold tracking-[0.32em] uppercase text-[#C0392B]">
          Visit Us
        </span>
        <h2 class="mt-3 font-display text-4xl md:text-5xl text-[#2A1F17] leading-tight">
          Find Us at Baymeadows
        </h2>

        <!-- Address -->
        <div class="mt-8 space-y-5">
          <div class="flex items-start gap-4">
            <span class="mt-0.5 shrink-0 w-11 h-11 rounded-xl bg-[#C0392B]/10 flex items-center justify-center text-[#C0392B]">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M12 22s7-7.58 7-13a7 7 0 10-14 0c0 5.42 7 13 7 13z" stroke="currentColor" stroke-width="1.6"/><circle cx="12" cy="9" r="2.6" stroke="currentColor" stroke-width="1.6"/></svg>
            </span>
            <div>
              <div class="text-xs text-[#6B5D51] uppercase tracking-wider font-medium">Address</div>
              <div class="mt-1 text-sm font-semibold text-[#2A1F17]">
                9551 Baymeadows Rd, Unit 10 &amp; 11
              </div>
              <div class="text-sm text-[#6B5D51]">Jacksonville, FL 32256</div>
            </div>
          </div>

          <!-- Phone -->
          <div class="flex items-start gap-4">
            <span class="mt-0.5 shrink-0 w-11 h-11 rounded-xl bg-[#C0392B]/10 flex items-center justify-center text-[#C0392B]">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M22 16.9v3a2 2 0 01-2.2 2 19.8 19.8 0 01-8.6-3.1 19.5 19.5 0 01-6-6 19.8 19.8 0 01-3.1-8.7A2 2 0 014.1 2h3a2 2 0 012 1.7c.1.9.3 1.8.6 2.6a2 2 0 01-.5 2.1l-1.3 1.3a16 16 0 006 6l1.3-1.3a2 2 0 012.1-.5c.8.3 1.7.5 2.6.6A2 2 0 0122 16.9z" stroke="currentColor" stroke-width="1.6"/></svg>
            </span>
            <div>
              <div class="text-xs text-[#6B5D51] uppercase tracking-wider font-medium">Phone</div>
              <div class="mt-1 text-sm font-semibold text-[#2A1F17]">
                <a href="tel:9044488265" class="hover:text-[#C0392B] transition-colors">904-448-8265</a>
                /
                <a href="tel:9044488266" class="hover:text-[#C0392B] transition-colors">904-448-8266</a>
              </div>
            </div>
          </div>

          <!-- Hours -->
          <div class="flex items-start gap-4">
            <span class="mt-0.5 shrink-0 w-11 h-11 rounded-xl bg-[#C0392B]/10 flex items-center justify-center text-[#C0392B]">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.6"/><path d="M12 6v6l4 2" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg>
            </span>
            <div>
              <div class="text-xs text-[#6B5D51] uppercase tracking-wider font-medium">Hours</div>
              <div class="mt-1 space-y-1">
                <?php
                $hours = [
                  ['day' => 'Monday &ndash; Friday', 'time' => '11:00 AM &ndash; 9:30 PM'],
                  ['day' => 'Saturday', 'time' => '11:00 AM &ndash; 10:00 PM'],
                  ['day' => 'Sunday', 'time' => '11:00 AM &ndash; 9:30 PM'],
                ];
                foreach ($hours as $h): ?>
                <div class="flex items-center gap-3 text-sm">
                  <span class="text-[#2A1F17] font-medium w-36"><?= $h['day'] ?></span>
                  <span class="text-[#6B5D51]"><?= $h['time'] ?></span>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>

        <!-- CTA -->
        <div class="mt-8 flex flex-wrap gap-3">
          <a href="https://maps.google.com/?q=9551+Baymeadows+Rd+Jacksonville+FL+32256" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 rounded-full bg-[#1A120B] hover:bg-black text-white text-xs font-semibold uppercase tracking-wider px-6 py-3 transition-colors">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none"><path d="M12 22s7-7.58 7-13a7 7 0 10-14 0c0 5.42 7 13 7 13z" stroke="currentColor" stroke-width="1.6"/><circle cx="12" cy="9" r="2.6" stroke="currentColor" stroke-width="1.6"/></svg>
            Get Directions
          </a>
          <a href="../catering/jacksonville.php" class="inline-flex items-center gap-2 rounded-full border border-[#2A1F17]/20 text-[#2A1F17] text-xs font-semibold uppercase tracking-wider px-6 py-3 hover:border-[#C0392B] hover:text-[#C0392B] transition-colors">
            View Catering Menu
          </a>
        </div>
      </div>

      <!-- Image grid -->
      <div class="space-y-4">
        <div class="relative aspect-[4/3] rounded-xl overflow-hidden ring-1 ring-[#2A1F17]/10">
          <img src="/assets/images/event-corporate.webp" alt="5th Element Restaurant Baymeadows" class="w-full h-full object-cover" />
        </div>
        <div class="grid grid-cols-2 gap-4">
          <div class="relative aspect-square rounded-xl overflow-hidden ring-1 ring-[#2A1F17]/10">
            <img src="/assets/images/ig1.webp" alt="Restaurant interior" class="w-full h-full object-cover" />
          </div>
          <div class="relative aspect-square rounded-xl overflow-hidden ring-1 ring-[#2A1F17]/10">
            <img src="/assets/images/ig3.webp" alt="Indian dishes" class="w-full h-full object-cover" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</main>

<?php include '../includes/footer.php'; ?>
<?php include '../includes/foot.php'; ?>

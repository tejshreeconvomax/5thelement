<footer id="contact" class="bg-cream-2 text-ink">
  <div class="mx-auto max-w-7xl px-5 md:px-10 py-16">
    <div class="grid md:grid-cols-12 gap-10">

      <!-- Column 1: logo + links -->
      <div class="md:col-span-4">
        <a href="<?php echo isset($isInnerPage) && $isInnerPage ? '../index.php' : 'index.php'; ?>">
          <img src="<?php echo isset($isInnerPage) && $isInnerPage ? '/assets/images/logo.webp' : '/assets/images/logo.webp'; ?>" alt="5th Element Indian Restaurant" width="160" height="86">
        </a>
        <ul class="mt-8 space-y-3 text-sm">
          <li><a href="<?php echo isset($isInnerPage) && $isInnerPage ? '../index.php#about' : '#about'; ?>" class="text-ink/80 hover:text-primary transition-colors">About Us</a></li>
          <li><a href="<?php echo isset($isInnerPage) && $isInnerPage ? '../catering/' : 'catering/'; ?>" class="text-ink/80 hover:text-primary transition-colors">Catering Services</a></li>
          <li><a href="#" class="text-ink/80 hover:text-primary transition-colors">Blogs</a></li>
          <li><a href="#" class="text-ink/80 hover:text-primary transition-colors">Terms &amp; Conditions</a></li>
          <li><a href="#" class="text-ink/80 hover:text-primary transition-colors">Privacy Policy</a></li>
          <li><a href="#" class="text-ink/80 hover:text-primary transition-colors">Disclaimer</a></li>
        </ul>
      </div>

      <!-- Column 2: mobile app -->
      <div class="md:col-span-4 flex flex-col items-center text-center">
        <img src="<?php echo isset($isInnerPage) && $isInnerPage ? '/assets/images/delivery-partner.webp' : '/assets/images/delivery-partner.webp'; ?>" alt="Delivery Partner" width="160" height="86">
        <h3 class="mt-5 font-display text-2xl md:text-3xl">
          Download Our Mobile App
        </h3>
        <p class="mt-2 text-sm text-muted">
          Reserve a table or order takeout via our app.
        </p>
        <div class="mt-5 flex flex-col sm:flex-row gap-3">
          <!-- Google Play Badge -->
          <a href="#" class="group inline-flex items-center gap-3 rounded-xl bg-dark text-white px-4 py-2.5 hover:bg-black transition-colors">
            <span class="shrink-0">
              <svg width="20" height="22" viewBox="0 0 20 22" aria-hidden="true">
                <path d="M1 1l12 10L1 21z" fill="#34A853"/>
                <path d="M1 1l12 10-4 4L1 1z" fill="#4285F4"/>
                <path d="M1 21l12-10-4-4L1 21z" fill="#FBBC04"/>
                <path d="M13 11l6-4-6-4v8z" fill="#EA4335"/>
              </svg>
            </span>
            <span class="leading-tight text-left">
              <span class="block text-[9px] uppercase tracking-wider opacity-80">Get it on</span>
              <span class="block text-sm font-semibold">Google Play</span>
            </span>
          </a>
          <!-- App Store Badge -->
          <a href="#" class="group inline-flex items-center gap-3 rounded-xl bg-dark text-white px-4 py-2.5 hover:bg-black transition-colors">
            <span class="shrink-0">
              <svg width="20" height="22" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path d="M16.5 1.5c0 1.2-.5 2.3-1.3 3.1-.9.9-2.3 1.6-3.4 1.5-.1-1.1.5-2.3 1.3-3.1.9-.9 2.4-1.5 3.4-1.5zm3.9 17.4c-.6 1.3-.9 1.9-1.6 3-1 1.7-2.4 3.8-4.1 3.8-1.5 0-1.9-1-4-1-2 0-2.4 1-4 1-1.7 0-3-1.9-4-3.6-2.8-4.6-3.1-10-1.4-12.9 1.2-2 3.1-3.2 4.9-3.2 1.8 0 3 1 4.5 1 1.5 0 2.4-1 4.5-1 1.6 0 3.3.9 4.5 2.4-3.9 2.1-3.3 7.7.7 10.5z"/>
              </svg>
            </span>
            <span class="leading-tight text-left">
              <span class="block text-[9px] uppercase tracking-wider opacity-80">Download on the</span>
              <span class="block text-sm font-semibold">App Store</span>
            </span>
          </a>
        </div>
      </div>

      <!-- Column 3: locations + contact -->
      <div class="md:col-span-4">
        <div class="text-xl font-semibold mb-5">Our Locations</div>
        <ul class="space-y-3 text-sm text-ink/80">
          <li><a href="#" class="hover:text-primary transition-colors">Baymeadows, Jacksonville</a></li>
          <li><a href="#" class="hover:text-primary transition-colors">Towncenter, Jacksonville</a></li>
          <li><a href="#" class="hover:text-primary transition-colors">Daytona</a></li>
          <li><a href="#" class="hover:text-primary transition-colors">Palm Coast</a></li>
        </ul>

        <div class="mt-8 text-sm text-ink/80 space-y-2">
          <div class="flex items-center gap-2">
            <span class="text-primary">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M22 16.9v3a2 2 0 01-2.2 2 19.8 19.8 0 01-8.6-3.1 19.5 19.5 0 01-6-6 19.8 19.8 0 01-3.1-8.7A2 2 0 014.1 2h3a2 2 0 012 1.7c.1.9.3 1.8.6 2.6a2 2 0 01-.5 2.1l-1.3 1.3a16 16 0 006 6l1.3-1.3a2 2 0 012.1-.5c.8.3 1.7.5 2.6.6A2 2 0 0122 16.9z" stroke="currentColor" stroke-width="1.6"/>
              </svg>
            </span>
            (904) 555-0100
          </div>
          <div class="flex items-center gap-2">
            <span class="text-primary">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <rect x="3" y="5" width="18" height="14" rx="2" stroke="currentColor" stroke-width="1.6"/>
                <path d="M3 7l9 7 9-7" stroke="currentColor" stroke-width="1.6"/>
              </svg>
            </span>
            info@my5thelement.com
          </div>
        </div>
      </div>
    </div>

    <!-- Newsletter Strip -->
    <div class="mt-14 rounded-xl bg-primary text-white px-6 py-6 flex flex-col md:flex-row items-center justify-between gap-5">
      <div class="flex items-center gap-4">
        <div class="hidden md:block relative w-14 h-14 rounded-full overflow-hidden shrink-0">
          <img src="<?php echo isset($isInnerPage) && $isInnerPage ? '/assets/images/spices.webp' : '/assets/images/spices.webp'; ?>" alt="" class="w-full h-full object-cover">
        </div>
        <div>
          <div class="font-display text-lg">Stay in the Loop</div>
          <div class="text-xs text-white/80">
            Get updates on special offers, new menu items and events.
          </div>
        </div>
      </div>
      <form class="flex w-full md:w-auto max-w-md gap-2">
        <input type="email" placeholder="Enter your email address" class="flex-1 rounded-md bg-white text-ink text-sm px-4 py-3 focus:outline-none">
        <button type="submit" class="rounded-md bg-dark hover:bg-black text-white text-xs font-semibold uppercase tracking-wider px-5 py-3 transition-colors">
          Subscribe
        </button>
      </form>
    </div>

    <!-- Bottom row: copyright + payments -->
    <div class="mt-8 pt-6 border-t border-ink/10 flex flex-col md:flex-row justify-between items-center gap-5 text-xs text-muted">
      <div>5TH ELEMENT INDIAN RESTAURANT LLC &copy; <?php echo date('Y'); ?></div>
      <div class="flex items-center gap-2">
        <span class="inline-flex items-center justify-center text-[10px] font-bold tracking-wide rounded px-2 py-1 min-w-[42px] bg-[#1A1F36] text-white">Mastercard</span>
        <span class="inline-flex items-center justify-center text-[10px] font-bold tracking-wide rounded px-2 py-1 min-w-[42px] bg-white text-[#1A1F71] border border-ink/15">VISA</span>
        <span class="inline-flex items-center justify-center text-[10px] font-bold tracking-wide rounded px-2 py-1 min-w-[42px] bg-[#1A1F36] text-white">Maestro</span>
        <span class="inline-flex items-center justify-center text-[10px] font-bold tracking-wide rounded px-2 py-1 min-w-[42px] bg-[#5F259F] text-white">DPay</span>
        <span class="inline-flex items-center justify-center text-[10px] font-bold tracking-wide rounded px-2 py-1 min-w-[42px] bg-black text-white">Apple Pay</span>
        <span class="inline-flex items-center justify-center text-[10px] font-bold tracking-wide rounded px-2 py-1 min-w-[42px] bg-white text-ink border border-ink/15">GPay</span>
      </div>
    </div>
  </div>
</footer>

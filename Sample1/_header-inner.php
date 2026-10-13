<header class="relative z-30 bg-cream">
  <div class="mx-auto flex max-w-7xl items-center justify-between px-5 md:px-10 py-4">
    <!-- Logo -->
    <a href="../index.php">
      <img src="/assets/images/logo.webp" alt="5th Element Indian Restaurant" width="160" height="86">
    </a>

    <!-- Desktop Nav -->
    <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-ink">
      <a href="../index.php#home" class="hover:text-primary transition-colors">Home</a>
      <a href="../index.php#menu" class="hover:text-primary transition-colors">Menu</a>
      <a href="../index.php#locations" class="hover:text-primary transition-colors">Locations</a>
      <a href="../catering/" class="hover:text-primary transition-colors">Catering</a>
      <a href="../index.php#about" class="hover:text-primary transition-colors">About</a>
      <a href="../index.php#contact" class="hover:text-primary transition-colors">Contact</a>
    </nav>

    <!-- CTA Buttons + Mobile Hamburger -->
    <div class="flex items-center gap-3">
      <a href="../index.php#book" class="hidden sm:inline-flex items-center rounded-full border border-ink/25 text-ink text-xs font-semibold uppercase tracking-wider px-4 py-2 hover:border-ink transition-colors">
        Book a Table
      </a>
      <a href="../index.php#order" class="inline-flex items-center rounded-full bg-primary hover:bg-primary-hover text-white text-xs font-semibold uppercase tracking-wider px-4 py-2 transition-colors">
        Order Online
      </a>
      <!-- Mobile hamburger -->
      <button id="mobile-menu-btn-inner" type="button" class="md:hidden inline-flex items-center justify-center w-10 h-10 rounded-lg text-ink hover:bg-cream-2 transition-colors" aria-label="Open menu">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
          <line x1="3" y1="6" x2="21" y2="6"/>
          <line x1="3" y1="12" x2="21" y2="12"/>
          <line x1="3" y1="18" x2="21" y2="18"/>
        </svg>
      </button>
    </div>
  </div>

  <!-- Mobile Menu Overlay -->
  <div id="mobile-menu-inner" class="hidden fixed inset-0 z-50 bg-cream">
    <div class="flex items-center justify-between px-5 md:px-10 py-4">
      <a href="../index.php">
        <img src="/assets/images/logo.webp" alt="5th Element Indian Restaurant" width="160" height="86">
      </a>
      <button id="mobile-menu-close-inner" type="button" class="inline-flex items-center justify-center w-10 h-10 rounded-lg text-ink hover:bg-cream-2 transition-colors" aria-label="Close menu">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
          <line x1="6" y1="6" x2="18" y2="18"/>
          <line x1="18" y1="6" x2="6" y2="18"/>
        </svg>
      </button>
    </div>
    <nav class="flex flex-col items-center gap-6 mt-12 text-lg font-medium text-ink">
      <a href="../index.php#home" class="hover:text-primary transition-colors" onclick="closeMobileMenuInner()">Home</a>
      <a href="../index.php#menu" class="hover:text-primary transition-colors" onclick="closeMobileMenuInner()">Menu</a>
      <a href="../index.php#locations" class="hover:text-primary transition-colors" onclick="closeMobileMenuInner()">Locations</a>
      <a href="../catering/" class="hover:text-primary transition-colors" onclick="closeMobileMenuInner()">Catering</a>
      <a href="../index.php#about" class="hover:text-primary transition-colors" onclick="closeMobileMenuInner()">About</a>
      <a href="../index.php#contact" class="hover:text-primary transition-colors" onclick="closeMobileMenuInner()">Contact</a>
      <div class="flex flex-col gap-3 mt-4">
        <a href="../index.php#book" class="inline-flex items-center justify-center rounded-full border border-ink/25 text-ink text-xs font-semibold uppercase tracking-wider px-6 py-3 hover:border-ink transition-colors">
          Book a Table
        </a>
        <a href="../index.php#order" class="inline-flex items-center justify-center rounded-full bg-primary hover:bg-primary-hover text-white text-xs font-semibold uppercase tracking-wider px-6 py-3 transition-colors">
          Order Online
        </a>
      </div>
    </nav>
  </div>
</header>

<script>
function closeMobileMenuInner() {
  document.getElementById('mobile-menu-inner').classList.add('hidden');
}
document.getElementById('mobile-menu-btn-inner').addEventListener('click', function() {
  document.getElementById('mobile-menu-inner').classList.remove('hidden');
});
document.getElementById('mobile-menu-close-inner').addEventListener('click', closeMobileMenuInner);
</script>

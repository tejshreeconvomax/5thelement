(() => {
  const reduced = matchMedia('(prefers-reduced-motion: reduce)').matches;
  const menu = document.querySelector('.op-menu');
  const nav = document.querySelector('#op-nav');
  if (menu && nav) {
    menu.addEventListener('click', () => { const open = menu.getAttribute('aria-expanded') !== 'true'; menu.setAttribute('aria-expanded', String(open)); nav.classList.toggle('is-open', open); });
    nav.querySelectorAll('a').forEach(link => link.addEventListener('click', () => { menu.setAttribute('aria-expanded', 'false'); nav.classList.remove('is-open'); }));
  }
  document.querySelectorAll('.op-magnet').forEach(button => {
    button.addEventListener('pointermove', event => { if (!matchMedia('(hover:hover)').matches || reduced) return; const rect = button.getBoundingClientRect(); button.style.transform = `translate(${(event.clientX - rect.left - rect.width / 2) * .1}px, ${(event.clientY - rect.top - rect.height / 2) * .12}px)`; });
    button.addEventListener('pointerleave', () => { button.style.transform = ''; });
  });
  const hero = document.querySelector('.op-hero');
  const plate = document.querySelector('.op-hero-plate');
  const peek = document.querySelector('.op-hero-peek');
  if (hero && plate && !reduced) hero.addEventListener('pointermove', event => { if (!matchMedia('(hover:hover)').matches) return; const rect = hero.getBoundingClientRect(); const x = (event.clientX - rect.left) / rect.width - .5; const y = (event.clientY - rect.top) / rect.height - .5; plate.style.translate = `${x * 18}px ${y * 12}px`; if (peek) peek.style.translate = `${x * -14}px ${y * -8}px`; });
  hero?.addEventListener('pointerleave', () => { if (plate) plate.style.translate = ''; if (peek) peek.style.translate = ''; });
  if ('IntersectionObserver' in window && !reduced) { const observer = new IntersectionObserver(entries => entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('visible'); observer.unobserve(entry.target); } }), { threshold: .1 }); document.querySelectorAll('.op-reveal').forEach(element => observer.observe(element)); } else document.querySelectorAll('.op-reveal').forEach(element => element.classList.add('visible'));
  document.querySelectorAll('.op-cinema-photo video').forEach(video => { const fallback = video.nextElementSibling; video.addEventListener('canplay', () => { if (fallback) fallback.hidden = true; }, { once: true }); video.addEventListener('error', () => { video.hidden = true; if (fallback) fallback.hidden = false; }, { once: true }); });
  document.querySelector('#op-newsletter')?.addEventListener('submit', event => { event.preventDefault(); document.querySelector('#op-newsletter-status').textContent = 'You’re on the list. We’ll keep it delicious.'; event.currentTarget.reset(); });
})();

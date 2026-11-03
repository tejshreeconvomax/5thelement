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
  if ('IntersectionObserver' in window && !reduced) {
    const observer = new IntersectionObserver(entries => entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    }), { threshold: .1 });
    document.querySelectorAll('.op-reveal').forEach(element => observer.observe(element));
    // A direct hash link can land between observer thresholds. Never leave content hidden.
    window.setTimeout(() => document.querySelectorAll('.op-reveal:not(.visible)').forEach(element => element.classList.add('visible')), 900);
  } else document.querySelectorAll('.op-reveal').forEach(element => element.classList.add('visible'));
  document.querySelectorAll('.op-cinema-photo video').forEach(video => { const fallback = video.nextElementSibling; video.addEventListener('canplay', () => { if (fallback) fallback.hidden = true; }, { once: true }); video.addEventListener('error', () => { video.hidden = true; if (fallback) fallback.hidden = false; }, { once: true }); });
  document.querySelectorAll('[data-location-select]').forEach(option => option.addEventListener('click', event => {
    event.preventDefault();
    const name = option.dataset.location;
    const region = option.dataset.region;
    const image = option.dataset.image;
    document.querySelectorAll('[data-location-select]').forEach(item => { const selected = item.dataset.location === name; item.classList.toggle('is-selected', selected); if (selected) item.setAttribute('aria-current', 'true'); else item.removeAttribute('aria-current'); });
    const imageTarget = document.querySelector('[data-location-image]');
    if (imageTarget && image) { imageTarget.style.opacity = '0'; window.setTimeout(() => { imageTarget.src = image; imageTarget.alt = `5th Element ${name} restaurant`; imageTarget.style.opacity = ''; }, 150); }
    const regionTarget = document.querySelector('[data-location-region]');
    const nameTarget = document.querySelector('[data-location-name]');
    const messageTarget = document.querySelector('[data-location-message]');
    const detailTarget = document.querySelector('[data-location-detail]');
    const continueTarget = document.querySelector('[data-location-continue]');
    if (regionTarget) regionTarget.textContent = region;
    if (nameTarget) nameTarget.textContent = name;
    if (detailTarget) detailTarget.textContent = option.dataset.detail || region;
    if (messageTarget) messageTarget.textContent = `${name} has its own menu, prices, and ordering options. Continue to order from this restaurant.`;
    if (continueTarget) continueTarget.innerHTML = `View ${name} menu &amp; order <b>↗</b>`;
  }));
  document.querySelectorAll('[data-slider]').forEach(slider => {
    const viewport = slider.querySelector('.op-slider-viewport');
    const track = slider.querySelector('.op-slider-track');
    const slides = [...slider.querySelectorAll('.op-slider-slide')];
    const previous = slider.querySelector('[data-slider-prev]');
    const next = slider.querySelector('[data-slider-next]');
    const current = slider.querySelector('[data-slider-current]');
    if (!viewport || !track || !slides.length || !previous || !next) return;
    let index = 0;
    const update = () => {
      const gap = Number.parseFloat(getComputedStyle(track).gap) || 0;
      const step = slides[0].getBoundingClientRect().width + gap;
      const visible = Math.max(1, Math.floor((viewport.clientWidth + gap) / step));
      const last = Math.max(0, slides.length - visible);
      index = Math.min(Math.max(index, 0), last);
      track.style.transform = `translateX(${-index * step}px)`;
      previous.disabled = index === 0;
      next.disabled = index === last;
      if (current) current.textContent = String(index + 1).padStart(2, '0');
    };
    previous.addEventListener('click', () => { index -= 1; update(); });
    next.addEventListener('click', () => { index += 1; update(); });
    viewport.addEventListener('keydown', event => { if (event.key === 'ArrowLeft') { event.preventDefault(); index -= 1; update(); } if (event.key === 'ArrowRight') { event.preventDefault(); index += 1; update(); } });
    if ('ResizeObserver' in window) new ResizeObserver(update).observe(viewport);
    update();
  });
  document.querySelector('#op-newsletter')?.addEventListener('submit', event => { event.preventDefault(); document.querySelector('#op-newsletter-status').textContent = 'You’re on the list. We’ll keep it delicious.'; event.currentTarget.reset(); });
})();

(() => {
  const carousel = document.querySelector('[data-gallery-carousel]');
  if (!carousel) return;

  const stage = carousel.querySelector('.sc-gallery-strip');
  const items = [...carousel.querySelectorAll('[data-gallery-item]')];
  const previous = carousel.querySelector('[data-gallery-prev]');
  const next = carousel.querySelector('[data-gallery-next]');
  const current = carousel.querySelector('[data-gallery-current]');
  if (!stage || items.length < 2 || !previous || !next) return;

  let active = Math.floor(items.length / 2);

  const update = () => {
    items.forEach((item, index) => {
      let position = index - active;
      const midpoint = Math.floor(items.length / 2);
      if (position > midpoint) position -= items.length;
      if (position < -midpoint) position += items.length;
      item.dataset.position = String(position);
      if (position === 0) item.setAttribute('aria-current', 'true');
      else item.removeAttribute('aria-current');
    });
    if (current) current.textContent = String(active + 1).padStart(2, '0');
  };

  const move = direction => {
    active = (active + direction + items.length) % items.length;
    update();
  };

  previous.addEventListener('click', () => move(-1));
  next.addEventListener('click', () => move(1));
  stage.addEventListener('keydown', event => {
    if (event.key === 'ArrowLeft') { event.preventDefault(); move(-1); }
    if (event.key === 'ArrowRight') { event.preventDefault(); move(1); }
  });
  items.forEach((item, index) => item.addEventListener('click', () => { active = index; update(); }));
  update();
})();

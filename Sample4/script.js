document.addEventListener('DOMContentLoaded', () => {
  const button = document.querySelector('.menu-toggle');
  const nav = document.querySelector('.site-nav');
  button?.addEventListener('click', () => {
    const isOpen = nav.classList.toggle('open');
    button.setAttribute('aria-expanded', String(isOpen));
  });
  nav?.querySelectorAll('a').forEach(link => link.addEventListener('click', () => {
    nav.classList.remove('open');
    button?.setAttribute('aria-expanded', 'false');
  }));

  document.querySelectorAll('[data-ways-slider]').forEach(slider => {
    const track = slider.querySelector('.ways-cards');
    const previous = slider.querySelector('.ways-arrow-prev');
    const next = slider.querySelector('.ways-arrow-next');
    if (!track || !previous || !next) return;

    const step = () => Math.max(track.clientWidth * .82, 220);
    const updateControls = () => {
      const end = Math.max(0, track.scrollWidth - track.clientWidth - 2);
      previous.disabled = track.scrollLeft <= 2;
      next.disabled = track.scrollLeft >= end;
    };
    previous.addEventListener('click', () => track.scrollBy({ left: -step(), behavior: 'smooth' }));
    next.addEventListener('click', () => track.scrollBy({ left: step(), behavior: 'smooth' }));
    track.addEventListener('scroll', updateControls, { passive: true });
    window.addEventListener('resize', updateControls);

    let startX = 0;
    let startScroll = 0;
    let dragging = false;
    track.addEventListener('pointerdown', event => {
      if (event.pointerType === 'touch') return;
      dragging = true;
      startX = event.clientX;
      startScroll = track.scrollLeft;
      track.classList.add('is-dragging');
      track.setPointerCapture(event.pointerId);
    });
    track.addEventListener('pointermove', event => {
      if (!dragging) return;
      track.scrollLeft = startScroll - (event.clientX - startX);
    });
    const finishDrag = () => { dragging = false; track.classList.remove('is-dragging'); };
    track.addEventListener('pointerup', finishDrag);
    track.addEventListener('pointercancel', finishDrag);
    updateControls();
  });
});

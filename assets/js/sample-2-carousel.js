(() => {
 const tracks = [...document.querySelectorAll('[data-auto-scroll]')];
 if (!tracks.length) return;

 const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
 const mobileViewport = window.matchMedia('(max-width: 767px)');
 const states = new Map();

 const initializeTrack = track => {
  if (track.dataset.carouselReady === 'true') return states.get(track);

  const originals = [...track.children];
  if (originals.length < 2) return null;

  let clones = [];
  if (!reducedMotion.matches) {
   clones = originals.map(item => {
    const clone = item.cloneNode(true);
    clone.dataset.carouselClone = 'true';
    clone.setAttribute('aria-hidden', 'true');
    clone.inert = true;
    track.append(clone);
    return clone;
   });
  }

  const state = {
   track,
   originals,
   clones,
   loopWidth: 0,
   step: 0,
   interacting: false,
   pauseUntil: Date.now() + 900,
  lastTime: Date.now(),
   normalizeTimer: 0,
  };

  state.measure = () => {
   state.step = originals[1]
    ? originals[1].offsetLeft - originals[0].offsetLeft
    : Math.max(track.clientWidth * .82, originals[0].getBoundingClientRect().width);
   state.loopWidth = clones.length
    ? clones[0].offsetLeft - originals[0].offsetLeft
    : 0;
  };

  state.normalize = () => {
   if (!state.loopWidth) return;
   if (track.scrollLeft >= state.loopWidth) track.scrollLeft -= state.loopWidth;
   if (track.scrollLeft < 0) track.scrollLeft += state.loopWidth;
  };

  state.pauseFor = duration => {
   state.pauseUntil = Date.now() + duration;
  };

  const beginInteraction = () => {
   state.interacting = true;
   track.classList.add('is-user-scrolling');
  };
  const endInteraction = () => {
   state.interacting = false;
   state.pauseFor(1800);
   window.clearTimeout(state.normalizeTimer);
   state.normalizeTimer = window.setTimeout(() => {
    state.normalize();
    track.classList.remove('is-user-scrolling');
   }, 220);
  };

  track.addEventListener('mouseenter', beginInteraction);
  track.addEventListener('mouseleave', endInteraction);
  track.addEventListener('focusin', beginInteraction);
  track.addEventListener('focusout', event => {
   if (!track.contains(event.relatedTarget)) endInteraction();
  });
  track.addEventListener('pointerdown', beginInteraction, { passive: true });
  track.addEventListener('pointerup', endInteraction, { passive: true });
  track.addEventListener('pointercancel', endInteraction, { passive: true });

  track.dataset.carouselReady = 'true';
  state.measure();
  states.set(track, state);
  return state;
 };

 tracks.forEach(initializeTrack);

 document.querySelectorAll('[data-slide]').forEach(button => {
  const track = document.getElementById(button.dataset.slide);
  if (!track) return;
  button.setAttribute('aria-controls', track.id);
  button.addEventListener('click', () => {
   const state = states.get(track) || initializeTrack(track);
   if (!state) return;

   state.measure();
   const direction = Number(button.dataset.direction) < 0 ? -1 : 1;
   state.pauseFor(2400);
   if (direction < 0 && state.loopWidth && track.scrollLeft < state.step * .55) {
    track.scrollLeft += state.loopWidth;
   }
   track.scrollBy({
    left: direction * state.step,
    behavior: reducedMotion.matches ? 'auto' : 'smooth',
   });
   window.clearTimeout(state.normalizeTimer);
   state.normalizeTimer = window.setTimeout(state.normalize, 750);
  });
 });

 let resizeTimer = 0;
 window.addEventListener('resize', () => {
  window.clearTimeout(resizeTimer);
  resizeTimer = window.setTimeout(() => states.forEach(state => state.measure()), 120);
 }, { passive: true });

 if (reducedMotion.matches) return;

 const tick = () => {
  const time = Date.now();
  states.forEach(state => {
   const elapsed = Math.min(48, time - state.lastTime);
   if (
    !state.interacting &&
    !(mobileViewport.matches && state.track.matches('.blog-track, .review-track')) &&
    time >= state.pauseUntil &&
    document.visibilityState === 'visible' &&
    state.track.scrollWidth > state.track.clientWidth
   ) {
    state.track.scrollLeft += elapsed * .028;
    state.normalize();
   }
   state.lastTime = time;
  });
 };
 window.setInterval(tick, 32);
})();

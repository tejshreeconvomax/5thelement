(() => {
  const section = document.querySelector('[data-google-reviews]');
  if (!section) return;

  const track = section.querySelector('.review-track');
  const controls = section.querySelectorAll('[data-slide="reviews-track"]');
  const disclosure = section.querySelector('.review-disclosure');
  if (!track) return;

  const status = message => {
    const notice = document.createElement('p');
    notice.className = 'review-status';
    notice.setAttribute('role', 'status');
    notice.textContent = message;
    track.replaceChildren(notice);
    controls.forEach(button => { button.disabled = true; });
    if (disclosure) disclosure.hidden = true;
  };

  const addText = (parent, tag, value, className = '') => {
    const node = document.createElement(tag);
    if (className) node.className = className;
    node.textContent = value;
    parent.append(node);
    return node;
  };

  const card = review => {
    const figure = document.createElement('figure');
    const topline = addText(figure, 'div', '', 'review-topline');
    const rating = Math.max(1, Math.min(5, Number(review.rating) || 1));
    const stars = addText(topline, 'span', '★'.repeat(rating) + '☆'.repeat(5 - rating), 'stars');
    stars.setAttribute('aria-label', `${rating} out of 5 stars`);
    const seal = addText(topline, 'span', '✦', 'review-seal');
    seal.setAttribute('aria-hidden', 'true');

    addText(figure, 'blockquote', `“${review.text}”`);
    const caption = addText(figure, 'figcaption', '');
    const author = addText(caption, 'span', '', 'review-author');
    if (review.photo) {
      const image = document.createElement('img');
      image.src = review.photo;
      image.alt = '';
      image.loading = 'lazy';
      image.decoding = 'async';
      image.referrerPolicy = 'no-referrer';
      author.append(image);
    } else {
      const avatar = addText(author, 'span', (review.name || 'G').trim().charAt(0).toUpperCase(), 'review-avatar');
      avatar.setAttribute('aria-hidden', 'true');
    }
    addText(author, 'strong', review.name || 'Google reviewer');
    if (review.date) {
      const date = new Date(review.date);
      if (!Number.isNaN(date.getTime())) {
        const time = addText(caption, 'time', new Intl.DateTimeFormat('en-US', { year: 'numeric', month: 'short', day: 'numeric' }).format(date));
        time.dateTime = review.date;
      }
    }
    addText(caption, 'span', review.location);
    if (review.mapsUrl) {
      const link = addText(caption, 'a', 'View on Google Maps ↗', 'review-source');
      link.href = review.mapsUrl;
      link.target = '_blank';
      link.rel = 'noopener noreferrer';
    }
    return figure;
  };

  let started = false;
  const load = async () => {
    if (started) return;
    started = true;
    const controller = new AbortController();
    const timer = window.setTimeout(() => controller.abort(), 6500);
    try {
      const scope = encodeURIComponent(section.dataset.googleReviews || 'all');
      const response = await fetch(`/api/google-reviews.php?location=${scope}`, {
        signal: controller.signal,
        credentials: 'same-origin',
        cache: 'no-store',
      });
      if (!response.ok) throw new Error('Reviews unavailable');
      const payload = await response.json();
      if (!Array.isArray(payload.reviews) || payload.reviews.length === 0) {
        status('Google reviews are temporarily unavailable.');
        return;
      }
      track.replaceChildren(...payload.reviews.map(card));
      controls.forEach(button => { button.disabled = payload.reviews.length < 2; });
      if (disclosure) {
        disclosure.hidden = false;
        disclosure.querySelector('[data-review-static]').hidden = payload.status !== 'static';
        disclosure.querySelector('[data-review-live]').hidden = payload.status === 'static';
      }
      document.dispatchEvent(new Event('google-reviews:loaded'));
    } catch (_) {
      status('Google reviews are temporarily unavailable.');
    } finally {
      window.clearTimeout(timer);
    }
  };

  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver(entries => {
      if (!entries.some(entry => entry.isIntersecting)) return;
      observer.disconnect();
      load();
    }, { rootMargin: '400px 0px' });
    observer.observe(section);
  } else {
    load();
  }
})();

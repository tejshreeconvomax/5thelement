(() => {
  const card = document.querySelector('[data-jl-testimonial]');
  const previous = document.querySelector('[data-jl-prev]');
  const next = document.querySelector('[data-jl-next]');
  if (!card || !previous || !next) return;

  const reviews = [
    {
      quote: '“Amazing food, wonderful service and a beautiful ambiance.<br>Our go-to spot in Jacksonville!”',
      byline: 'Priya S. · Baymeadows, Jacksonville'
    },
    {
      quote: '“The buffet has something for everyone, and the team made us feel right at home.”',
      byline: 'Rohan M. · Jacksonville, Florida'
    },
    {
      quote: '“Warm service, beautiful flavours, and the biryani is always worth the visit.”',
      byline: 'Anita K. · Baymeadows, Jacksonville'
    }
  ];
  let index = 0;
  const update = () => {
    const quote = card.querySelector('blockquote');
    const byline = card.querySelector('figcaption');
    card.classList.add('is-changing');
    window.setTimeout(() => {
      quote.innerHTML = reviews[index].quote;
      byline.textContent = reviews[index].byline;
      card.classList.remove('is-changing');
    }, 130);
  };
  previous.addEventListener('click', () => { index = (index + reviews.length - 1) % reviews.length; update(); });
  next.addEventListener('click', () => { index = (index + 1) % reviews.length; update(); });
})();

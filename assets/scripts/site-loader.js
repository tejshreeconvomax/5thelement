(() => {
  const loader = document.querySelector('.site-loader');
  if (!loader) return;

  const dismiss = () => {
    if (loader.classList.contains('is-leaving')) return;
    loader.classList.add('is-leaving');
    window.setTimeout(() => loader.remove(), 360);
  };

  if (document.readyState === 'complete') dismiss();
  else window.addEventListener('load', dismiss, { once: true });

  window.setTimeout(dismiss, 4000);
})();

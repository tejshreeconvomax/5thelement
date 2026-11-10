<footer class="site-footer" id="contact">
  <div><a class="wordmark" href="<?= h(sample2_url()) ?>"><img class="brand-logo" src="<?= h(asset_url('images/5th-element-logo-transparent.png')) ?>" alt="5th Element Indian Restaurant" width="160" height="86"></a>
    <p>Rooted in tradition.<br><em>Remembered around the table.</em></p>
  </div>
  <div>
    <p class="eyebrow">EXPLORE</p><a href="<?= h(sample2_url()) ?>">Home</a><a href="<?= h(sample2_url('catering.php')) ?>">Catering services</a><a href="<?= h(sample2_url('jacksonville.php')) ?>">Jacksonville restaurant</a><a href="<?= h(sample2_url('catering/jacksonville/')) ?>">Jacksonville catering</a><a href="<?= h(sample2_url('about.php')) ?>">About us</a><a href="<?= h(sample2_url('contact.php')) ?>">Contact us</a>
  </div>
  <div>
    <p class="eyebrow">A PERSONAL WELCOME</p><a href="tel:9044488265">Baymeadows · (904) 448-8265</a><a href="tel:5102995378">Catering · (510) 299-5378</a><a href="mailto:caterings@my5thelement.com">caterings@my5thelement.com</a><a href="<?= h(sample2_url('catering.php')) ?>">Baymeadows · Towncenter · Daytona · Palm Coast</a>
  </div>
  <div class="footer-base"><span>© <?= date('Y') ?> 5th Element Indian Restaurant</span><span>CRAFTED WITH INDIAN HOSPITALITY</span></div>
  <div class="footer-gold-border" aria-hidden="true"></div>
</footer>
<div class="app-download-widget" data-app-download-widget>
  <aside class="app-download-popup" id="app-download-popup" data-app-download-popup role="dialog" aria-modal="false" aria-labelledby="app-download-message" aria-hidden="true" hidden>
    <button class="app-download-popup__close" type="button" data-app-download-close aria-label="Close app offer">×</button>
    <span class="app-download-popup__eyebrow" aria-hidden="true">5TH ELEMENT</span>
    <p id="app-download-message">Download App for Exclusive Offers!</p>
  </aside>
  <button class="app-download-trigger" type="button" data-app-download-open aria-haspopup="dialog" aria-controls="app-download-popup" aria-expanded="false">
    <img class="app-download-trigger__play-logo" src="/assets/images/google-play-logo.svg" alt="" aria-hidden="true">
    <span class="sr-only">Download App</span>
  </button>
</div>
<script>
  (() => {
    const widget = document.querySelector('[data-app-download-widget]');
    if (!widget) return;

    const trigger = widget.querySelector('[data-app-download-open]');
    const popup = widget.querySelector('[data-app-download-popup]');
    const closeButton = widget.querySelector('[data-app-download-close]');
    const sessionKey = '5th-element-app-download-offer-shown';
    let closeTimer;

    const openPopup = () => {
      window.clearTimeout(closeTimer);
      popup.hidden = false;
      popup.setAttribute('aria-hidden', 'false');
      trigger.setAttribute('aria-expanded', 'true');
      window.requestAnimationFrame(() => popup.classList.add('is-visible'));
    };

    const closePopup = () => {
      popup.classList.remove('is-visible');
      popup.setAttribute('aria-hidden', 'true');
      trigger.setAttribute('aria-expanded', 'false');
      closeTimer = window.setTimeout(() => {
        if (!popup.classList.contains('is-visible')) popup.hidden = true;
      }, 240);
    };

    trigger.addEventListener('click', openPopup);
    closeButton.addEventListener('click', closePopup);
    document.addEventListener('keydown', event => {
      if (event.key === 'Escape' && !popup.hidden) {
        closePopup();
        trigger.focus();
      }
    });

    try {
      if (!window.sessionStorage.getItem(sessionKey)) {
        window.setTimeout(() => {
          if (!window.sessionStorage.getItem(sessionKey)) {
            window.sessionStorage.setItem(sessionKey, '1');
            openPopup();
          }
        }, 30000);
      }
    } catch (error) {
      window.setTimeout(openPopup, 30000);
    }
  })();
</script>

const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
const categoryButtons = document.querySelectorAll('.category-button');
let categoryTimer;
function previewCategory(button) {
 categoryButtons.forEach(item => item.classList.toggle('active', item === button));
 const stage = document.querySelector('.category-stage');
 clearTimeout(categoryTimer);
 stage.classList.add('is-changing');
 categoryTimer = setTimeout(() => {
  const photo = document.querySelector('#category-photo');
  photo.src = button.dataset.image;
  photo.alt = button.dataset.title;
  document.querySelector('#category-title').textContent = button.dataset.title;
  stage.classList.remove('is-changing');
 }, reduceMotion.matches ? 0 : 140);
}
categoryButtons.forEach(button => {
 button.addEventListener('mouseenter', () => previewCategory(button));
 button.addEventListener('focus', () => previewCategory(button));
});
document.querySelectorAll('[data-restaurant-image]').forEach(link => {
 const preview = () => {
  document.querySelector('#restaurant-photo').src = link.dataset.restaurantImage;
  document.querySelector('#restaurant-caption').textContent = link.dataset.restaurantName;
 };
 link.addEventListener('mouseenter', preview);
 link.addEventListener('focus', preview);
});
if (!reduceMotion.matches && 'IntersectionObserver' in window) {
 const observer = new IntersectionObserver(entries => entries.forEach(entry => {
  if (entry.isIntersecting) { entry.target.classList.add('is-visible'); observer.unobserve(entry.target); }
 }), { threshold: 0.08 });
 document.querySelectorAll('.section-heading, .story-copy, .category-intro, .celebration-copy, .newsletter').forEach(element => {
  element.classList.add('reveal'); observer.observe(element);
 });
 document.body.classList.add('motion-ready');
}

const sectionNav = document.querySelector('[data-section-nav]');
const siteHeader = document.querySelector('.home-page .site-header');

if (sectionNav && siteHeader) {
 const sectionLinks = Array.from(sectionNav.querySelectorAll('[data-section-link]'));
 const sectionTargets = sectionLinks
  .map(link => document.getElementById(link.dataset.sectionLink))
  .filter(Boolean);
 let activeSectionId = 'home';
 let scrollFrame;

 const updateOffsets = () => {
  document.documentElement.style.setProperty('--homepage-header-height', `${siteHeader.getBoundingClientRect().height}px`);
  document.documentElement.style.setProperty('--homepage-section-nav-height', `${sectionNav.getBoundingClientRect().height}px`);
 };

 const revealActiveLink = link => {
  if (sectionNav.scrollWidth <= sectionNav.clientWidth) return;
  const navBounds = sectionNav.getBoundingClientRect();
  const linkBounds = link.getBoundingClientRect();
  sectionNav.scrollBy({
   left: linkBounds.left - navBounds.left - (navBounds.width - linkBounds.width) / 2,
   behavior: reduceMotion.matches ? 'auto' : 'smooth'
  });
 };

 const setActiveSection = id => {
  if (!id || id === activeSectionId) return;
  activeSectionId = id;
  const activeLink = sectionLinks.find(link => link.dataset.sectionLink === id);
  sectionLinks.forEach(link => {
   const isActive = link === activeLink;
   link.classList.toggle('is-active', isActive);
   if (isActive) link.setAttribute('aria-current', 'true');
   else link.removeAttribute('aria-current');
  });
  if (activeLink) revealActiveLink(activeLink);
 };

 const updateActiveSection = () => {
  scrollFrame = undefined;
  const offset = siteHeader.getBoundingClientRect().height + 24;
  let current = sectionTargets[0];
  sectionTargets.forEach(section => {
   if (section.getBoundingClientRect().top <= offset) current = section;
  });
  if (current) setActiveSection(current.id);
 };

 sectionLinks.forEach(link => link.addEventListener('click', () => {
  setActiveSection(link.dataset.sectionLink);
 }));

 const requestActiveUpdate = () => {
  if (!scrollFrame) scrollFrame = requestAnimationFrame(updateActiveSection);
 };

 window.addEventListener('scroll', requestActiveUpdate, { passive: true });
 window.addEventListener('resize', () => {
  updateOffsets();
  requestActiveUpdate();
 });
 if ('ResizeObserver' in window) new ResizeObserver(updateOffsets).observe(siteHeader);
 const siteFooter = document.querySelector('.home-page .site-footer');
 if (siteFooter && 'IntersectionObserver' in window) {
  new IntersectionObserver(entries => {
   const footerIsVisible = entries[0].isIntersecting;
   sectionNav.classList.toggle('is-footer-hidden', footerIsVisible);
   document.body.classList.toggle('section-nav-footer-visible', footerIsVisible);
  }).observe(siteFooter);
 }
 updateOffsets();
 requestActiveUpdate();
}


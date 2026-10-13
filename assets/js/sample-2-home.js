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


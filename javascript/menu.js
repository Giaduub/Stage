// Toggle menu on click
document.querySelector('#menu-toggler-custom').addEventListener('click', (e) => {
  toggleBodyClass('menu-active-custom');
});

function toggleBodyClass(className) {
  document.body.classList.toggle(className);
}
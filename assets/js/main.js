document.addEventListener('DOMContentLoaded', function () {
  const mobileToggle = document.querySelector('[data-bs-toggle="collapse"]');
  if (mobileToggle) {
    mobileToggle.addEventListener('click', function () {
      const targetSelector = this.getAttribute('data-bs-target');
      const target = document.querySelector(targetSelector);
      if (target) {
        target.classList.toggle('show');
      }
    });
  }
});

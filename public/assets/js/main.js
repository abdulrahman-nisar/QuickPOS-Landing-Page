(() => {
  const toggle = document.querySelector('.nav-toggle');
  const mobileNav = document.querySelector('#mobile-nav');

  if (!toggle || !mobileNav) return;

  toggle.addEventListener('click', () => {
    const isOpen = mobileNav.classList.toggle('is-open');
    toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    toggle.setAttribute('aria-label', isOpen ? 'Close menu' : 'Open menu');
  });

  mobileNav.addEventListener('click', (e) => {
    const target = e.target;
    if (!(target instanceof Element)) return;
    if (!target.matches('a')) return;

    mobileNav.classList.remove('is-open');
    toggle.setAttribute('aria-expanded', 'false');
    toggle.setAttribute('aria-label', 'Open menu');
  });
})();
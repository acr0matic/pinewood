const header = document.getElementById('header');

if (header) {
  const mobile = header.querySelector('.mobile-menu');
  const mobileNav = mobile.querySelectorAll('.nav__link');
  const burger = header.querySelector('.header__burger');

  burger.addEventListener('click', () => Menu());
  mobileNav.forEach(link => link.addEventListener('click', () => Menu()));

  function Menu() {
    mobile.classList.toggle('mobile-menu--open');
    burger.firstElementChild.classList.toggle('is-active')
    document.body.classList.toggle('disable-scroll');
  }
}



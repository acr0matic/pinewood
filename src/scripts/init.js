const lazyLoadInstance = new LazyLoad({
  elements_selector: '.lazy__item',

  callback_loaded: (trigger) => {
    const container = trigger.closest('.lazy');
    const loader = container.querySelector('.preloader');

    if (loader) loader.classList.add('preloader--hide');
  },
});

MicroModal.init(modalParams);

const forms = document.querySelectorAll('form');
forms.forEach(form => {
  new Form(form);
});



const hero = new Swiper('.slider-hero', {
  slidesPerView: 1,
  speed: 500,
  spaceBetween: 16,
  simulateTouch: false,

  navigation: {
    nextEl: '.hero__slider .swiper-button-next',
    prevEl: '.hero__slider .swiper-button-prev',
  },
});




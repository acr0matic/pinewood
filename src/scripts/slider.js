
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

const recent = new Swiper('.slider-recent', {
  slidesPerView: 2,
  speed: 300,
  spaceBetween: 60,
  simulateTouch: false,

  navigation: {
    nextEl: '.portfolio-recent .swiper-button-next',
    prevEl: '.portfolio-recent .swiper-button-prev',
  },
});




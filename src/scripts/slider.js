
const hero = new Swiper('.slider-hero', {
  slidesPerView: 1,
  speed: 300,
  spaceBetween: 16,
  simulateTouch: false,

  effect: 'fade',
  fadeEffect: {
    crossFade: true
  },

  navigation: {
    nextEl: '.hero__slider .swiper-button-next',
    prevEl: '.hero__slider .swiper-button-prev',
  },
});

const recentPortfolio = new Swiper('.slider-recent-portfolio', {
  slidesPerView: 2,
  speed: 300,
  spaceBetween: 60,
  simulateTouch: false,

  navigation: {
    nextEl: '.portfolio-recent .swiper-button-next',
    prevEl: '.portfolio-recent .swiper-button-prev',
  },
});

const recentService = new Swiper('.slider-recent-service', {
  slidesPerView: 3,
  speed: 300,
  spaceBetween: 30,
  simulateTouch: false,

  navigation: {
    nextEl: '.service-recent .swiper-button-next',
    prevEl: '.service-recent .swiper-button-prev',
  },

  breakpoints: {
    1740: {
      spaceBetween: 60,
      slidesPerView: 4,
    },
  },
});




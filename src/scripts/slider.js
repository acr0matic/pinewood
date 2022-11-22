
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
  spaceBetween: 40,
  simulateTouch: false,

  navigation: {
    nextEl: '.portfolio-recent .swiper-button-next',
    prevEl: '.portfolio-recent .swiper-button-prev',
  },

  991: {
    spaceBetween: 60,
  },
});

const recentService = new Swiper('.slider-recent-service', {
  slidesPerView: 2,
  speed: 300,
  spaceBetween: 75,
  simulateTouch: false,

  navigation: {
    nextEl: '.service-recent .swiper-button-next',
    prevEl: '.service-recent .swiper-button-prev',
  },

  breakpoints: {
    991: {
      spaceBetween: 30,
      slidesPerView: 3,
    },

    1800: {
      spaceBetween: 60,
      slidesPerView: 4,
    },
  },
});

const quiz = new Swiper('.slider-quiz', {
  slidesPerView: 1,
  speed: 300,
  spaceBetween: 16,
  simulateTouch: false,

  effect: 'fade',
  fadeEffect: {
    crossFade: true
  },

  navigation: {
    prevEl: '.slider-quiz > .quiz-control .button-outline',
  },

  on: {
    slideChangeTransitionStart: function (e) {
      if (e.isEnd) e.navigation.prevEl.parentNode.classList.remove('hidden');
      else e.navigation.prevEl.parentNode.classList.add('hidden');
    },
  },
});


const quizInner = new Swiper('.slider-quiz-inner', {
  slidesPerView: 1,
  speed: 300,
  spaceBetween: 16,
  simulateTouch: false,
  // autoHeight: true,

  effect: 'fade',
  fadeEffect: {
    crossFade: true
  },

  navigation: {
    nextEl: '.slider-quiz-inner .quiz-control .button-primary',
    prevEl: '.slider-quiz-inner .quiz-control .button-outline',
  },

  on: {
    slideChangeTransitionStart: function (e) {
      if (e.isEnd) e.navigation.nextEl.classList.add('hidden');
      else e.navigation.nextEl.classList.remove('hidden');
    },
  },
});




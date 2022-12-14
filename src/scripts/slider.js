
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
  slidesPerView: 1.15,
  speed: 300,
  spaceBetween: 32,
  simulateTouch: false,

  navigation: {
    nextEl: '.portfolio-recent .swiper-button-next',
    prevEl: '.portfolio-recent .swiper-button-prev',
  },

  breakpoints: {
    768: {
      slidesPerView: 2,
      spaceBetween: 40,
    },

    991: {
      slidesPerView: 2,
      spaceBetween: 60,
    },
  },
});

const recentService = new Swiper('.slider-recent-service', {
  slidesPerView: 1.15,
  speed: 300,
  spaceBetween: 32,
  simulateTouch: false,

  navigation: {
    nextEl: '.service-recent .swiper-button-next',
    prevEl: '.service-recent .swiper-button-prev',
  },

  breakpoints: {
    768: {
      spaceBetween: 75,
      slidesPerView: 2,
    },

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
  // autoHeight: true,

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

if (isBigTablet) {
  const team = new Swiper('.slider-team', {
    slidesPerView: 1.1,
    speed: 300,
    spaceBetween: 16,

    scrollbar: {
      el: '.slider-team .swiper-scrollbar',
    },

    breakpoints: {
      540: {
        slidesPerView: 2.1,
      },
    },
  });
}

if (isTablet) {
  const process = new Swiper('.slider-process', {
    slidesPerView: 1,
    speed: 300,
    spaceBetween: 16,
    // autoHeight: true,

    scrollbar: {
      el: '.slider-process .swiper-scrollbar',
    },
  });
}


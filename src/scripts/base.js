const isSafari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);

const isMobile = window.matchMedia('(max-width: 576px)').matches;
const isTablet = window.matchMedia('(max-width: 768px)').matches;
const isBigTablet = window.matchMedia('(max-width: 991px)').matches;

const modalParams = {
  awaitCloseAnimation: true,
  disableFocus: true,
}

// const scrollParams = {
//   speed: 500,
//   speedAsDuration: true,
//   offset: -60,
//   header: '#header',
// }
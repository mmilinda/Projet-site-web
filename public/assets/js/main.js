/*=============== SWIPER JS ===============*/
let swiperCards = new Swiper(".card__content", {
  effect: "cards",
  loop: true,
  grabCursor: true,

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
/* ===============================================
 *  Swiper
 =============================================== */

const mvSwiper = new Swiper(".mvSwiper", {
  loop: true,
  effect: "fade",
  speed: 1000,
  autoplay: {
    delay: 3000,
  },
});

/* ===============================================
 *  郵便番号APIのために、フォームの操作
 =============================================== */
const forms = document.querySelectorAll(".wpcf7-form");

forms.forEach((form) => {
  form.classList.add("h-adr");
});

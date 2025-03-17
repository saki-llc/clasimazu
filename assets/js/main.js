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

document.querySelectorAll("*").forEach((el) => (el.clientWidth > document.body.clientWidth ? console.log(el) : null));

/* ===============================================
 *  ヘッダーのハンバーガーメニュー
 =============================================== */
const headerHamburgerButton = document.querySelector(".headerHamburgerButton");
const header = document.querySelector("header");

headerHamburgerButton.addEventListener("click", () => {
  header.classList.toggle("isOpen");
});

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

/* ===============================================
 *  全体をふわっと出現
 =============================================== */

// すべての.boxを取得
let animateElements = document.querySelectorAll(".animate");

document.addEventListener("DOMContentLoaded", function () {
  const windowHeight = window.innerHeight; // 画面の高さを取得

  // 画面内に表示されている要素にクラスを追加
  animateElements.forEach((element) => {
    const elementTop = element.getBoundingClientRect().top;

    // 要素が画面内にある場合、即座にアニメーションを適用
    if (elementTop < windowHeight) {
      element.classList.add("isFadeIn");
    }
  });
});

window.addEventListener("scroll", function () {
  // スクロール量を取得
  const scroll = window.scrollY;

  // 画面の高さを取得
  const windowHeight = window.innerHeight;

  animateElements.forEach((element) => {
    const elementTop = element.getBoundingClientRect().top + window.pageYOffset;

    if (scroll > elementTop - windowHeight / 1.2) {
      element.classList.add("isFadeIn");
    }
  });
});

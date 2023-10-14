jQuery(function ($) {
  //スクロールに応じてヘッダーにactiveクラスを付ける
  $(window).scroll(function () {
    if ($(this).scrollTop() > 0) {
      $(".l-header").addClass("is-active");
    } else {
      $(".l-header").removeClass("is-active");
    }
  });

  //ハンバーガーメニュー
  var btnMenu = $(".js-btn-menu");
  var globalNav = $(".l-header__nav");

  btnMenu.on("click", function () {
    btnMenu.toggleClass("is-active");
    globalNav.toggleClass("is-show");
  });
});


// スクロールアニメーション　フェードイン
document.addEventListener("DOMContentLoaded", function () {
  const sections = document.querySelectorAll(".fade-in-section");

  const fadeInOptions = {
    root: null,
    rootMargin: "0px",
    threshold: 0.2
  };

  const fadeInOnScroll = new IntersectionObserver(function (entries, fadeInOnScroll) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
        fadeInOnScroll.unobserve(entry.target);
      }
    });
  }, fadeInOptions);

  sections.forEach(section => {
    fadeInOnScroll.observe(section);
  });
});

document.addEventListener("DOMContentLoaded", function () {
  // Swiper
  const swiper = new Swiper('.swiper', {
    effect: 'fade',
    speed: 2000,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    loop: true,
  });
});


!(function () {
  const viewport = document.querySelector('meta[name="viewport"]');
  function switchViewport() {
    const value =
      window.outerWidth > 360
        ? 'width=device-width,initial-scale=1'
        : 'width=360';
    if (viewport.getAttribute('content') !== value) {
      viewport.setAttribute('content', value);
    }
  }
  addEventListener('resize', switchViewport, false);
  switchViewport();
})()
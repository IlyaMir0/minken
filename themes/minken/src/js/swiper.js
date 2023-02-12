var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    speed: 500,
    effect: "fade",
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
    keyboard: true,
    loop: true,
    autoplay: {
        delay: 3000,
      },
  });
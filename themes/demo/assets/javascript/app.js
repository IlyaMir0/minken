var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    speed: 500,
    effect: "fade",
    navigation: {
     
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    keyboard: true,
    loop: true,
    simulateTouch: false,
    grabCursor: true,
    touchRatio: 2,
    touchAngle: 45,
    autoplay: {
      delay: 1000,
    },
  });
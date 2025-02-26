var swiper3 = new Swiper(".homeSlider", {
  grabCursor: true,
  effect: "creative",
  autoplay: {
    delay: 3500,
    disableOnInteraction: true
  },
  speed: 2000,
  loop: true,
  creativeEffect: {
    prev: {
      shadow: true,
      translate: ["-20%", 0, -1]
    },
    next: {
      translate: ["100%", 0, 0]
    }
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  }
});

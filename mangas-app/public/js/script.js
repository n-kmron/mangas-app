var swiper = new Swiper(".slide-container", {
          slidePerView: -1,
          spaceBetween: 50,
          slidePerGroup: 1,
          loop: true,
          centerSlide: true,
          grabCursor: false,
          fade: false,
          pagination: {
                    el: ".swiper-pagination",
                    clickable: false,
                    dynamicBullets: true,
          },
          navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
          },
});
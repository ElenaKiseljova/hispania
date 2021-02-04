'use strict';

document.addEventListener('DOMContentLoaded', () => {
  try {
    let sufixSliders = ['--index'];

    sufixSliders.forEach((item, i) => {
      let slider = document.querySelector(`.apartments__slider${sufixSliders[i]}`);

      if (slider) {
        let promotionSwiper = new Swiper(`.apartments__slider${sufixSliders[i]}`, {
          loop: true,
          spaceBetween: 0,
          effect: 'slide',
          slidesPerView: 1,
          navigation: {
            nextEl: `.apartments__button--next${sufixSliders[i]}`,
            prevEl: `.apartments__button--prev${sufixSliders[i]}`,
          },
        });
      }
    });

  } catch (e) {
    console.log(e);
  }
})

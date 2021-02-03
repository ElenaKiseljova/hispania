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
          // Responsive breakpoints
          /*breakpoints: {
            // when window width is >= 320px
            320: {
              slidesPerView: 1,
            },
            // when window width is >= 620px
            620: {
              slidesPerView: 2,
            },
            // when window width is >= 1024px
            1024: {
              slidesPerView: 3,
            }
          }*/
        });
      }
    });

  } catch (e) {
    console.log(e);
  }
})

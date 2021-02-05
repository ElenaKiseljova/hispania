'use strict';

document.addEventListener('DOMContentLoaded', () => {
  try {
    let sufixSliders = ['--index'];

    sufixSliders.forEach((item, i) => {
      let slider = document.querySelector(`.apartments__slider${sufixSliders[i]}`);

      if (slider) {
        let apartamentsSwiper = new Swiper(`.apartments__slider${sufixSliders[i]}`, {
          loop: true,
          spaceBetween: 0,
          effect: 'slide',
          slidesPerView: 1,
          navigation: {
            nextEl: `.toggle__button--next${sufixSliders[i]}`,
            prevEl: `.toggle__button--prev${sufixSliders[i]}`,
          },
        });
      }
    });

    let sliderPage = document.querySelector('.apartments__container--slider');

    if (sliderPage) {
      let apartamentsSwiperPage = new Swiper('.apartments__container--slider', {
        spaceBetween: 0,
        slidesPerView: 1,
        effect: 'fade',
        fadeEffect: {
          crossFade: true
        },
        pagination: {
          el: '.apartments__fraction',
          type: 'custom',
          renderCustom: function (swiper, current, total) {
            function numberAppend(d) {
              return (d < 10) ? '0' + d.toString() : d.toString();
            }
            return '<span class="swiper-pagination-current">' + numberAppend(current) + '</span>' +
                   '<span class="swiper-pagination-total">' + ' / ' + numberAppend(total) + '</span>';
          }
        },
        navigation: {
          nextEl: '.toggle__button--next--page',
          prevEl: '.toggle__button--prev--page',
        },
      });
    }
  } catch (e) {
    console.log(e);
  }
})

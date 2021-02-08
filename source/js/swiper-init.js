'use strict';

document.addEventListener('DOMContentLoaded', () => {
  try {
    let sliderPage = document.querySelector('.apartments__container--slider');

    if (sliderPage) {
      let apartamentsSwiperPage = new Swiper('.apartments__container--slider', {
        spaceBetween: 0,
        slidesPerView: 1,
        effect: 'fade',
        fadeEffect: {
          crossFade: true
        },
        allowTouchMove: false,
        pagination: {
          el: '.fraction--header',
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
          nextEl: '.toggle__button--next-page',
          prevEl: '.toggle__button--prev-page',
        },
      });
    }

    let sufixSliders = ['--index', '--page'];

    sufixSliders.forEach((item, i) => {


      let sliders = document.querySelectorAll(`.apartments__slider${sufixSliders[i]}`);

      if (sliders) {
        let idThumb;

        sliders.forEach((slider, k) => {

          let dataInitial = {
            // Disable preloading of all images
            preloadImages: false,
            // Enable lazy loading
            lazy: true,
            loop: true,
            spaceBetween: 0,
            effect: 'slide',
            slidesPerView: 1,
            navigation: {
              nextEl: `.toggle__button--next${sufixSliders[i]}`,
              prevEl: `.toggle__button--prev${sufixSliders[i]}`,
            },
          };

          let idThumb = slider.getAttribute('data-thumbs');
          console.log(idThumb);
          var galleryThumbs;

          if (idThumb) {
            dataInitial.pagination = {
              el: '.fraction--page',
              type: 'fraction',
            };

            idThumb = '#' + idThumb;

            galleryThumbs = new Swiper(idThumb, {
              // Disable preloading of all images
              preloadImages: false,
              // Enable lazy loading
              lazy: true,
              loop: true,
              spaceBetween: 10,
              slidesPerView: 5,
              freeMode: true,
              watchSlidesVisibility: true,
              watchSlidesProgress: true,
            });

            dataInitial.thumbs = {
              swiper: galleryThumbs,
            };

          }

          let apartamentsSwiper = new Swiper(slider, dataInitial);
        });


      }
    });

  } catch (e) {
    console.log(e);
  }
})

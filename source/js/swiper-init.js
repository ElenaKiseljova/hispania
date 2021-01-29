'use strict';

document.addEventListener("DOMContentLoaded", function () {
  try {
    let promoSlider = document.querySelector('.promo__slider');

    if (promoSlider) {
      let promoSwiper = new Swiper('.promo__slider', {
        slidesPerView: 1,
        loop: true,
        effect: 'fade',
        fadeEffect: {
          crossFade: true
        },
        pagination: {
          el: '.promo__pagination',
          type: 'bullets',
          clickable: true,
        },
        autoplay: {
          delay: 5000,
        },
      });
    }
  } catch (e) {
    console.log(e);
  }

  try {
    let sufixPromotionSections = ['--sale', '--latest', '--news', '--related'];

    for (var i = 0; i < sufixPromotionSections.length; i++) {
      let promotionSlider = document.querySelector(`.promotion__slider${sufixPromotionSections[i]}`);

      if (promotionSlider) {
        let promotionSwiper = new Swiper(`.promotion__slider${sufixPromotionSections[i]}`, {
          loop: true,
          spaceBetween: 30,
          effect: 'slide',
          navigation: {
            nextEl: `.slider-navigation--next${sufixPromotionSections[i]}`,
            prevEl: `.slider-navigation--prev${sufixPromotionSections[i]}`,
          },
          // Responsive breakpoints
          breakpoints: {
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
          }
        });
      }
    }

  } catch (e) {
    console.log(e);
  }

  try {
    let reviewSlider = document.querySelector('.review__slider');

    if (reviewSlider) {
      let reviewSwiper = new Swiper('.review__slider', {
        slidesPerView: 1,
        loop: true,
        spaceBetween: 15,
        effect: 'slide',
        navigation: {
          nextEl: '.review__next',
          prevEl: '.review__prev',
        },
        // Responsive breakpoints
        breakpoints: {
          // when window width is >= 500px
          500: {
            slidesPerView: 80,
          },
          // when window width is >= 860px
          860: {
            spaceBetween: 123,
          }
        }
      });
    }
  } catch (e) {
    console.log(e);
  }

  try {
    let productSlider = document.querySelector('.product__slider');

    if (productSlider) {
      let promoSwiper = new Swiper('.product__slider', {
        slidesPerView: 1,
        loop: true,
        effect: 'fade',
        fadeEffect: {
          crossFade: true
        },
        pagination: {
          el: '.product__pagination',
          type: 'bullets',
          clickable: true,
        },
        autoplay: {
          delay: 5000,
        },
      });
    }
  } catch (e) {
    console.log(e);
  }
});

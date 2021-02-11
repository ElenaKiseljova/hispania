'use strict';

document.addEventListener('DOMContentLoaded', () => {
  const CURRENT_URl = window.location.href;

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

      let urlParse = new URL(CURRENT_URl);
      let currentApart = urlParse.searchParams.get('apart');
      if (currentApart) {
        apartamentsSwiperPage.slideTo(currentApart);
      }
    }
  } catch (e) {
    console.log(e);
  }

  try {
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

          let paginationSlider = document.querySelector('.apartments__pagination');

          if (paginationSlider) {
            dataInitial.pagination = {
              el: '.swiper-pagination',
              type: 'bullets',
              clickable: true,
            }
          }

          let idThumb = slider.getAttribute('data-thumbs');

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
              spaceBetween: 6,
              slidesPerView: 5,
              freeMode: true,
              watchSlidesVisibility: true,
              watchSlidesProgress: true,
              // Responsive breakpoints
              breakpoints: {
                // when window width is >= 570px
                570: {
                  spaceBetween: 10
                },
              }
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

  try {
    let contactSlider = document.querySelector('.palm__container');

    if (contactSlider) {
      let nextButton = contactSlider.querySelector('.palm__next');

      let contactSwiper = new Swiper(contactSlider, {
        spaceBetween: 0,
        slidesPerView: 1,
        effect: 'fade',
        fadeEffect: {
          crossFade: true
        },
        allowTouchMove: false,
        autoHeight: true,
        pagination: {
          el: '.fraction--palm',
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
          nextEl: '.toggle__button--next-palm',
          prevEl: '.toggle__button--prev-palm',
        },
      });

      if (nextButton) {
        nextButton.addEventListener('click', () => {
          if (contactSwiper.activeIndex < 4) {
            contactSwiper.slideNext();
          } else if (contactSwiper.activeIndex === 4) {
            // ajax

            let contentContact = document.querySelector('.palm__content');

            let succcessTemplate = document.querySelector('#success').content.querySelector('.palm__final');
            let failTemplate = document.querySelector('#fail').content.querySelector('.palm__final');

            if (contentContact && succcessTemplate && failTemplate) {
              contentContact.innerHTML = '';

              //contentContact.appendChild(succcessTemplate);
              contentContact.appendChild(failTemplate);
            }
          }
        });

        contactSwiper.on('slideChange', function () {
          if (contactSwiper.activeIndex === 3) {
            nextButton.classList.toggle('show-text');
          } else if (contactSwiper.activeIndex < 3 && nextButton.classList.contains('show-text')) {
            nextButton.classList.remove('show-text')
          } else if (contactSwiper.activeIndex === 4) {
            nextButton.classList.toggle('show-text');
          }
        });
      }

    }
  } catch (e) {
    console.log(e);
  }

  let popupSwiper;

  window.swiperInit = (index, slide) => {
    if (index !== null) {
      //console.log('initialing slider');
      let templateSlide = (src) => {
        return `
                <li class="popup__slide swiper-slide">
                  <div class="popup__image">
                    <img src="${src}" alt="apartment">
                  </div>
                </li>
               `;
      }

      if (sliderImages) {
        let popupSlider = document.querySelector('.popup__slider');

        let popupSliderImages = JSON.parse(sliderImages);

        if (popupSliderImages && popupSlider) {
          let popupSliderList = popupSlider.querySelector('.popup__list');
          let templateSlides = popupSliderImages[index].map(image => templateSlide(image));
          let htmlTemplateSlides = templateSlides.join(' ');

          popupSliderList.innerHTML = htmlTemplateSlides;

          popupSwiper = new Swiper(popupSlider, {
            spaceBetween: 72,
            slidesPerView: 1,
            pagination: {
              el: '.fraction--popup',
              type: 'fraction'
            },
            navigation: {
              nextEl: '.toggle__button--next-popup',
              prevEl: '.toggle__button--prev-popup',
            },
          });

          popupSwiper.slideTo(slide);

          popupSlider.addEventListener('click', (evt) => {
            if (evt.target.classList.contains('popup__slider') || evt.target.classList.contains('fraction--popup') || evt.target.classList.contains('popup__image')) {
              window.closePopup();
            }
          });
        }
      }
    } else {
      //console.log('slider ready');
      popupSwiper.slideTo(slide);
    }
  }
})

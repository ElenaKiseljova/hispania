'use strict';

document.addEventListener("DOMContentLoaded", function () {
  try {
    const rootElement = document.documentElement;
    const overlayPopup = document.querySelector('.popup__overlay');

    let onPopupEscPress = function (evt) {
      if (evt.keyCode === 27) {
        closePopup();
      }
    }

    let openPopup = function (popup) {
      let allPopup = document.querySelectorAll('.popup');

      if (allPopup) {
        allPopup.forEach(function (item) {
          if (item.classList.contains('active')) {
            item.classList.remove('active');
          }
        });
      }

      if (rootElement && !rootElement.classList.contains('active')) {
        rootElement.classList.add('active');
      }

      if (overlayPopup && !overlayPopup.classList.contains('active')) {
        overlayPopup.classList.add('active');
      }

      popup.classList.add('active');

      document.addEventListener('keydown', onPopupEscPress, true);
    }

    window.closePopup = function () {
      let allPopup = document.querySelectorAll('.popup');

      if (allPopup) {
        allPopup.forEach(function (item) {
          if (item.classList.contains('active')) {
            item.classList.remove('active');
          }
        });
      }

      if (rootElement && rootElement.classList.contains('active')) {
        rootElement.classList.remove('active');
      }

      if (overlayPopup && overlayPopup.classList.contains('active')) {
        overlayPopup.classList.remove('active');
      }

      document.removeEventListener('keydown', onPopupEscPress, true);
    }

    let popupButtons = document.querySelectorAll('.openpopup');

    if (popupButtons) {
      popupButtons.forEach(function (item) {
        let sufixPopupName = item.getAttribute('data-popup');
        let popupName = '.popup--' + sufixPopupName;

        let popupItem = document.querySelector(popupName);

        item.addEventListener('click', function (evt) {
          if (popupItem) {
            if (popupName == '.popup--slider') {
              let currentApartment = popupItem.getAttribute('data-current');

              let indexSliderApartment = item.getAttribute('data-apartment');
              let indexSlide = item.getAttribute('data-swiper-slide-index');

              //console.log(currentApartment, indexSliderApartment);
              if (indexSliderApartment && indexSlide) {
                if (!currentApartment || currentApartment !== indexSliderApartment) {
                  popupItem.dataset.current = indexSliderApartment;

                  window.swiperInit(indexSliderApartment, indexSlide);
                } else if (currentApartment && currentApartment == indexSliderApartment) {
                  window.swiperInit(null, indexSlide);
                }
              }
            } else if (popupName == '.popup--map') {
              let hrefIframeMap = item.getAttribute('data-href');
              let dataTitleMap = item.getAttribute('data-title');
              
              let popupIframe = popupItem.querySelector('.popup__iframe');
              let popupTitle = popupItem.querySelector('.popup__title');
              //console.log(hrefIframeMap, popupIframe);

              if (hrefIframeMap && popupIframe && popupTitle && dataTitleMap) {
                popupIframe.src = hrefIframeMap + '&zoom=15';
                popupTitle.textContent = dataTitleMap;
              }
            }

            openPopup(popupItem);
          }
        });
      });
    }

    let closePopupButtons = document.querySelectorAll('.popup__close');

    if (closePopupButtons) {
      for (var i = 0; i < closePopupButtons.length; i++) {
        closePopupButtons[i].addEventListener('click', closePopup);

        var onEnterPressClose = function (evt) {
          if (evt.keyCode === 13) {
            closePopup();

            document.removeEventListener('keydown', onEnterPressClose);
          }
        }

        closePopupButtons[i].addEventListener('focus', function () {
          document.addEventListener('keydown', onEnterPressClose);
        });

        closePopupButtons[i].addEventListener('blur', function () {
          document.removeEventListener('keydown', onEnterPressClose);
        });
      }
    }

    if (overlayPopup) {
      overlayPopup.addEventListener('click', closePopup);
    }

  } catch (e) {
    console.log(e);
  }
});

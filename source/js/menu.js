'use strict';

document.addEventListener("DOMContentLoaded", function () {
  try {
    // Mobile menu
    const rootElement = document.documentElement;
    if (screen.width < 515) {
      let mobileMenuButtonOpen = document.querySelector('.navigation__toggle');
      let mobileMenuButtonClose = document.querySelector('.navigation__close');
      let mobileMenu = document.querySelector('.navigation--header');

      if (mobileMenuButtonOpen && mobileMenuButtonClose && mobileMenu && rootElement) {
        let menuToggle = () => {
          mobileMenu.classList.toggle('active');
          rootElement.classList.toggle('active');
        }

        mobileMenuButtonOpen.addEventListener('click', () => {
          menuToggle();
        })

        mobileMenuButtonClose.addEventListener('click', () => {
          menuToggle();
        })

        mobileMenu.addEventListener('click', (evt) => {
          if (evt.target.tagName !== 'BUTTON') {
            menuToggle();
          }
        })
      }
    }
  } catch (e) {
    console.log(e);
  }
});

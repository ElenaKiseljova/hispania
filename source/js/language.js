'use strict';

document.addEventListener("DOMContentLoaded", function () {
  try {
    var toggleLanguage = (element) => {
      let language = document.querySelector(element);

      if (language) {
        let languageButton = language.querySelector('button');
        let languageList = language.querySelector('ul');

        languageButton.addEventListener('click', () => {
          languageButton.classList.toggle('active');
          languageList.classList.toggle('active');
        });
      }
    };

    toggleLanguage('.language--header');
  } catch (e) {
    console.log(e);
  }
});

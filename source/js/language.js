'use strict';

document.addEventListener('DOMContentLoaded', () => {
  try {
    const DEFAULT_LANGUAGE_HEIGHT = 31
    const DEFAULT_LANGUAGE_HEIGHT_ITEM = 28
    const DEFAULT_LANGUAGE = 'EN'

    let languages = document.querySelectorAll('.language__list');

    let defaultHeight = (element) => {
      element.classList.remove('active')

      element.style.height = DEFAULT_LANGUAGE_HEIGHT + 'px'
    }

    let lastTimeout;

    let searchCurrentLanguage = () => {
      var allLanguageLinks = document.querySelectorAll('.glink')

      allLanguageLinks.forEach((item, i) => {
        let currentLang = GTranslateGetCurrentLang()

        if (currentLang !== null) {
          if (item.classList.contains('active') && (item.textContent !== currentLang.toUpperCase())) {
            item.classList.remove('active')
          } else if (item.textContent === currentLang.toUpperCase()) {
            item.classList.add('active')
          }
        } else {
          if (item.classList.contains('active') && (item.textContent !== DEFAULT_LANGUAGE)) {
            item.classList.remove('active')
          } else if (item.textContent === DEFAULT_LANGUAGE) {
            item.classList.add('active')
          }
        }
      });
    }

    languages.forEach((item, i) => {
      let languageLinks = item.querySelectorAll('.glink'),
          languageCounts = languageLinks.length
      if (languageCounts) {
        languageLinks[0].classList.add('active')

        document.body.addEventListener('click', (evt) => {
          if (item.classList.contains('active')) {
            defaultHeight(item)
          } else if (!item.classList.contains('active') && evt.target === item) {
            item.classList.add('active')

            item.style.height = (DEFAULT_LANGUAGE_HEIGHT + (languageCounts - 1) * DEFAULT_LANGUAGE_HEIGHT_ITEM) + 'px'
          }

          if (evt.target.closest('.language__list') && evt.target.tagName === 'A') {
            if (lastTimeout) {
              clearTimeout(lastTimeout);
            }

            lastTimeout = setTimeout(() => {
              searchCurrentLanguage()
            }, 500)
          }
        })
      }

    });

    searchCurrentLanguage()
  } catch (e) {
    console.log(e);
  }
})

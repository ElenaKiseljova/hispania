'use strict';

document.addEventListener('DOMContentLoaded', () => {
  try {
    let showAll = (button) => {
      let showButtons = document.querySelectorAll(button)

      showButtons.forEach((b, i) => {
        let showParent = b.parentElement
        let showElement = showParent.querySelector('ul')

        if (b && showElement) {
          b.addEventListener('click', () => {
            b.classList.add('active')
            showElement.classList.add('active')
          })
        }
      })
    }

    showAll('.subline--showall')
  } catch (e) {
    console.log(e)
  }
})

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
            showElement.classList.toggle('active')
          })
        }
      })
    }

    showAll('.subline--showall')
  } catch (e) {
    console.log(e)
  }
})

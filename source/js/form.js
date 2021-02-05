'use strict';

document.addEventListener('DOMContentLoaded', () => {
  try {
    let form = (id) => {
      let formCheck = document.querySelector(`#${id}`)

      if (formCheck) {
        formCheck.addEventListener('click', () => {
          formCheck.classList.add('active');
        })
      }
    }

    form('contact-index');
  } catch (e) {
    console.log(e);
  }
})

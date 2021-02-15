'use strict';

document.addEventListener('DOMContentLoaded', () => {
  try {
    let form = (id, disabledElements) => {
      let formCheck = document.querySelector(id)

      if (formCheck) {
        if (disabledElements !== null) {
          disabledElements.forEach((item, i) => {
            let itemDisabled = document.querySelector(item)
            if (itemDisabled) {
              disabledElements[i] = itemDisabled
            }
          });
        }

        let allInputs = formCheck.querySelectorAll('input')
        let allTextarea = formCheck.querySelectorAll('textarea')

        allInputs.forEach((item, i) => {
          if (item.type !== 'radio') {
            let notValid = true

            item.autocomplete = 'off'

            item.addEventListener('input', () => {
              item.classList.add('active')

              if (notValid && item.validity.valid) {
                notValid = false;

                if (disabledElements !== null) {
                  disabledElements.forEach((item, i) => {
                    item.classList.remove('disabled')
                  });
                }


                //console.log('valid')
              } else if (!notValid && !item.validity.valid) {
                notValid = true

                if (disabledElements !== null) {
                  disabledElements.forEach((item, i) => {
                    item.classList.add('disabled')
                  });
                }


                //console.log('not valid')
              }
            })
          }
        })

        allTextarea.forEach((item, i) => {
          let notValid = true
          item.addEventListener('input', () => {
            item.classList.add('active')

            if (disabledElements !== null) {
              let more_16 = false
              let more_40 = false

              if (item.value.length > 16 && item.value.length < 40) {
                more_16 = true
              } else if (item.value.length > 40) {
                more_16 = false
                more_40 = true
              } else {
                more_16 = false
                more_40 = false
              }

              if (more_16) {
                if (item.classList.contains('more-40')) {
                  item.classList.remove('more-40')
                } else {
                  item.classList.add('more-16')
                }
              } else if (more_40) {
                item.classList.add('more-40');
              } else if (item.value.length < 16) {
                if (item.classList.contains('more-16')) {
                  item.classList.remove('more-16')
                }

              }
            }

            if (notValid && item.validity.valid) {
              notValid = false;

              if (disabledElements !== null) {
                disabledElements.forEach((item, i) => {
                  item.classList.remove('disabled')
                });
              }


              //console.log('valid')
            } else if (!notValid && !item.validity.valid) {
              notValid = true;

              if (disabledElements !== null) {
                disabledElements.forEach((item, i) => {
                  item.classList.add('disabled')
                });
              }


              //console.log('not valid')
            }
          })
        })

        if (disabledElements == null) {
          formCheck.addEventListener('submit', (evt) => {
            evt.preventDefault();

            var contactSection = document.querySelector('.contact--index');
            var htmlContent = '';

            let nameValue = formCheck.querySelector('input[name*="name"]')
            let emailValue = formCheck.querySelector('input[name*="email"]')
            let phoneValue = formCheck.querySelector('input[name*="phone"]')
            let messageValue = formCheck.querySelector('textarea')

            var data = {};

            if (nameValue && emailValue && phoneValue && messageValue) {
              data = {
                action: 'sendmail',
                name: nameValue.value,
                email: emailValue.value,
                phone: phoneValue.value,
                message: messageValue.value
              };

              (function ($) {
                $.ajax({
                  url: hispania_ajax.url,
                  data: data,
                  type: 'POST',
                  success: function(response){
                    htmlContent = `
                                      <h2 class="title title--contact-index">
                                        Thanks for the application!
                                      </h2>

                                      <p class="contact__text">
                                        We will contact you soon
                                      </p>
                                      `;
                    if (contactSection) {
                      contactSection.innerHTML = htmlContent;
                    }
                  },
                  error: function (error) {
                    console.log(error);

                    htmlContent = `
                                  <h2 class="title title--contact-index">
                                    Something went wrong...
                                  </h2>

                                  <p class="contact__text">
                                    Please try again send form later or call us by phone or send mail
                                  </p>
                                  `;

                    if (contactSection) {
                      contactSection.innerHTML = htmlContent;
                    }
                  }
                });
              })(jQuery);
            }
          })
        }
      }
    }

    // Index & Contacts
    form('#contact-index', null)

    // Contact Us
    form('#contact-palm', ['.toggle__button--next-palm', '.palm__next'])
  } catch (e) {
    console.log(e);
  }
})

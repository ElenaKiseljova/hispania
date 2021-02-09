<?php
  include("header-inner.php");
?>

<main class="page-main">
  <section class="apartments apartments--top">
    <header class="apartments__header">
      <div class="apartments__wrapper apartments__wrapper--header">
        <h1 class="title title--page">
          Contact us
        </h1>
      </div>
    </header>
  </section>
  <section class="palm">
    <div class="palm__wrapper palm__wrapper--contact-us">
      <div class="palm__content">
        <div class="toggle toggle--palm">
          <button class="toggle__button toggle__button--palm toggle__button--prev-palm toggle__button--prev" type="button" name="prev" aria-label="Previous apartament">
            <svg class="toggle__icon toggle__icon--palm" width="13.33" height="13.33">
              <use xlink:href="#icon-arrow-small"></use>
            </svg>
          </button>

          <div class="fraction fraction--palm"></div>

          <button class="toggle__button toggle__button--palm toggle__button--next-palm toggle__button--next" type="button" name="next" aria-label="Next apartament">
            <svg class="toggle__icon toggle__icon--palm" width="13.33" height="13.33">
              <use xlink:href="#icon-arrow-small"></use>
            </svg>
          </button>
        </div>

        <div class="palm__container swiper-container">
          <form class="palm__form swiper-wrapper" method="post" action="">
            <div class="palm__slide swiper-slide">
              <h3 class="palm__title">
                What’s your name?
              </h3>
              <input class="palm__field" type="text" name="name-1">
            </div>
            <div class="palm__slide swiper-slide">
              <h3 class="palm__title">
                What’s your e-mail?
              </h3>
              <input class="palm__field" type="email" name="email-1">
            </div>
            <div class="palm__slide swiper-slide">
              <h3 class="palm__title">
                What’s your phone?
              </h3>
              <input class="palm__field" type="tel" name="phone-1">
            </div>

            <div class="palm__slide swiper-slide">
              <h3 class="palm__title">
                Choose the apartment that interests you
              </h3>
              <p class="palm__row">
                <input class="visually-hidden" type="radio" name="apartment" id="apartment-1" value="Luxurious Seaview Apartment 50m at Playa del Cura">
                <label class="palm__label" for="apartment-1">
                  Luxurious Seaview Apartment 50m at Playa del Cura
                </label>
                <a class="palm__more" href="#">
                  More info
                </a>
              </p>
              <p class="palm__row">
                <input class="visually-hidden" type="radio" name="apartment" id="apartment-2" value="Romantic house at red lake in Torrevieja">
                <label class="palm__label" for="apartment-2">
                  Romantic house at red lake in Torrevieja
                </label>
                <a class="palm__more" href="#">
                  More info
                </a>
              </p>
              <p class="palm__row">
                <input class="visually-hidden" type="radio" name="apartment" id="apartment-3" value="Apartment near the white church on Plaza de Oriente">
                <label class="palm__label" for="apartment-3">
                  Apartment near the white church on Plaza de Oriente
                </label>
                <a class="palm__more" href="#">
                  More info
                </a>
              </p>
            </div>

            <div class="palm__slide swiper-slide">
              <h3 class="palm__title">
                Leave your message
              </h3>
              <p class="palm__text">
                Tell us about approximate dates of staying, number of guests etc. and we will answer you about the possibility of booking an apartment for this time
              </p>
              <textarea class="palm__field palm__field--message" name="message"></textarea>
            </div>
          </form>
          <button class="palm__next" type="button" name="next">
            <span class="palm__next-text">Next</span>
            <span class="palm__next-icon">
              <svg width="10.67" height="10.67">
                <use xlink:href="#icon-arrow-small"></use>
              </svg>
            </span>
          </button>
        </div>
      </div>

      <div class="palm__image">
        <img src="img/palm.png" alt="palm">
      </div>
      <p class="palm__background">
        Contact us
      </p>
    </div>
  </section>
</main>

<template id="success">
  <h2 class="palm__thanks-title">
    Thanks for the application!
  </h2>

  <p class="palm__thanks-text">
    We will contact you soon
  </p>

  <button class="button button--palm" type="button" name="home">
    Back to mainpage
  </button>
</template>
<template id="fail">
  <h2 class="palm__thanks-title">
    Something went wrong...
  </h2>

  <p class="palm__thanks-text">
    Please try again send form later or call us by phone or send mail
  </p>

  <button class="button button--palm" type="button" name="home">
    Back to mainpage
  </button>
</template>
<?php
  include("footer.php");
?>

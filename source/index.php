<?php
  include("header.php");
?>

<main class="page-main">
  <section class="promo">
    <div class="promo__wrapper">
      <div class="promo__content">
        <h1 class="title title--promo">
          Real estate
          <span>
            project In Spain
          </span>
        </h1>

        <p class="text text--promo">
          We are here to help you with your next holiday and we take care to ensure you are matched with your ideal holiday accommodation
        </p>

        <a class="button button--promo" href="/contact-us.php">
          Order a consultation
        </a>
        <div class="promo__bottom">
          <p class="text text--semi">
            3 comfortable apartments near the sea
          </p>
          <p class="text text--semi">
            More 100 satisfied clients
          </p>
        </div>
      </div>
      <p class="promo__background">
        Comfort
      </p>
    </div>
    <div class="promo__half">
      <img src="img/promo.jpg" alt="hispania">
    </div>
  </section>

  <section class="apartments apartments--center">
    <div class="apartments__wrapper apartments__wrapper--center">
      <h2 class="title title--apartments">
        Our apartments
      </h2>

      <ul class="apartments__container">
        <?php
          for ($k=1; $k < 4; $k++) :
        ?>
          <li class="apartments__item apartments__item--index">
            <div class="apartments__slider apartments__slider--index swiper-container">
              <ul class="apartments__list apartments__list--index swiper-wrapper">
                <?php
                  for ($i=1; $i < 4; $i++) {
                    ?>
                    <li class="apartments__slide swiper-slide">
                      <img data-src="img/apart-<?= $k; ?>.jpg" class="swiper-lazy" alt="apartment">
                      <div class="swiper-lazy-preloader"></div>
                    </li>
                    <?php
                  }
                ?>
              </ul>
              <div class="toggle toggle--index">
                <button class="toggle__button toggle__button--index toggle__button--prev--index toggle__button--prev" type="button" name="prev" aria-label="Previous image">
                  <svg class="toggle__icon toggle__icon--index" width="29" height="10">
                    <use xlink:href="#icon-arrow-big"></use>
                  </svg>
                </button>
                <button class="toggle__button toggle__button--index toggle__button--next--index toggle__button--next" type="button" name="next" aria-label="Next image">
                  <svg class="toggle__icon toggle__icon--index" width="29" height="10">
                    <use xlink:href="#icon-arrow-big"></use>
                  </svg>
                </button>
              </div>
            </div>

            <div class="apartments__content apartments__content--index">
              <p class="rating rating--index">
                <span class="rating__average">
                  4.68
                </span>
                <span class="rating__count">
                  (22)
                </span>
              </p>

              <h3 class="title title--apartments-inner">
                Luxurious Seaview Apartment 50m at Playa del Cura
              </h3>

              <ul class="features features--index">
                <li class="features__item features__item--index">
                  <h4 class="features__title features__title--index">
                    6 guests
                  </h4>
                </li>
                <li class="features__item features__item--index">
                  <h4 class="features__title features__title--index">
                    3 bedrooms
                  </h4>
                </li>
                <li class="features__item features__item--index">
                  <h4 class="features__title features__title--index">
                    5 beds
                  </h4>
                </li>
                <li class="features__item features__item--index">
                  <h4 class="features__title features__title--index">
                    2 baths
                  </h4>
                </li>
              </ul>

              <p class="text text--apartment">
                </p>
              <p class="text text--apartment">

              </p>
              <div class="apartments__text">
                <p>
                  Looking for space, comfort and a touch of luxury? This apartment has sea views and a fantastic location with easy access to the natural pools of Torrevieja and the beach «Playa del Cura». No rental car is required here.
                </p>
                <p>
                  Drink your coffee while watching the sea. The location is central next to the beach, restaurants and many shops. The supermarket is in the same street and public transport is within walking distance.
                </p>
              </div>

              <div class="apartments__bottom apartments__bottom--index">
                <p class="apartments__price apartments__price--index">
                  <span class="apartments__from apartments__from--index">
                    From
                  </span>
                  <span class="apartments__count apartments__count--index">
                    55
                  </span>
                  <span class="apartments__currency apartments__currency--index">
                    $
                  </span>
                  <span class="apartments__period apartments__period--index">
                    /night
                  </span>
                </p>

                <a class="apartments__more" href="#">
                  More info
                  <span>
                  </span>
                </a>
              </div>
            </div>
          </li>
        <?php
          endfor;
        ?>
      </ul>
    </div>
  </section>

  <div class="apartments apartments--bottom">
    <div class="apartments__wrapper apartments__wrapper--bottom">
      <section class="contact contact--index">
        <h2 class="title title--contact">
          Contact Us
        </h2>

        <p class="contact__text">
          to check available apartments on your dates
        </p>

        <form class="contact__form" id="contact-index" action="" method="post">
          <div class="contact__row">
            <label class="contact__label" for="name-1">Name</label>
            <input class="contact__field" id="name-1" type="text" name="name-1" placeholder="Name" required>

            <span class="contact__error">
              Error
            </span>
          </div>
          <div class="contact__row">
            <label class="contact__label" for="email-1">E-mail</label>
            <input class="contact__field" id="email-1" type="email" name="email-1" placeholder="E-mail" required>

            <span class="contact__error">
              Error
            </span>
          </div>
          <div class="contact__row">
            <label class="contact__label" for="phone-1">Phone number</label>
            <input class="contact__field" id="phone-1" type="tel" name="phone-1" placeholder="Phone number" required>

            <span class="contact__error">
              Error
            </span>
          </div>
          <div class="contact__row contact__row--message">
            <label class="contact__label" for="message-1">Your message</label>
            <textarea class="contact__field contact__field--message" id="message-1" name="message-1" placeholder="Tell us about approximate dates of staying, number of guests, apartment you like. and we will answer you about the possibility of booking an apartment for this time" required></textarea>

            <span class="contact__error">
              Error
            </span>
          </div>

          <button class="button button--contact" type="submit" name="contact-1">
            Contact us
          </button>
        </form>
      </section>
      <section class="services">
        <h2 class="title title--services">
          Our service
        </h2>
        <ul class="services__list">
          <li class="services__item">
            <svg class="services__icon" width="97" height="97" aria-label="services icon">
              <use xlink:href="#icon-service-1"></use>
            </svg>
            <h3 class="services__title">
              Cleaning
            </h3>
          </li>
          <li class="services__item">
            <svg class="services__icon" width="97" height="97" aria-label="services icon">
              <use xlink:href="#icon-service-3"></use>
            </svg>
            <h3 class="services__title">
              Purchase of products
            </h3>
          </li>
          <li class="services__item">
            <svg class="services__icon" width="97" height="97" aria-label="services icon">
              <use xlink:href="#icon-service-4"></use>
            </svg>
            <h3 class="services__title">
              Transfer
            </h3>
          </li>
          <li class="services__item">
            <svg class="services__icon" width="97" height="97" aria-label="services icon">
              <use xlink:href="#icon-service-2"></use>
            </svg>
            <h3 class="services__title">
              Always available for assistence
            </h3>
          </li>
        </ul>

        <div class="services__image">
          <img src="img/services.jpg" alt="services">
        </div>
      </section>
    </div>
  </div>
</main>

<?php
  include("footer.php");
?>

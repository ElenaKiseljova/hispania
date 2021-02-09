<?php
  include("header-inner.php");
?>

<main class="page-main">
  <section class="apartments apartments--top">
    <header class="apartments__header">
      <div class="apartments__wrapper apartments__wrapper--header">
        <h1 class="title title--page">
          Our <span>apartments</span>
        </h1>
        <div class="toggle toggle--page">
          <button class="toggle__button toggle__button--page toggle__button--prev-page toggle__button--prev" type="button" name="prev" aria-label="Previous apartament">
            <svg class="toggle__icon toggle__icon--page" width="16" height="16">
              <use xlink:href="#icon-arrow-small"></use>
            </svg>
          </button>

          <div class="fraction fraction--header"></div>

          <button class="toggle__button toggle__button--page toggle__button--next-page toggle__button--next" type="button" name="next" aria-label="Next apartament">
            <svg class="toggle__icon toggle__icon--page" width="16" height="16">
              <use xlink:href="#icon-arrow-small"></use>
            </svg>
          </button>
        </div>
      </div>
    </header>
    <div class="apartments__container apartments__container--slider swiper-container">
      <div class="apartments__page swiper-wrapper">
        <?php
          for ($k=1; $k < 4; $k++) :
        ?>
          <div class="apartments__item apartments__item--slider swiper-slide">
            <div class="apartments__wrapper apartments__wrapper--page">
              <div class="apartments__left">
                <div class="apartments__slider apartments__slider--page swiper-container" data-thumbs="thumbs-<?= $k; ?>">
                  <ul class="apartments__list apartments__list--page swiper-wrapper">
                    <?php
                      for ($i=1; $i < 7; $i++) {
                        ?>
                        <li class="apartments__slide apartments__slide--page swiper-slide">
                          <img data-src="img/apart-<?= $k; ?>.jpg" class="swiper-lazy" alt="apartment">
                          <div class="swiper-lazy-preloader"></div>
                        </li>
                        <?php
                      }
                    ?>
                  </ul>
                  <div class="toggle toggle--index">
                    <button class="toggle__button toggle__button--index toggle__button--prev--page toggle__button--prev" type="button" name="prev" aria-label="Previous image">
                      <svg class="toggle__icon toggle__icon--index" width="29" height="10">
                        <use xlink:href="#icon-arrow-big"></use>
                      </svg>
                    </button>
                    <button class="toggle__button toggle__button--index toggle__button--next--page toggle__button--next" type="button" name="next" aria-label="Next image">
                      <svg class="toggle__icon toggle__icon--index" width="29" height="10">
                        <use xlink:href="#icon-arrow-big"></use>
                      </svg>
                    </button>
                  </div>
                  <div class="fraction fraction--page"></div>
                  <div class="apartments__mask"></div>
                </div>
                <div class="thumbs swiper-container" id="thumbs-<?= $k; ?>">
                  <div class="thumbs__list swiper-wrapper">
                    <?php
                      for ($p=1; $p < 7; $p++) {
                        ?>
                        <div class="thumbs__item swiper-slide">
                          <img data-src="img/apart-<?= $k; ?>.jpg" class="swiper-lazy" alt="apartment">
                          <div class="swiper-lazy-preloader"></div>
                        </div>
                        <?php
                      }
                    ?>
                  </div>
                </div>
                <p class="apartments__price apartments__price--page">
                  <span class="apartments__from apartments__from--page">
                    From
                  </span>
                  <span class="apartments__count apartments__count--page">
                    55
                  </span>
                  <span class="apartments__currency apartments__currency--page">
                    $
                  </span>
                  <span class="apartments__period apartments__period--page">
                    /night
                  </span>
                </p>
              </div>
              <div class="apartments__content apartments__content--page">
                <h2 class="title title--apartments-page">
                  Luxurious Seaview Apartment 50m at Playa del Cura
                </h2>

                <div class="apartament__top">
                  <p class="rating rating--page">
                    <span class="rating__average">
                      4.68
                    </span>
                    <span class="rating__count">
                      (22)
                    </span>
                    <span class="rating__place">
                      on Airbnb
                    </span>
                  </p>

                  <button class="subline subline--location" type="button" name="location">
                    <svg width="14" height="14">
                      <use xlink:href="#icon-location"></use>
                    </svg>
                    <span>
                      Location
                    </span>
                  </button>
                </div>

                <ul class="features features--page">
                  <li class="features__item features__item--page">
                    <svg width="20" height="20">
                      <use xlink:href="#icon-guests"></use>
                    </svg>
                    <h4 class="features__title features__title--page">
                      6 guests
                    </h4>
                  </li>
                  <li class="features__item features__item--page">
                    <svg width="20" height="20">
                      <use xlink:href="#icon-bedrooms"></use>
                    </svg>
                    <h4 class="features__title features__title--page">
                      3 bedrooms
                    </h4>
                  </li>
                  <li class="features__item features__item--page">
                    <svg width="24" height="24">
                      <use xlink:href="#icon-beds"></use>
                    </svg>
                    <h4 class="features__title features__title--page">
                      5 beds
                    </h4>
                  </li>
                  <li class="features__item features__item--page">
                    <svg width="24" height="24">
                      <use xlink:href="#icon-baths"></use>
                    </svg>
                    <h4 class="features__title features__title--page">
                      2 baths
                    </h4>
                  </li>
                </ul>

                <div class="apartments__text">
                  <p>
                    Looking for space, comfort and a touch of luxury? This apartment has sea views and a fantastic location with easy access to the natural pools of Torrevieja and the beach "Playa del Cura". No rental car is required here. Drink your coffee while watching the sea. The location is central next to the beach, restaurants and many shops. The supermarket is in the same street and public transport is within walking distance.
                    <br>
                    Bye for now...
                  </p>
                </div>

                <h3 class="title title--small">
                  Sleeping arrangements
                </h3>

                <ul class="sleeping">
                  <li class="sleeping__item">
                    <div class="sleeping__icons">
                      <svg width="30" height="30">
                        <use xlink:href="#icon-queen-bed"></use>
                      </svg>
                    </div>

                    <h4 class="sleeping__title">
                      Bedroom 1
                    </h4>

                    <p class="sleeping__text">
                      1 queen bed
                    </p>
                  </li>
                  <li class="sleeping__item">
                    <div class="sleeping__icons">
                      <svg width="30" height="30">
                        <use xlink:href="#icon-single-bed"></use>
                      </svg>
                      <svg width="30" height="30">
                        <use xlink:href="#icon-single-bed"></use>
                      </svg>
                    </div>

                    <h4 class="sleeping__title">
                      Bedroom 2
                    </h4>

                    <p class="sleeping__text">
                      2 single beds
                    </p>
                  </li>
                  <li class="sleeping__item">
                    <div class="sleeping__icons">
                      <svg width="30" height="30">
                        <use xlink:href="#icon-single-bed"></use>
                      </svg>
                      <svg width="30" height="30">
                        <use xlink:href="#icon-single-bed"></use>
                      </svg>
                    </div>

                    <h4 class="sleeping__title">
                      Bedroom 3
                    </h4>

                    <p class="sleeping__text">
                      2 single beds
                    </p>
                  </li>
                </ul>

                <h3 class="title title--small">
                  Amenities
                </h3>

                <div class="amenities">
                  <ul>
                    <?php
                      for ($i=1; $i < 21; $i++) :
                    ?>
                    <li>
                      Carbon <?= $i ?>
                    </li>
                    <?php
                      endfor;
                    ?>
                  </ul>
                  <button class="subline subline--showall" type="button" name="showall">
                    <span>Show all</span>
                  </button>
                </div>

                <div class="apartments__bottom apartments__bottom--page">
                  <div class="check">
                    <h3 class="check__title">
                      Check availability, actual price and testimonials on AIRBNB
                    </h3>

                    <a class="button button--check-airbnb" href="#">
                      Check on Airbnb
                    </a>

                    <p class="check__text">
                      or
                    </p>

                    <h3 class="check__title">
                      Contact us directly and we will answer all your questions
                    </h3>

                    <a class="button button--check-contact" href="/contact-us.php">
                      Contact us
                    </a>
                  </div>

                </div>
              </div>
            </div>
          </div>
        <?php
          endfor;
        ?>
      </div>
    </div>
  </section>
</main>

<?php
  include("footer.php");
?>

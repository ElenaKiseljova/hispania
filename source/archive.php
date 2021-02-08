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

              </div>
              <div class="apartments__content">
                <p class="rating">
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

                <ul class="apartments__advantages">
                  <li>
                    6 guests
                  </li>
                  <li>
                    3 bedrooms
                  </li>
                  <li>
                    5 beds
                  </li>
                  <li>
                    2 baths
                  </li>
                </ul>

                <p class="text text--apartment">
                  Looking for space, comfort and a touch of luxury? This apartment has sea views and a fantastic location with easy access to the natural pools of Torrevieja and the beach «Playa del Cura». No rental car is required here.
                </p>
                <p class="text text--apartment">
                  Drink your coffee while watching the sea. The location is central next to the beach, restaurants and many shops. The supermarket is in the same street and public transport is within walking distance.
                </p>

                <div class="apartments__bottom">
                  <p class="apartments__price">
                    <span class="apartments__from">
                      From
                    </span>
                    <span class="apartments__count">
                      55
                    </span>
                    <span class="apartments__currency">
                      $
                    </span>
                    <span class="apartments__period">
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

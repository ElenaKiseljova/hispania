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

        <a class="button button--promo" href="#">
          Order a consultation
        </a>
        <div class="promo__bottom">
          <p class="text text--semi text--semi-large">
            3 comfortable apartments near the sea
          </p>
          <p class="text text--semi text--semi-short">
            More 100 satisfied clients
          </p>
        </div>
      </div>
      <div class="promo__image">
        <img src="img/promo.jpg" alt="promo">
      </div>
      <p class="promo__background">
        Comfort
      </p>
    </div>
  </section>

  <section class="apartments">
    <div class="apartments__wrapper">
      <h2 class="title title--apartments">
        Our apartments
      </h2>

      <ul class="apartments__container">
        <?php
          for ($k=1; $k < 4; $k++) :
        ?>
          <li class="apartments__item">
            <div class="apartments__slider apartments__slider--index swiper-container">
              <ul class="apartments__list swiper-wrapper">
                <?php
                  for ($i=1; $i < 4; $i++) {
                    ?>
                    <li class="apartments__slide swiper-slide">
                      <img src="img/apart-<?= $k; ?>.jpg" alt="apartment">
                    </li>
                    <?php
                  }
                ?>
              </ul>
              <div class="apartments__navigation apartments__navigation--index">
                <button class="apartments__button apartments__button--prev--index apartments__button--prev" type="button" name="prev" aria-label="Previous image">
                </button>
                <button class="apartments__button apartments__button--next--index apartments__button--next" type="button" name="next" aria-label="Next image">
                </button>
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
          </li>
        <?php
          endfor;
        ?>
      </ul>
    </div>
  </section>
</main>

<?php
  include("footer.php");
?>

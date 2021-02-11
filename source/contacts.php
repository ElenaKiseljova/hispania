<?php
  include("header-inner.php");
?>

<main class="page-main">
  <section class="apartments apartments--top">
    <header class="apartments__header">
      <div class="apartments__wrapper apartments__wrapper--header">
        <h1 class="title title--page">
          Contacts
        </h1>
      </div>
    </header>
  </section>
  <div class="apartments apartments--bottom">
    <div class="apartments__wrapper apartments__wrapper--bottom">
      <section class="contact contact--page">
        <h2 class="title title--contact-page">
          Contact Us
        </h2>

        <form class="contact__form" id="contact-index" action="" method="post">
          <div class="contact__row">
            <label class="contact__label" for="name-1">Name</label>
            <input class="contact__field" id="name-1" type="text" name="name-1" placeholder="Name" required>

            <span class="error error--contact">
              Error
            </span>
          </div>
          <div class="contact__row">
            <label class="contact__label" for="email-1">E-mail</label>
            <input class="contact__field" id="email-1" type="email" name="email-1" placeholder="E-mail" required>

            <span class="error error--contact">
              Error
            </span>
          </div>
          <div class="contact__row">
            <label class="contact__label" for="phone-1">Phone number</label>
            <input class="contact__field" id="phone-1" type="tel" name="phone-1" placeholder="Phone number" required>

            <span class="error error--contact">
              Error
            </span>
          </div>
          <div class="contact__row  contact__row--message-page">
            <label class="contact__label" for="message-1">Your message</label>
            <textarea class="contact__field contact__field--message" id="message-1" name="message-1" placeholder="Tell us about approximate dates of staying, number of guests, apartment you like. and we will answer you about the possibility of booking an apartment for this time" required></textarea>

            <span class="error error--contact">
              Error
            </span>
          </div>

          <button class="button button--contact" type="submit" name="contact-1">
            Contact us
          </button>
        </form>
      </section>
      <section class="contact contact--page">
        <h2 class="title title--contact">
          Our contacts
        </h2>

        <div class="contact__info">
          <a class="contact__mail" href="mailto:info@liijee.com">
            info@liijee.com
          </a>
          <a class="contact__phone" href="tel:+4915234370184">
            +49 1523 4370184
          </a>
        </div>
      </section>
    </div>
  </div>
</main>

<?php
  include("footer.php");
?>

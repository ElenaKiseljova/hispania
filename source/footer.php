
    <footer class="page-footer">
      <div class="page-footer__wrapper">
        <div class="page-footer__left">
          <div class="logo logo--footer">
            <a href="/">
              <img width="96" src="img/logo-footer.svg" alt="logo">
            </a>
          </div>

          <p class="page-footer__copyright">
            © 2021 all rights reserved
          </p>
        </div>

        <div class="page-footer__center">
          <div class="language language--footer">
            <div class="language__list language__list--footer" tabindex="0">
              <!-- GTranslate: https://gtranslate.io/ -->
              <a href="#" onclick="doGTranslate('en|en');return false;" title="English" class="glink nturl notranslate">EN</a>
              <a href="#" onclick="doGTranslate('en|de');return false;" title="German" class="glink nturl notranslate">DE</a>
              <a href="#" onclick="doGTranslate('en|ru');return false;" title="Russian" class="glink nturl notranslate">RU</a>
              <a href="#" onclick="doGTranslate('en|uk');return false;" title="Ukrainian" class="glink nturl notranslate">UK</a>
            </div>
          </div>

          <nav class="navigation navigation--footer" role="navigation">
            <ul class="navigation__list navigation__list--footer">
              <li>
                <a href="/privacy-policy.php">Data protection</a>
              </li>
              <li>
                <a href="/privacy-policy.php">Privacy Policy</a>
              </li>
            </ul>
          </nav>

        </div>

        <div class="page-footer__contact">
          <a class="button button--footer" href="/contact-us.php">Contact us</a>
        </div>
      </div>
    </footer>

    <?php
     $images = [
       '1' => ['img/apart-1.jpg', 'img/apart-1.jpg', 'img/apart-1.jpg', 'img/apart-1.jpg'],
       '2' => ['img/apart-2.jpg', 'img/apart-2.jpg', 'img/apart-2.jpg', 'img/apart-2.jpg'],
       '3' => ['img/apart-3.jpg', 'img/apart-3.jpg', 'img/apart-3.jpg', 'img/apart-3.jpg'],
     ];
    ?>
    <script type="text/javascript">
      var sliderImages = '<?php echo json_encode( $images ); ?>';
    </script>

    <div class="popup popup--slider">
      <div class="popup__slider swiper-container">
        <ul class="popup__list swiper-wrapper">

        </ul>
        <div class="toggle toggle--popup">
          <button class="toggle__button toggle__button--popup toggle__button--prev-popup toggle__button--prev" type="button" name="prev" aria-label="Previous apartament">
            <svg class="toggle__icon toggle__icon--popup" width="16" height="16">
              <use xlink:href="#icon-arrow-small"></use>
            </svg>
          </button>

          <button class="toggle__button toggle__button--popup toggle__button--next-popup toggle__button--next" type="button" name="next" aria-label="Next apartament">
            <svg class="toggle__icon toggle__icon--popup" width="16" height="16">
              <use xlink:href="#icon-arrow-small"></use>
            </svg>
          </button>
        </div>
        <div class="fraction fraction--popup"></div>
      </div>

      <button class="popup__close" type="button" name="close">
        <span class="visually-hidden">Закрыть</span>
      </button>
    </div>

    <div class="popup popup--map">
      <div class="popup__wrapper">
        <h2 class="popup__title">
          Calle Sol, 179, 03184 Torrevieja, Alicante, Spanien
        </h2>
        <button class="popup__close" type="button" name="close">
          <span class="visually-hidden">Закрыть</span>
        </button>
      </div>
      <div class="popup__map">
        <iframe class="popup__iframe" src="" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
        </iframe>
      </div>
    </div>
    <div class="popup__overlay"></div>

    <!-- header -->

    <script src="js/language.min.js"></script>
    <script src="js/menu.min.js"></script>

    <!-- swiper -->
    <script src="libs/swiper.min.js"></script>
    <script src="js/swiper-init.min.js"></script>

    <!-- contact form -->

    <script src="js/form.min.js"></script>

    <!-- apartments page -->

    <script src="js/apartments.min.js"></script>
    <script src="js/popup.min.js"></script>

    <!-- start GTranslate: https://gtranslate.io/ Styles & Scripts -->
    <style>
      #goog-gt-tt {display:none !important;}
      .goog-te-banner-frame {display:none !important;}
      .goog-te-menu-value:hover {text-decoration:none !important;}
      .goog-text-highlight {background-color:transparent !important;box-shadow:none !important;}
      body {top:0 !important;}
      #google_translate_element2 {display:none!important;}
    </style>
    <div id="google_translate_element2"></div>
    <script>
      function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
    </script>
    <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
    <script>
      function GTranslateGetCurrentLang() {var keyValue = document['cookie'].match('(^|;) ?googtrans=([^;]*)(;|$)');return keyValue ? keyValue[2].split('/')[2] : null;}
      function GTranslateFireEvent(element,event){try{if(document.createEventObject){var evt=document.createEventObject();element.fireEvent('on'+event,evt)}else{var evt=document.createEvent('HTMLEvents');evt.initEvent(event,true,true);element.dispatchEvent(evt)}}catch(e){}}
      function doGTranslate(lang_pair){if(lang_pair.value)lang_pair=lang_pair.value;if(lang_pair=='')return;var lang=lang_pair.split('|')[1];if(GTranslateGetCurrentLang() == null && lang == lang_pair.split('|')[0])return;var teCombo;var sel=document.getElementsByTagName('select');for(var i=0;i<sel.length;i++)if(sel[i].className.indexOf('goog-te-combo')!=-1){teCombo=sel[i];break;}if(document.getElementById('google_translate_element2')==null||document.getElementById('google_translate_element2').innerHTML.length==0||teCombo.length==0||teCombo.innerHTML.length==0){setTimeout(function(){doGTranslate(lang_pair)},500)}else{teCombo.value=lang;GTranslateFireEvent(teCombo,'change');GTranslateFireEvent(teCombo,'change')}}
    </script>

    <!-- end GTranslate: https://gtranslate.io/ Styles & Scripts -->
  </body>
</html>

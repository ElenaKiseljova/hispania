
    <footer class="page-footer">
      <div class="page-footer__wrapper">
        <div class="page-footer__left">
          <div class="logo logo--footer">
            <a href="/">
              <img width="96" src="img/logo-footer.svg" alt="logo">
            </a>
          </div>

          <div class="language language--footer">
            <div class="language__list language__list--footer" tabindex="0">
              <!-- GTranslate: https://gtranslate.io/ -->
              <a href="#" onclick="doGTranslate('en|en');return false;" title="English" class="glink nturl notranslate">EN</a>
              <a href="#" onclick="doGTranslate('en|de');return false;" title="German" class="glink nturl notranslate">DE</a>
              <a href="#" onclick="doGTranslate('en|ru');return false;" title="Russian" class="glink nturl notranslate">RU</a>
              <a href="#" onclick="doGTranslate('en|uk');return false;" title="Ukrainian" class="glink nturl notranslate">UK</a>
            </div>
          </div>

          <p class="page-footer__copyright">
            © 2021 all rights reserved
          </p>
        </div>
      </div>
    </footer>

    <section class="popup">
      <div class="popup__wrapper">
        <button class="popup__close" type="button" name="close">
          <span class="visually-hidden">Закрыть</span>
        </button>
      </div>
    </section>

    <div class="popup__overlay"></div>

    <!-- header -->

    <script src="js/language.min.js"></script>

    <!-- swiper -->
    <script src="libs/swiper.min.js"></script>
    <script src="js/swiper-init.min.js"></script>

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
  </body>
</html>

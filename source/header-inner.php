<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="libs/swiper.min.css">

    <title></title>
  </head>
  <body>
    <?php
      include("sprite.php");
    ?>
    <header class="page-header">
      <div class="page-header__wrapper">
        <div class="logo logo--header">
          <a href="/">
            <img width="96" src="img/logo.svg" alt="logo">
          </a>
        </div>

        <div class="language language--header">
          <div class="language__list language__list--header" tabindex="0">
            <!-- GTranslate: https://gtranslate.io/ -->
            <a href="#" onclick="doGTranslate('en|en');return false;" title="English" class="glink nturl notranslate">EN</a>
            <a href="#" onclick="doGTranslate('en|de');return false;" title="German" class="glink nturl notranslate">DE</a>
            <a href="#" onclick="doGTranslate('en|ru');return false;" title="Russian" class="glink nturl notranslate">RU</a>
            <a href="#" onclick="doGTranslate('en|uk');return false;" title="Ukrainian" class="glink nturl notranslate">UK</a>
          </div>
        </div>

        <nav class="navigation navigation--header" role="menu">
          <ul class="navigation__list navigation__list--header-inner">
            <li>
              <a href="/archive.php">Our projects</a>
            </li>
            <li>
              <a href="/contacts.php">Contacts</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <!-- Базовые мета-теги для поисковиков -->
  <title>Заголовок</title>

  <!-- Иконки для страницы -->
  <link rel="shortcut icon" href="img/favicons/favicon.ico" type="image/x-icon">
  <link rel="icon" sizes="16x16" href="img/favicons/favicon-16x16.png" type="image/png">
  <link rel="icon" sizes="32x32" href="img/favicons/favicon-32x32.png" type="image/png">
  <link rel="apple-touch-icon-precomposed" href="img/favicons/apple-touch-icon-precomposed.png">
  <link rel="apple-touch-icon" href="img/favicons/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="img/favicons/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="167x167" href="img/favicons/apple-touch-icon-167x167.png">
  <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon-180x180.png">
  <link rel="apple-touch-icon" sizes="1024x1024" href="img/favicons/apple-touch-icon-1024x1024.png">

  <!-- Метатеги которые выводят информацию о странице в поисковой запрос -->
  <meta name="description" content="описание не длиннее 155 символов" />
  <meta name="keywords" content="мета-теги, шаблон, html, css, acr0matic" />

  <!-- Метатеги для ссылок в социальных сетях -->
  <meta property="og:locale" content="ru_RU" />
  <meta property="og:title" content="">
  <meta property="og:description" content="" />
  <meta property="og:image" content="">

  <!-- Контролирует поведение поисковых систем при индексации страницы -->
  <meta name="robots" content="index,follow" />

  <!-- Покраска адресной строки в мобильных Chrome, Firefox OS и Opera -->
  <meta name="theme-color" content="#4285f4" />

  <!-- Покраска для iOS Safari -->
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="#4285f4">

  <!-- Убрать автоматическое определение номера телефона -->
  <meta name="format-detection" content="telephone=no">

  <!-- Место для счетков и аналитики -->

  <!-- Место для счетков и аналитики -->

  <!-- Стили -->
  <!-- build:css css/style.min.css -->
  <link rel="stylesheet" href="css/style.css" />
  <!-- endbuild -->
</head>

<body>
  <!-- Шапка -->
  <header id="header" class="header">
    <div class="container">
      <div class="header__wrapper">
        <div class="header__logo logo logo--header">
          <a href="">
            <img src="img/logo.png" alt="">
          </a>
        </div>
        <!-- /.header__logo -->

        <div class="header__nav d-none d-lg-block">
          <nav class="nav nav--header">
            <ul class="nav__list">
              <li class="nav__item link">
                <a class="nav__link" href="">Проекты</a>
              </li>

              <li class="nav__item link">
                <a class="nav__link" href="">Услуги</a>
              </li>

              <li class="nav__item link">
                <a class="nav__link" href="">Цены</a>
              </li>

              <li class="nav__item link">
                <a class="nav__link" href="">О нас</a>
              </li>

              <li class="nav__item link">
                <a class="nav__link" href="">Контакты</a>
              </li>
            </ul>
          </nav>
          <!-- /.nav -->
        </div>
        <!-- /.header__nav -->

        <div class="header__action d-none d-lg-block">
          <div class="callback-list">
            <div class="callback-list__item">
              <a class="link link--icon" href="tel:+77777777777">
                <img class="callback-list__icon" src="img/icons/contact/phone.svg" alt="">
                <span class="link__text callback-list__text">+7 777 777 77 77</span>
              </a>
            </div>
            <!-- /.callback-list__item -->
          </div>
          <!-- /.callback-list -->
        </div>
        <!-- /.header__action -->

        <div class="header__burger d-block d-lg-none ms-auto ms-lg-4">
          <button class="hamburger hamburger--squeeze" type="button">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
        </div>
        <!-- /.header__burger -->
      </div>
      <!-- /.header__wrapper -->
    </div>
    <!-- /.container -->

   <?php include_once('menu/mobile.php') ?>
  </header>
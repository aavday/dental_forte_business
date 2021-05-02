<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); 
use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <? $APPLICATION->ShowHead();  ?>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title><? $APPLICATION->ShowTitle(false); ?></title>
    <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" type="image/x-icon"/>
    <link rel="icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" type="image/x-icon"/>
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/libs/css-libs.min.css") ?>
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bundle.min.css") ?>
    <? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/libs/js-libs.min.js") ?>
    <? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/script.min.js") ?>
    <? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/template.js") ?>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=eff7a67d-abe4-44c8-ad01-4221d11c84ea&amp;lang=ru_RU"></script>
  </head>
  <body>
    <? if($GLOBALS["USER"]->IsAuthorized()): ?>
      <div id="panel">
        <?$APPLICATION->ShowPanel();?>
      </div>
    <? endif; ?>
    <div id="preloader">
      <div class="loader-container"></div>
    </div>
    <header class="header">
      <div class="container">
        <nav class="navbar navbar-expand-lg">
          <div class="header__right"><a class="logo" href="/"><img class="logo-img" src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" alt="Логотип компании"/><img class="logo-img-mobile" src="<?=SITE_TEMPLATE_PATH?>/images/logo-mobile.png" alt="Логотип компании"/></a>
            <div class="collapse navbar-collapse" id="navbarHeader">
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">О нас</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Услуги</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Наши клиенты</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Контакты</a></li>
              </ul>
              <div class="header__mobile">
                <div class="header__town">
                  <h5 class="header__town__current">Набережные Челны</h5><a class="header__town__address" href="#">бул. Г. Камала, 24а (27/04 а)</a>
                </div>
                <div class="header__phone"><a class="header__phone__number" href="tel:88552202726">8 8552 20 27 26</a>
                  <button class="dental-btn header__phone__btn" data-toggle="modal" data-target="#feedbackModal">Заказать звонок</button>
                </div>
                <div class="header__social"><a class="header__social__link instagram-link" href="#"></a><a class="header__social__link vk-link" href="#"></a></div>
              </div>
            </div>
          </div>
          <div class="header__left">
            <div class="header__town">
              <h5 class="header__town__current">Набережные Челны</h5><a class="header__town__address" href="#">бул. Г. Камала, 24а (27/04 а)</a>
            </div>
            <div class="header__phone"><a class="header__phone__number" href="tel:88552202726">8 8552 20 27 26</a>
              <button class="dental-btn header__phone__btn" data-toggle="modal" data-target="#feedbackModal">Заказать звонок</button>
            </div>
            <div class="header__social"><a class="header__social__link instagram-link" href="#"></a><a class="header__social__link vk-link" href="#"></a></div>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <div class="menu"><span class="bar"></span><span class="bar"></span></div>
          </button>
        </nav>
      </div>
    </header>
    <div id="main">

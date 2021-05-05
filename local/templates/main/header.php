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
          <div class="header__right">
            <a class="logo" href="/">
              <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                  "AREA_FILE_SHOW" => "file",
                  "PATH" => "/includes/header/logo.html"
                )
              );?>
            </a>
            <div class="collapse navbar-collapse" id="navbarHeader">
              <?$APPLICATION->IncludeComponent("bitrix:menu","main_menu",Array(
                    "ROOT_MENU_TYPE" => "top", 
                    "MAX_LEVEL" => "1", 
                    "CHILD_MENU_TYPE" => "top", 
                    "USE_EXT" => "Y",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "Y",
                    "MENU_CACHE_TYPE" => "N", 
                    "MENU_CACHE_TIME" => "3600", 
                    "MENU_CACHE_USE_GROUPS" => "Y", 
                    "MENU_CACHE_GET_VARS" => "" 
                )
              );?>
              <div class="header__mobile">
                <div class="header__town">
                  <h5 class="header__town__current">
                    <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/includes/header/city.html"
                      )
                    );?>
                  </h5>
                  <a class="header__town__address" href="#">
                    <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/includes/header/address.html"
                      )
                    );?>
                  </a>
                </div>
                <div class="header__phone">
                  <a class="header__phone__number" href="tel:<?include($_SERVER["DOCUMENT_ROOT"] . "/includes/common/phone.html")?>">
                    <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/includes/common/phone.html"
                      )
                    );?>
                  </a>
                  <button class="dental-btn header__phone__btn" data-toggle="modal" data-target="#feedbackModal">Заказать звонок</button>
                </div>
                <div class="header__social">
                  <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/includes/header/instagram.html"
                      )
                  );?>
                  <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/includes/header/vk.html"
                      )
                  );?>
                </div>
              </div>
            </div>
          </div>
          <div class="header__left">
            <div class="header__town">
              <h5 class="header__town__current">
                <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => "/includes/header/city.html"
                  )
                );?>
              </h5>
              <a class="header__town__address" href="#">
                <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => "/includes/header/address.html"
                  )
                );?>
              </a>
            </div>
            <div class="header__phone">
              <a class="header__phone__number" href="tel:<?include($_SERVER["DOCUMENT_ROOT"] . "/includes/common/phone.html")?>">
                <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => "/includes/common/phone.html"
                  )
                );?>
              </a>
              <button class="dental-btn header__phone__btn" data-toggle="modal" data-target="#feedbackModal">Заказать звонок</button>
            </div>
            <?$APPLICATION->IncludeComponent("bitrix:news.list","socials",Array(
              "DISPLAY_DATE" => "Y",
              "DISPLAY_NAME" => "Y",
              "DISPLAY_PICTURE" => "Y",
              "DISPLAY_PREVIEW_TEXT" => "Y",
              "AJAX_MODE" => "Y",
              "IBLOCK_TYPE" => "main",
              "IBLOCK_ID" => "1",
              "NEWS_COUNT" => "20",
              "SORT_BY1" => "ID",
              "SORT_ORDER1" => "ASC",
              "SORT_BY2" => "SORT",
              "SORT_ORDER2" => "ASC",
              "FILTER_NAME" => "",
              "FIELD_CODE" => Array("CODE"),
              "PROPERTY_CODE" => Array("LINK"),
              "CHECK_DATES" => "Y",
              "DETAIL_URL" => "",
              "PREVIEW_TRUNCATE_LEN" => "",
              "ACTIVE_DATE_FORMAT" => "d.m.Y",
              "SET_TITLE" => "N",
              "SET_BROWSER_TITLE" => "Y",
              "SET_META_KEYWORDS" => "Y",
              "SET_META_DESCRIPTION" => "Y",
              "SET_LAST_MODIFIED" => "Y",
              "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
              "ADD_SECTIONS_CHAIN" => "Y",
              "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
              "PARENT_SECTION" => "",
              "PARENT_SECTION_CODE" => "",
              "INCLUDE_SUBSECTIONS" => "Y",
              "CACHE_TYPE" => "A",
              "CACHE_TIME" => "3600",
              "CACHE_FILTER" => "Y",
              "CACHE_GROUPS" => "Y",
              "DISPLAY_TOP_PAGER" => "Y",
              "DISPLAY_BOTTOM_PAGER" => "Y",
              "PAGER_TITLE" => "Новости",
              "PAGER_SHOW_ALWAYS" => "Y",
              "PAGER_TEMPLATE" => "",
              "PAGER_DESC_NUMBERING" => "Y",
              "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
              "PAGER_SHOW_ALL" => "Y",
              "PAGER_BASE_LINK_ENABLE" => "Y",
              "SET_STATUS_404" => "Y",
              "SHOW_404" => "Y",
              "MESSAGE_404" => "",
              "PAGER_BASE_LINK" => "",
              "PAGER_PARAMS_NAME" => "arrPager",
              "AJAX_OPTION_JUMP" => "N",
              "AJAX_OPTION_STYLE" => "Y",
              "AJAX_OPTION_HISTORY" => "N",
              "AJAX_OPTION_ADDITIONAL" => ""
              )
            );?>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <div class="menu"><span class="bar"></span><span class="bar"></span></div>
          </button>
        </nav>
      </div>
    </header>
    <div id="main">

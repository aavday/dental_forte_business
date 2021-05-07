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
            <?$APPLICATION->IncludeComponent("bitrix:news.detail","header_logos",Array(
              "DISPLAY_DATE" => "Y",
              "DISPLAY_NAME" => "Y",
              "DISPLAY_PICTURE" => "Y",
              "DISPLAY_PREVIEW_TEXT" => "Y",
              "USE_SHARE" => "Y",
              "SHARE_HIDE" => "N",
              "SHARE_TEMPLATE" => "",
              "SHARE_HANDLERS" => array("delicious"),
              "SHARE_SHORTEN_URL_LOGIN" => "",
              "SHARE_SHORTEN_URL_KEY" => "",
              "AJAX_MODE" => "Y",
              "IBLOCK_TYPE" => "main",
              "IBLOCK_ID" => "6",
              "ELEMENT_ID" => "21",
              "ELEMENT_CODE" => "",
              "CHECK_DATES" => "Y",
              "FIELD_CODE" => Array(""),
              "PROPERTY_CODE" => Array("LOGO", "LOGO_MOB"),
              "IBLOCK_URL" => "news.php?ID=#IBLOCK_ID#\"",
              "DETAIL_URL" => "",
              "SET_TITLE" => "Y",
              "SET_CANONICAL_URL" => "Y",
              "SET_BROWSER_TITLE" => "Y",
              "BROWSER_TITLE" => "-",
              "SET_META_KEYWORDS" => "Y",
              "META_KEYWORDS" => "-",
              "SET_META_DESCRIPTION" => "Y",
              "META_DESCRIPTION" => "-",
              "SET_STATUS_404" => "Y",
              "SET_LAST_MODIFIED" => "Y",
              "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
              "ADD_SECTIONS_CHAIN" => "Y",
              "ADD_ELEMENT_CHAIN" => "N",
              "ACTIVE_DATE_FORMAT" => "d.m.Y",
              "USE_PERMISSIONS" => "Y",
              "GROUP_PERMISSIONS" => Array("1"),
              "CACHE_TYPE" => "A",
              "CACHE_TIME" => "3600",
              "CACHE_GROUPS" => "Y",
              "DISPLAY_TOP_PAGER" => "Y",
              "DISPLAY_BOTTOM_PAGER" => "Y",
              "PAGER_TITLE" => "Страница",
              "PAGER_TEMPLATE" => "",
              "PAGER_SHOW_ALL" => "Y",
              "PAGER_BASE_LINK_ENABLE" => "Y",
              "SHOW_404" => "Y",
              "MESSAGE_404" => "",
              "STRICT_SECTION_CHECK" => "Y",
              "PAGER_BASE_LINK" => "",
              "PAGER_PARAMS_NAME" => "arrPager",
              "AJAX_OPTION_JUMP" => "N",
              "AJAX_OPTION_STYLE" => "Y",
              "AJAX_OPTION_HISTORY" => "N"
              )
            );?>
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
                <?$APPLICATION->IncludeComponent("bitrix:news.detail","header_mobile",Array(
                  "DISPLAY_DATE" => "Y",
                  "DISPLAY_NAME" => "Y",
                  "DISPLAY_PICTURE" => "Y",
                  "DISPLAY_PREVIEW_TEXT" => "Y",
                  "USE_SHARE" => "Y",
                  "SHARE_HIDE" => "N",
                  "SHARE_TEMPLATE" => "",
                  "SHARE_HANDLERS" => array("delicious"),
                  "SHARE_SHORTEN_URL_LOGIN" => "",
                  "SHARE_SHORTEN_URL_KEY" => "",
                  "AJAX_MODE" => "Y",
                  "IBLOCK_TYPE" => "main",
                  "IBLOCK_ID" => "6",
                  "ELEMENT_ID" => "21",
                  "ELEMENT_CODE" => "",
                  "CHECK_DATES" => "Y",
                  "FIELD_CODE" => Array(""),
                  "PROPERTY_CODE" => Array("CITY", "ADDRESS", "PHONE", "INSTAGRAM", "VK"),
                  "IBLOCK_URL" => "news.php?ID=#IBLOCK_ID#\"",
                  "DETAIL_URL" => "",
                  "SET_TITLE" => "Y",
                  "SET_CANONICAL_URL" => "Y",
                  "SET_BROWSER_TITLE" => "Y",
                  "BROWSER_TITLE" => "-",
                  "SET_META_KEYWORDS" => "Y",
                  "META_KEYWORDS" => "-",
                  "SET_META_DESCRIPTION" => "Y",
                  "META_DESCRIPTION" => "-",
                  "SET_STATUS_404" => "Y",
                  "SET_LAST_MODIFIED" => "Y",
                  "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                  "ADD_SECTIONS_CHAIN" => "Y",
                  "ADD_ELEMENT_CHAIN" => "N",
                  "ACTIVE_DATE_FORMAT" => "d.m.Y",
                  "USE_PERMISSIONS" => "Y",
                  "GROUP_PERMISSIONS" => Array("1"),
                  "CACHE_TYPE" => "A",
                  "CACHE_TIME" => "3600",
                  "CACHE_GROUPS" => "Y",
                  "DISPLAY_TOP_PAGER" => "Y",
                  "DISPLAY_BOTTOM_PAGER" => "Y",
                  "PAGER_TITLE" => "Страница",
                  "PAGER_TEMPLATE" => "",
                  "PAGER_SHOW_ALL" => "Y",
                  "PAGER_BASE_LINK_ENABLE" => "Y",
                  "SHOW_404" => "Y",
                  "MESSAGE_404" => "",
                  "STRICT_SECTION_CHECK" => "Y",
                  "PAGER_BASE_LINK" => "",
                  "PAGER_PARAMS_NAME" => "arrPager",
                  "AJAX_OPTION_JUMP" => "N",
                  "AJAX_OPTION_STYLE" => "Y",
                  "AJAX_OPTION_HISTORY" => "N"
                  )
                );?>
            </div>
          </div>
          <?$APPLICATION->IncludeComponent("bitrix:news.detail","header_left",Array(
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "USE_SHARE" => "Y",
            "SHARE_HIDE" => "N",
            "SHARE_TEMPLATE" => "",
            "SHARE_HANDLERS" => array("delicious"),
            "SHARE_SHORTEN_URL_LOGIN" => "",
            "SHARE_SHORTEN_URL_KEY" => "",
            "AJAX_MODE" => "Y",
            "IBLOCK_TYPE" => "main",
            "IBLOCK_ID" => "6",
            "ELEMENT_ID" => "21",
            "ELEMENT_CODE" => "",
            "CHECK_DATES" => "Y",
            "FIELD_CODE" => Array(""),
            "PROPERTY_CODE" => Array("CITY", "ADDRESS", "PHONE", "INSTAGRAM", "VK"),
            "IBLOCK_URL" => "news.php?ID=#IBLOCK_ID#\"",
            "DETAIL_URL" => "",
            "SET_TITLE" => "Y",
            "SET_CANONICAL_URL" => "Y",
            "SET_BROWSER_TITLE" => "Y",
            "BROWSER_TITLE" => "-",
            "SET_META_KEYWORDS" => "Y",
            "META_KEYWORDS" => "-",
            "SET_META_DESCRIPTION" => "Y",
            "META_DESCRIPTION" => "-",
            "SET_STATUS_404" => "Y",
            "SET_LAST_MODIFIED" => "Y",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
            "ADD_SECTIONS_CHAIN" => "Y",
            "ADD_ELEMENT_CHAIN" => "N",
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "USE_PERMISSIONS" => "Y",
            "GROUP_PERMISSIONS" => Array("1"),
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "3600",
            "CACHE_GROUPS" => "Y",
            "DISPLAY_TOP_PAGER" => "Y",
            "DISPLAY_BOTTOM_PAGER" => "Y",
            "PAGER_TITLE" => "Страница",
            "PAGER_TEMPLATE" => "",
            "PAGER_SHOW_ALL" => "Y",
            "PAGER_BASE_LINK_ENABLE" => "Y",
            "SHOW_404" => "Y",
            "MESSAGE_404" => "",
            "STRICT_SECTION_CHECK" => "Y",
            "PAGER_BASE_LINK" => "",
            "PAGER_PARAMS_NAME" => "arrPager",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "AJAX_OPTION_HISTORY" => "N"
            )
          );?>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <div class="menu"><span class="bar"></span><span class="bar"></span></div>
          </button>
        </nav>
      </div>
    </header>
    <div id="main">

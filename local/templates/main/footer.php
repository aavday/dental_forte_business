<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die;
?>
</div>
    <footer class="footer sticky_footer">
      <div class="container">
        <div class="footer__wrapper">
          <?$APPLICATION->IncludeComponent("bitrix:news.detail","copyright",Array(
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
            "PROPERTY_CODE" => Array("COPYRIGHT"),
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
            "USE_PERMISSIONS" => "N",
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
          <a class="itchelny" href="https://www.itchelny.ru/">
            <p>Создание и поддержка –</p><img src="<?=SITE_TEMPLATE_PATH?>/images/icons/itchelny-icon.png" alt="Логотип ITChelny"/>
          </a>
        </div>
      </div>
    </footer>
    <div class="modal modal-feedback fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="feedbackLabel">Заказ звонка</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <form action="" class="callback-request">
              <input class="dental-input" type="text" placeholder="Ваше имя" name="Имя"/>
              <input class="dental-input" type="text" placeholder="Ваш номер телефона" name="Телефон"/>
              <button class="dental-btn">Заказать звонок</button>
              <input type="hidden" name="subject" value="Заявка на обратный звонок">
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die;
?>
</div>
    <footer class="footer sticky_footer">
      <div class="container">
        <div class="footer__wrapper">
          <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
              "AREA_FILE_SHOW" => "file",
              "PATH" => "/includes/footer/copyright.html"
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
            <input class="dental-input" type="text" placeholder="Ваше имя"/>
            <input class="dental-input" type="text" placeholder="Ваш номер телефона"/>
            <button class="dental-btn">Заказать звонок</button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
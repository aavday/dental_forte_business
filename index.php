<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Dental Forte');
?>
<section class="slider"> 
	<?$APPLICATION->IncludeComponent("bitrix:news.list","main_slider",Array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"AJAX_MODE" => "Y",
		"IBLOCK_TYPE" => "main",
		"IBLOCK_ID" => "3",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ID",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => Array("NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE"),
		"PROPERTY_CODE" => Array(""),
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
</section>
<section class="about">
	<div class="container">
		<h4 class="subtitle subtitle-mobile"><span><a href="#">О компании</a></span></h4>
		<div class="row">
			<div class="col-lg-5 col-xl-6">
				<div class="about-img">
					<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => "/includes/main_page/about_img.html"
						)
					);?>
				</div>
			</div>
			<div class="col-lg-7 col-xl-6">
				<div class="about-right">
					<h4 class="subtitle"><span><a href="#">О компании</a></span></h4>
					<p>
						<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => "/includes/main_page/about_text.html"
							)
						);?>
					</p>
					<a href="#">
						<button class="dental-btn-small">Подробнее</button>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="services">
	<div class="container">
		<div class="services__wrapper">
			<h4 class="subtitle subtitle-divider text-center"><span><a href="#">Услуги</a></span></h4>
			<?$APPLICATION->IncludeComponent("bitrix:news.list","services",Array(
              "DISPLAY_DATE" => "Y",
              "DISPLAY_NAME" => "Y",
              "DISPLAY_PICTURE" => "Y",
              "DISPLAY_PREVIEW_TEXT" => "Y",
              "AJAX_MODE" => "Y",
              "IBLOCK_TYPE" => "main",
              "IBLOCK_ID" => "2",
              "NEWS_COUNT" => "20",
              "SORT_BY1" => "ID",
              "SORT_ORDER1" => "ASC",
              "SORT_BY2" => "SORT",
              "SORT_ORDER2" => "ASC",
              "FILTER_NAME" => "",
              "FIELD_CODE" => Array("NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE"),
              "PROPERTY_CODE" => Array(""),
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
	</div>
</section>
<section class="advantages">
	<div class="container">
		<h4 class="subtitle text-center">Преимущества работы с нами</h4>
		<div class="row"> 
			<div class="col-lg-4 col-xl-4">
				<div class="advantages__item"><img class="advantages__item__img" src="<?=SITE_TEMPLATE_PATH?>/images/advantages/advantage-img-1.png" alt="Преимущества 1"/>
					<p class="advantages__item__text">Решение вопросов<br> в кратчайшие сроки</p>
				</div>
			</div>
			<div class="col-lg-4 col-xl-4">
				<div class="advantages__item"><img class="advantages__item__img" src="<?=SITE_TEMPLATE_PATH?>/images/advantages/advantage-img-2.png" alt="Преимущества 2"/>
					<p class="advantages__item__text"><span>100%</span><br> конфиденциальность</p>
				</div>
			</div>
			<div class="col-lg-4 col-xl-4">
				<div class="advantages__item"><img class="advantages__item__img" src="<?=SITE_TEMPLATE_PATH?>/images/advantages/advantage-img-3.png" alt="Преимущества 3"/>
					<p class="advantages__item__text">Высокое качество<br> оказываемых услуг</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="partners">
	<div class="container">  
		<h4 class="subtitle subtitle-divider text-center"><span><a href="#">Наши клиенты</a></span></h4>
		<div class="owl-carousel owl-theme" id="partner-slider">
			<div class="item"><img class="partners-img" src="<?=SITE_TEMPLATE_PATH?>/images/partners/partners-logo-1.png" alt="Лого партнера 1"/></div>
			<div class="item"><img class="partners-img" src="<?=SITE_TEMPLATE_PATH?>/images/partners/partners-logo-2.png" alt="Лого партнера 2"/></div>
			<div class="item"><img class="partners-img" src="<?=SITE_TEMPLATE_PATH?>/images/partners/partners-logo-3.png" alt="Лого партнера 3"/></div>
			<div class="item"><img class="partners-img" src="<?=SITE_TEMPLATE_PATH?>/images/partners/partners-logo-1.png" alt="Лого партнера 1"/></div>
			<div class="item"><img class="partners-img" src="<?=SITE_TEMPLATE_PATH?>/images/partners/partners-logo-2.png" alt="Лого партнера 2"/></div>
			<div class="item"><img class="partners-img" src="<?=SITE_TEMPLATE_PATH?>/images/partners/partners-logo-3.png" alt="Лого партнера 3"/></div>
		</div>
	</div>
</section>
<section class="contact">
	<div class="container"> 
		<div class="contact__block">
			<h3 class="contact__block__title">Контакты</h3>
			<h4 class="contact__block__town">
				<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => "/includes/contacts/address.html"
					)
				);?>
			</h4>
			<a class="contact__block__phone" href="tel:<?include($_SERVER["DOCUMENT_ROOT"] . "/includes/common/phone.html")?>">
				<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => "/includes/common/phone.html"
					)
				);?>
			</a><br>
			<a class="contact__block__mail" href="mailto:<?include($_SERVER["DOCUMENT_ROOT"] . "/includes/common/mail.html")?>">
				<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => "/includes/common/mail.html"
					)
				);?>
			</a><br>
			<button class="dental-btn contact__block__btn" data-toggle="modal" data-target="#feedbackModal">Заказать звонок</button>
		</div>
	</div>
	<div class="map">
		<div id="map-card"></div>
	</div>
</section>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
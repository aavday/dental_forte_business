<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (!empty($arResult)):
?>
    <section class="contact">
        <?$this->AddEditAction($arResult['ID'], $arResult['EDIT_LINK'], CIBlock::GetArrayByID($arResult['IBLOCK_ID'], 'ELEMENT_EDIT'))?>
        <?$this->AddDeleteAction($arResult['ID'], $arResult['DELETE_LINK'], CIBlock::GetArrayByID($arResult['IBLOCK_ID'], 'ELEMENT_DELETE'))?>
        <div class="container">
            <div class="contact__block">
                <h3 class="contact__block__title">Контакты</h3>
                <h4 class="contact__block__town">
                    <?=$arResult['DISPLAY_PROPERTIES']['ADDRESS_FULL']['~VALUE']['TEXT']?>
                </h4>
                <a class="contact__block__phone" href="tel:<?=$arResult['DISPLAY_PROPERTIES']['PHONE']['VALUE']?>">
                    <?=$arResult['DISPLAY_PROPERTIES']['PHONE']['VALUE']?>
                </a><br>
                <a class="contact__block__mail" href="mailto:<?=$arResult['DISPLAY_PROPERTIES']['EMAIL']['VALUE']?>">
                    <?=$arResult['DISPLAY_PROPERTIES']['EMAIL']['VALUE']?>
                </a><br>
                <button class="dental-btn contact__block__btn" data-toggle="modal" data-target="#feedbackModal">Заказать звонок</button>
            </div>
        </div>
        <div class="map">
            <div id="map-card"></div>
        </div>
    </section>
<?endif?>
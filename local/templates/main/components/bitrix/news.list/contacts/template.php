<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (!empty($arResult)):
?>
    <section class="contact">
        <?$this->AddEditAction($arResult['ITEMS'][0]['ID'], $arResult['ITEMS'][0]['EDIT_LINK'], CIBlock::GetArrayByID($arResult['ITEMS'][0]['IBLOCK_ID'], 'ELEMENT_EDIT'))?>
        <?$this->AddDeleteAction($arResult['ITEMS'][0]['ID'], $arResult['ITEMS'][0]['DELETE_LINK'], CIBlock::GetArrayByID($arResult['ITEMS'][0]['IBLOCK_ID'], 'ELEMENT_DELETE'))?>
        <div class="container">
            <div class="contact__block" id="<?=$this->GetEditAreaId($arResult['ITEMS'][0]['ID'])?>">
                <h3 class="contact__block__title">Контакты</h3>
                <h4 class="contact__block__town">
                    <?=$arResult['ITEMS'][0]['DISPLAY_PROPERTIES']['ADDRESS_FULL']['VALUE']['HTML']?>
                </h4>
                <a class="contact__block__phone" href="tel:<?=$arResult['ITEMS'][0]['DISPLAY_PROPERTIES']['PHONE']['VALUE']?>">
                    <?=$arResult['ITEMS'][0]['DISPLAY_PROPERTIES']['PHONE']['VALUE']?>
                </a><br>
                <a class="contact__block__mail" href="mailto:<?=$arResult['ITEMS'][0]['DISPLAY_PROPERTIES']['EMAIL']['VALUE']?>">
                    <?=$arResult['ITEMS'][0]['DISPLAY_PROPERTIES']['EMAIL']['VALUE']?>
                </a><br>
                <button class="dental-btn contact__block__btn" data-toggle="modal" data-target="#feedbackModal">Заказать звонок</button>
            </div>
        </div>
        <div class="map">
            <div id="map-card"></div>
        </div>
    </section>
<?endif?>
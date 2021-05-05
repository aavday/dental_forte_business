<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (!empty($arResult)):
?>
    <?$this->AddEditAction($arResult['ITEMS'][0]['ID'], $arResult['ITEMS'][0]['EDIT_LINK'], CIBlock::GetArrayByID($arResult['ITEMS'][0]['IBLOCK_ID'], 'ELEMENT_EDIT'))?>
    <?$this->AddDeleteAction($arResult['ITEMS'][0]['ID'], $arResult['ITEMS'][0]['DELETE_LINK'], CIBlock::GetArrayByID($arResult['ITEMS'][0]['IBLOCK_ID'], 'ELEMENT_DELETE'))?>
    <div class="header__mobile" id="<?=$this->GetEditAreaId($arResult['ITEMS'][0]['ID'])?>">
        <div class="header__town">
            <h5 class="header__town__current">
                <?=$arResult['ITEMS'][0]['DISPLAY_PROPERTIES']['CITY']['VALUE']?>
            </h5>
            <a class="header__town__address" href="#"><?=$arResult['ITEMS'][0]['DISPLAY_PROPERTIES']['ADDRESS']['VALUE']?></a>
        </div>
        <div class="header__phone">
            <a class="header__phone__number" href="tel:<?=$arResult['ITEMS'][0]['DISPLAY_PROPERTIES']['PHONE']['VALUE']?>">
                <?=$arResult['ITEMS'][0]['DISPLAY_PROPERTIES']['PHONE']['VALUE']?>
            </a>
            <button class="dental-btn header__phone__btn" data-toggle="modal" data-target="#feedbackModal">Заказать звонок</button>
        </div>
        <div class="header__social">
            <a class="header__social__link instagram-link" href="<?=$arResult['ITEMS'][0]['DISPLAY_PROPERTIES']['INSTAGRAM']['VALUE']?>"></a>
            <a class="header__social__link vk-link" href="<?=$arResult['ITEMS'][0]['DISPLAY_PROPERTIES']['VK']['VALUE']?>"></a>
        </div>
    </div>
<?endif?>
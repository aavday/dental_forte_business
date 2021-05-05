<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (!empty($arResult)):
?>
    <?$this->AddEditAction($arResult['ITEMS'][0]['ID'], $arResult['ITEMS'][0]['EDIT_LINK'], CIBlock::GetArrayByID($arResult['ITEMS'][0]['IBLOCK_ID'], 'ELEMENT_EDIT'))?>
    <?$this->AddDeleteAction($arResult['ITEMS'][0]['ID'], $arResult['ITEMS'][0]['DELETE_LINK'], CIBlock::GetArrayByID($arResult['ITEMS'][0]['IBLOCK_ID'], 'ELEMENT_DELETE'))?>
    <a class="logo" href="/" id="<?=$this->GetEditAreaId($arResult['ITEMS'][0]['ID'])?>">
        <img class="logo-img" src="<?=CFile::GetPath($arResult['ITEMS'][0]['DISPLAY_PROPERTIES']['LOGO']['VALUE'])?>" alt="Логотип компании"/>
        <img class="logo-img-mobile" src="<?=CFile::GetPath($arResult['ITEMS'][0]['DISPLAY_PROPERTIES']['LOGO_MOB']['VALUE'])?>" alt="Логотип компании"/>
    </a>
<?endif?>
<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (!empty($arResult)):
?>
    <?$this->AddEditAction($arResult['ID'], $arResult['EDIT_LINK'], CIBlock::GetArrayByID($arResult['IBLOCK_ID'], 'ELEMENT_EDIT'))?>
    <?$this->AddDeleteAction($arResult['ID'], $arResult['DELETE_LINK'], CIBlock::GetArrayByID($arResult['IBLOCK_ID'], 'ELEMENT_DELETE'))?>
    <a class="logo" href="/">
        <img class="logo-img" src="<?=CFile::GetPath($arResult['DISPLAY_PROPERTIES']['LOGO']['VALUE'])?>" alt="Логотип компании"/>
        <img class="logo-img-mobile" src="<?=CFile::GetPath($arResult['DISPLAY_PROPERTIES']['LOGO_MOB']['VALUE'])?>" alt="Логотип компании"/>
    </a>
<?endif?>
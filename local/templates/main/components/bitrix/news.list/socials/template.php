<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
    <div class="header__social">
        <?foreach ($arResult["ITEMS"] as $arItem):?>
            <?$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'))?>
            <?$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'))?>
            <a class="header__social__link <?=$arItem['CODE']?>-link" href="<?=$arItem['DISPLAY_PROPERTIES']['LINK']['VALUE']?>" id="<?=$this->GetEditAreaId($arItem['ID'])?>"></a>
        <?endforeach?>
    </div>
<?endif?>
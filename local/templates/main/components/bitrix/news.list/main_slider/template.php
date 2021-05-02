<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (!empty($arResult)):
$i = 1;
?>
    <div class="owl-carousel owl-theme" id="main-slider">
        <?foreach ($arResult["ITEMS"] as $arItem):?>
            <?$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'))?>
            <?$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'))?>
            <div id="<?=$this->GetEditAreaId($arItem['ID'])?>">
                <div class="item item-<?=$i?>" style="background-image: url('<?=CFile::GetPath($arItem['PREVIEW_PICTURE']['ID'])?>');">
                    <div class="container">
                        <h2 class="slider-text"><?=$arItem['PREVIEW_TEXT']?></h2>
                    </div>
                </div>
            </div>
        <?endforeach?>
    </div>
<?endif?>
<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (!empty($arResult)):
$i = 1;
?>
    <section class="partners">
        <div class="container">  
            <h4 class="subtitle subtitle-divider text-center"><span><a href="#">Наши клиенты</a></span></h4>
                <div class="owl-carousel owl-theme" id="partner-slider">
                    <?foreach ($arResult["ITEMS"] as $arItem):?>
                        <?$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'))?>
                        <?$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'))?>
                        <div id="<?=$this->GetEditAreaId($arItem['ID'])?>">
                            <div class="item">
                                <img class="partners-img" src="<?=CFile::GetPath($arItem['PREVIEW_PICTURE']['ID'])?>" alt="Лого партнера <?=$i?>"/>
                            </div>
                        </div>
                    <?endforeach?>
                </div>
            </div>
    </section>
<?endif?>
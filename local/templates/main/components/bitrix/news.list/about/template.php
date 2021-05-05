<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (!empty($arResult)):
?>
    <?$this->AddEditAction($arResult['ITEMS'][0]['ID'], $arResult['ITEMS'][0]['EDIT_LINK'], CIBlock::GetArrayByID($arResult['ITEMS'][0]['IBLOCK_ID'], 'ELEMENT_EDIT'))?>
    <?$this->AddDeleteAction($arResult['ITEMS'][0]['ID'], $arResult['ITEMS'][0]['DELETE_LINK'], CIBlock::GetArrayByID($arResult['ITEMS'][0]['IBLOCK_ID'], 'ELEMENT_DELETE'))?>
    <section class="about">
        <div class="container" id="<?=$this->GetEditAreaId($arResult['ITEMS'][0]['ID'])?>">
            <h4 class="subtitle subtitle-mobile"><span><a href="#">О компании</a></span></h4>
            <div class="row">
                <div class="col-lg-5 col-xl-6">
                    <div class="about-img"><img src="<?=CFile::GetPath($arResult['ITEMS'][0]['PREVIEW_PICTURE']['ID'])?>" alt="Картинка о компании"/></div>
                </div>
                <div class="col-lg-7 col-xl-6">
                    <div class="about-right">
                    <h4 class="subtitle"><span><a href="#">О компании</a></span></h4>
                    <p><?=$arResult['ITEMS'][0]['PREVIEW_TEXT']?></p>
                    <button class="dental-btn-small">Подробнее</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?endif?>
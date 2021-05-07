<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (!empty($arResult)):
?>
    <?$this->AddEditAction($arResult['ID'], $arResult['EDIT_LINK'], CIBlock::GetArrayByID($arResult['IBLOCK_ID'], 'ELEMENT_EDIT'))?>
    <?$this->AddDeleteAction($arResult['ID'], $arResult['DELETE_LINK'], CIBlock::GetArrayByID($arResult['IBLOCK_ID'], 'ELEMENT_DELETE'))?>
    <section class="about">
        <div class="container">
            <h4 class="subtitle subtitle-mobile"><span><a href="#">О компании</a></span></h4>
            <div class="row">
                <div class="col-lg-5 col-xl-6">
                    <div class="about-img"><img src="<?=CFile::GetPath($arResult['PREVIEW_PICTURE']['ID'])?>" alt="Картинка о компании"/></div>
                </div>
                <div class="col-lg-7 col-xl-6">
                    <div class="about-right">
                    <h4 class="subtitle"><span><a href="#">О компании</a></span></h4>
                    <p><?=$arResult['PREVIEW_TEXT']?></p>
                    <button class="dental-btn-small">Подробнее</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?endif?>
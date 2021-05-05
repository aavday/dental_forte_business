<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (!empty($arResult)):
$i = 1;
?>
    <section class="services">
        <div class="container">
            <div class="services__wrapper">
                <h4 class="subtitle subtitle-divider text-center"><span><a href="#">Услуги</a></span></h4>
                <div class="row">
                    <?foreach ($arResult["ITEMS"] as $arItem):?>
                        <?$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'))?>
                        <?$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'))?>
                        <div class="col-md-6 col-xl-4">
                            <a class="services__link" href="#" id="<?=$this->GetEditAreaId($arItem['ID'])?>">
                                <div class="services__link__img"><img src="<?=CFile::GetPath($arItem['PREVIEW_PICTURE']['ID'])?>" alt="Картинка услуг <?=$i?>"/></div>
                                <div class="services__link__block">
                                    <h3 class="services__link__title"><?=$arItem['NAME']?></h3>
                                    <p class="services__link__text"><?=$arItem['PREVIEW_TEXT']?></p>
                                </div>
                            </a>
                        </div>
                    <?endforeach?>
                </div>
            </div>
        </div>
    </section>
<?endif?>
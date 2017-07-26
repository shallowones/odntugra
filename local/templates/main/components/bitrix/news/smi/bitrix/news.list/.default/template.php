<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="cmi">

    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="cmi-item"><a class="cmi-item__img" href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><? if ($arItem["PREVIEW_PICTURE"]["SRC"]):?>
                    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
                <?else:?>
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/no-photo.png"><?endif;?></a>
            <div class="cmi-item-text"><a class="cmi-item-text__title" href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><?= $arItem["NAME"] ?></a>
                <div class="cmi-item-text__desc">
                    <?= $arItem["PREVIEW_TEXT"] ?>
                </div><a class="cmi-item-text__link" target="_blank" href="<?= $arItem["DISPLAY_PROPERTIES"]["LINK"]["VALUE"] ?>"><?= $arItem["DISPLAY_PROPERTIES"]["LINK"]["VALUE"] ?></a>
            </div>
        </div>
    <?endforeach;?>
    <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
        <br /><?=$arResult["NAV_STRING"]?>
    <?endif;?>
</div>
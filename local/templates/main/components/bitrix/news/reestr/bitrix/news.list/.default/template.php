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
<div class="list">
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>

        <a class="list-item" href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
            <div class="list-item__img">
                <? if ($arItem["PREVIEW_PICTURE"]["SRC"]):?>
                    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
                <?else:?>
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/no-photo.png"><?endif;?></div>
            <div class="list-item-text">
                <div class="list-item-text__cats">
                    <div class="list-item-text__cat"><?= $arItem['DISPLAY_PROPERTIES']['TUPES']['VALUE']?> \</div>
                    <div class="list-item-text__cat"><?= $arItem['DISPLAY_PROPERTIES']['STATUS']['VALUE']?> \</div>
                    <div class="list-item-text__cat"><?= $arItem['DISPLAY_PROPERTIES']['CITY']['VALUE']?></div>
                </div>
                <div class="list-item-text__title"><?= $arItem["NAME"] ?></div>
                <div class="list-item-text__desc">
                    <?= $arItem["PREVIEW_TEXT"] ?>
                </div>
                <div class="list-item-text__date"><?= $arItem["ACTIVE_FROM"] ?></div>
            </div>
        </a>


    <? endforeach; ?>
    <div class="pagenavigation">
        <? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
            <br/><?= $arResult["NAV_STRING"] ?>
        <? endif; ?>
    </div>
</div>

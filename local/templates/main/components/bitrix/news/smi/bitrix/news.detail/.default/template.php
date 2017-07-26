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
<div class="detail-page">
    <div class="detail-page-header">
        <div class="detail-page-header__date"><?= $arResult["ACTIVE_FROM"] ?></div>
        <a class="detail-page-header-print__version" href="#">Версия для печати</a>
    </div>
    <h1 class="detail-page-title"><?= $arResult["NAME"] ?></h1>
    <div class="detail-page-img"><img class="detail-page-img" src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>"></div>
    <div class="detail-page-text">
        <p class="desc">
            <?= $arResult["DETAIL_TEXT"] ?>
        </p>
        <div class="files">

            <? if ($arResult['DISPLAY_PROPERTIES']['FILES']['FILE_VALUE'][0]): ?>
                <? foreach ($arResult['DISPLAY_PROPERTIES']['FILES']['FILE_VALUE'] as $arFile): ?>


                    <a class="files__item pdf" href="<? echo $arFile['SRC'] ?>"><? echo $arFile['ORIGINAL_NAME'] ?>
                        <span>pdf</span></a>
                <? endforeach; ?>
            <? endif; ?>
        </div>
    </div>
    <br><a class="cmi-item-text__link" target="_blank" href="<?= $arResult["DISPLAY_PROPERTIES"]["LINK"]["VALUE"] ?>"><?= $arResult["DISPLAY_PROPERTIES"]["LINK"]["VALUE"] ?></a>
</div>
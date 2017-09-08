<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

$fileValue = $arResult['DISPLAY_PROPERTIES']['FILES']['FILE_VALUE'];
$photoValue = $arResult['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE'];
?>

<div class="detail-page">
    <div class="detail-page-header">
        <div class="detail-page-header__date"><? echo $arResult['DATE'] ?></div>
        <a class="detail-page-header-print__version" href="#">Версия для печати</a>
    </div>
    <h1 class="detail-page-title"><? echo $arResult['NAME'] ?></h1>
    <img class="detail-page-img" src="<? echo $arResult['PREVIEW_PICTURE']['CROP_SRC'] ?>">
    <div class="detail-page-text">
        <? echo $arResult["~DETAIL_TEXT"] ?>
    </div>
    <? if ($fileValue): ?>
        <div class="files">
            <? if ($fileValue['ID']): ?>
                <a class="files__item <? echo $fileValue['INFO']['EXTENSION'] ?>" href="<? echo $fileValue['SRC'] ?>"
                   target="_blank">
                    <? echo $fileValue['INFO']['NAME'] ?>
                    <span><? echo $fileValue['INFO']['EXTENSION'] ?></span>
                </a>
            <? else: ?>
                <? foreach ($fileValue as $arFile): ?>
                    <a class="files__item <? echo $arFile['INFO']['EXTENSION'] ?>" href="<? echo $arFile['SRC'] ?>"
                       target="_blank">
                        <? echo $arFile['INFO']['NAME'] ?>
                        <span><? echo $arFile['INFO']['EXTENSION'] ?></span>
                    </a>
                <? endforeach; ?>
            <? endif; ?>
        </div>
    <? endif; ?>

    <? if ($photoValue): ?>
        <div class="detail-sl">
            <? if ($photoValue['ID']): ?>
                <div class="swiper-container detail-slider js-detail-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide detail-slide" style="background-image: url('<? echo $photoValue['CROP'] ?>');"></div>
                    </div>
                    <div class="swiper-button-prev inner-left"></div>
                    <div class="swiper-button-next inner-right"></div>
                </div>
            <? else: ?>
                <div class="swiper-container detail-slider js-detail-slider">
                    <div class="swiper-wrapper">
                        <? foreach ($photoValue['CROP'] as $arFile): ?>
                            <div class="swiper-slide detail-slide" style="background-image: url('<? echo $arFile['BIG'] ?>');"></div>
                        <? endforeach; ?>
                    </div>
                    <div class="swiper-button-prev inner-left"></div>
                    <div class="swiper-button-next inner-right"></div>
                </div>
                <div class="swiper-container detail-slider2 js-detail-slider2">
                    <div class="swiper-wrapper">
                        <? foreach ($photoValue['CROP'] as $arFile): ?>
                            <div class="swiper-slide detail-slide2" style="background-image: url('<? echo $arFile['SMALL'] ?>');"></div>
                        <? endforeach; ?>
                    </div>
                </div>
            <? endif; ?>
        </div>
    <? endif; ?>
</div>
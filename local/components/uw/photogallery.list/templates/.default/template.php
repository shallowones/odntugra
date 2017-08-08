<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var CBitrixComponentTemplate $this */
/** @var array $arParams */
/** @var array $arResult */
/** @var string $componentPath */
/** @var string $componentName */
/** @var string $componentTemplate */
/** @global CDatabase $DB */
/** @global CUser $USER */
/** @global CMain $APPLICATION */
?>

<? if ($arResult['items']): ?>
    <div class="swiper-container photo-slider js-bottom-slider swiper-container-horizontal">
        <div class="swiper-wrapper bottom-wrapper">
            <? foreach ($arResult['items'] as $item): ?>
                <a class="swiper-slide photos__item" href="<? echo $item['detail'] ?>">
                    <div class="photos__item-img" style="background-image: url('<? echo $item['picture']['crop'] ?>')"></div>
                    <div class="photos__item-wrap"></div>
                    <div class="photos__item-desc">
                        <div class="photos__item-desc__date"><? echo $item['date'] ?></div>
                        <div class="photos__item-desc__title"><? echo $item['name'] ?></div>
                    </div>
                    <div class="more">ПЕРЕЙТИ К АЛЬБОМУ</div>
                </a>
            <? endforeach; ?>
        </div>
        <div class="swiper-button-prev inner-left swiper-button-disabled"></div>
        <div class="swiper-button-next inner-right swiper-button-disabled"></div>
    </div>
<? endif; ?>
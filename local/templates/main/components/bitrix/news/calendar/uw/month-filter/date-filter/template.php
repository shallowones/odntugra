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

<form class="calendar-filter" action="<? echo POST_FORM_ACTION_URI ?>" method="get">
    <button class="calendar-all" name="clear-filter" value="Y">ВСЕ МЕСЯЦЫ</button>
    <div class="swiper-container calendar-slider js-calendar-slider">
        <div class="swiper-wrapper">
            <? foreach ($arResult['months'] as $monthId => $monthName): ?>
                <? if ($monthId === $arResult['SELECTED']): ?>
                    <div class="swiper-slide calendar-slide active" data-index="<? echo $monthId ?>">
                        <? echo $monthName ?>
                    </div>
                <? else: ?>
                    <button class="swiper-slide calendar-slide" name="set-month" value="<? echo $monthId ?>">
                        <? echo $monthName ?>
                    </button>
                <? endif; ?>
            <? endforeach; ?>
        </div>
        <div class="swiper-button-prev inner-left"></div>
        <div class="swiper-button-next inner-right"></div>
    </div>
</form>
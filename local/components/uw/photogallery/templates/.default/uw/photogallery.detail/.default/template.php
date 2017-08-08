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
    <div class="videos">
        <? foreach ($arResult['items'] as $item): ?>
            <a class="photos__item" href="<? echo $item['picture']['path'] ?>" rel="group" data-fancybox="gallery">
                <div class="photos__item-img"
                     style="background-image: url('<? echo $item['picture']['crop'] ?>')"></div>
            </a>
        <? endforeach; ?>
    </div>
<? endif; ?>
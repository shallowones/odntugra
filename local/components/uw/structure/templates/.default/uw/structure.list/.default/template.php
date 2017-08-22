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
    <div class="structura-divisions">
        <? foreach ($arResult['items'] as $item): ?>
            <a class="structura-divisions__item" href="<? echo $item['detail'] ?>"><? echo $item['name'] ?></a>
        <? endforeach; ?>
    </div>
<? endif; ?>

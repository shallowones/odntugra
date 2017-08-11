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

<? foreach ($arResult['agency'] as $mo): ?>
    <h1 class="h1"><? echo $mo['name'] ?></h1>
    <div class="agency">
        <? foreach ($mo['items'] as $item): ?>
            <a href="<? echo $item['link'] ?>" class="agency__link" target="_blank"><? echo $item['name'] ?></a>
        <? endforeach; ?>
    </div>
<? endforeach; ?>

<? if ($arResult['navString']):
    echo $arResult['navString'];
endif; ?>
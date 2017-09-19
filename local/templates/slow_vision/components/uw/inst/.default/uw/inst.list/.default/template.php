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
//var_dump($arResult);
?>


<? foreach ($arResult['agency'] as $mo): ?>
    <h1><? echo $mo['name'] ?></h1>
    <ul>
        <? foreach ($mo['items'] as $item): ?>
            <li><a href="<? echo $item['detail'] ?>" class="agency__link"><? echo $item['name'] ?></a></li>
        <? endforeach; ?>
    </ul>
<? endforeach; ?>

<? if ($arResult['navString']):
    echo $arResult['navString'];
endif; ?>
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

<? if ($arResult['items']['noPassed']): ?>
    <div class="vote-list">
        <h1 class="h1">Не пройденные</h1>
        <? foreach ($arResult['items']['noPassed'] as $item): ?>
            <a href="<? echo $item['detail'] ?>"><? echo $item['name'] ?></a>
        <? endforeach; ?>
    </div>
<? endif; ?>

<? if ($arResult['items']['passed']): ?>
    <div class="vote-list">
        <h1 class="h1">Пройденные</h1>
        <? foreach ($arResult['items']['passed'] as $item): ?>
            <a href="<? echo $item['detail'] ?>"><? echo $item['name'] ?></a>
        <? endforeach; ?>
    </div>
<? endif; ?>

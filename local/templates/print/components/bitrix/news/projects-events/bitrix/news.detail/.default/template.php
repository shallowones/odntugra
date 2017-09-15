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
//gg($arResult);
$fileValue = $arResult['DISPLAY_PROPERTIES']['FILES']['FILE_VALUE'];
$photoValue = $arResult['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE'];
?>

<div>
    <div><? echo $arResult['DATE'] ?></div>
    <br>
    <hr>
    <div>
        <? echo $arResult["PREVIEW_TEXT"] ?>
    </div>

    <? if ($arResult['EVENTS']): ?>
        <br>
        <h3>Мероприятия проекта</h3>
        <? foreach ($arResult['EVENTS'] as $event): ?>
            <ul>
                <a href="<? echo $event['LINK'] ?>"><? echo $event['NAME'] ?></a>
                <div><? echo $event['DATE'] ?></div>
            </ul>
        <? endforeach; ?>
    <? endif; ?>
</div>
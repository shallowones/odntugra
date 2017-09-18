<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
/** @var array $arResult */
$fileValue = $arResult['DISPLAY_PROPERTIES']['FILES']['FILE_VALUE'];
$photoValue = $arResult['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE'];
?>

        <div><? echo $arResult['DATE'] ?></div>
    <br>
    <h1><? echo $arResult['NAME'] ?></h1>
    <div>
        <? echo $arResult["~DETAIL_TEXT"] ?>
    </div>


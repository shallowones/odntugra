<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
/** @var array $arResult */
$fileValue = $arResult['DISPLAY_PROPERTIES']['FILES']['FILE_VALUE'];
$photoValue = $arResult['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE'];
?>

    <div ><? echo $arResult['DATE'] ?></div>
<br>
    <h1><? echo $arResult['NAME'] ?></h1>
    <img  src="<? echo $arResult['PREVIEW_PICTURE']['CROP_SRC'] ?>">
    <div>
        <? echo $arResult["DETAIL_TEXT"] ?>
    </div>

    <? if ($link = $arResult['PROPERTIES']['LINK']['VALUE']): ?>
        <br>
        <a href="<? echo $link ?>" target="_blank"><? echo $link ?></a>
    <? endif; ?>

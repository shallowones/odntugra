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

$fileValue = $arResult['DISPLAY_PROPERTIES']['FILES']['FILE_VALUE'];
$photoValue = $arResult['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE'];
?>

<div>
    <div><? echo $arResult['DATE'] ?></div>
    <noindex><a href="<?=$APPLICATION->GetCurUri("print=Y");?>">Версия для печати</a></noindex>
    <hr>
    <div>
        <? echo $arResult["PREVIEW_TEXT"] ?>
    </div>

    <? if ($fileValue): ?>
        <hr>
        <ul>
            <? if ($fileValue['ID']): ?>
                <li>
                    <a href="<? echo $fileValue['SRC'] ?>"
                       target="_blank">
                        <? echo $fileValue['INFO']['NAME'] ?>
                        <span><? echo $fileValue['INFO']['EXTENSION'] ?></span>
                    </a>
                </li>
            <? else: ?>
                <? foreach ($fileValue as $arFile): ?>
                    <li>
                        <a class="download-f" <? echo $arFile['INFO']['EXTENSION'] ?> href="<? echo $arFile['SRC'] ?>"
                           target="_blank">
                            <? echo $arFile['INFO']['NAME'] ?>
                            <span><? echo $arFile['INFO']['EXTENSION'] ?></span>
                        </a><br>
                    </li>
                <? endforeach; ?>
            <? endif; ?>
        </ul>
    <? endif; ?>

    <? if ($photoValue): ?>
        <div>
            <? if ($photoValue['ID']): ?>
                <div style="background-image: url('<? echo $photoValue['CROP'] ?>');"></div>
            <? else: ?>
                <? foreach ($photoValue['CROP'] as $arFile): ?>
                    <div style="background-image: url('<? echo $arFile['BIG'] ?>');"></div>
                <? endforeach; ?>
            <? endif; ?>
        </div>
    <? endif; ?>

</div>


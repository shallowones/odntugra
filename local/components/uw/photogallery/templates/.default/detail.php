<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @global CMain $APPLICATION */
/** @var CBitrixComponent $component */
/** @var array $arParams */
/** @var array $arResult */
$this->setFrameMode(true);
?>

<? $APPLICATION->IncludeComponent(
    'uw:photogallery.detail',
    '.default',
    [
        'IBLOCK_ID' => $arParams['IBLOCK_ID'],
        'SECTION_ID' => $arResult['VARIABLES']['SECTION_ID'],
        'BACK_LINK' => $arParams['SEF_FOLDER']
    ],
    $component
); ?>
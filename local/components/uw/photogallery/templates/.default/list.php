<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @global CMain $APPLICATION */
/** @var CBitrixComponent $component */
/** @var array $arParams */
$this->setFrameMode(true);
?>

<? $APPLICATION->IncludeComponent(
    'uw:photogallery.list',
    '.default',
    [
        'IBLOCK_ID' => $arParams['IBLOCK_ID'],
        'DETAIL' => $arParams['SEF_FOLDER'] . $arParams['SEF_URL_TEMPLATES']['detail']
    ],
    $component
); ?>
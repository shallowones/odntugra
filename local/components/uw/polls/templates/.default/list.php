<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @global CMain $APPLICATION */
/** @var CBitrixComponent $component */
/** @var array $arParams */
/** @var array $arResult */
?>

<? $APPLICATION->IncludeComponent(
    'uw:polls.list',
    '.default',
    [
        'IBLOCK_ID' => $arParams['IBLOCK_ID'],
        'COOKIE_NAME' => $arParams['COOKIE_NAME'],
        'DETAIL' => $arResult['FOLDER'] . $arResult['URL_TEMPLATES']['detail']
    ],
    $component
); ?>
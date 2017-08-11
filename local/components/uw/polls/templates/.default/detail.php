<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @global CMain $APPLICATION */
/** @var CBitrixComponent $component */
/** @var array $arParams */
/** @var array $arResult */
$this->setFrameMode(true);
?>

<? $APPLICATION->IncludeComponent(
    'uw:polls.detail',
    '.default',
    [
        'IBLOCK_ID' => $arParams['IBLOCK_ID'],
        'ELEMENT_ID' => $arResult['VARIABLES']['ELEMENT_ID'],
        'COOKIE_NAME' => $arParams['COOKIE_NAME'],
        'LIST' => $arResult['FOLDER']
    ],
    $component
); ?>
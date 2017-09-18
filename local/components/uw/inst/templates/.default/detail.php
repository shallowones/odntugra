<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @global CMain $APPLICATION */
/** @var CBitrixComponent $component */
/** @var array $arParams */
/** @var array $arResult */
$this->setFrameMode(true);
?>

<? $APPLICATION->IncludeComponent(
    'uw:inst.detail',
    '.default',
    [
        'IBLOCK_ID' => $arParams['IBLOCK_ID'],
        'ELEMENT_CODE' => $arResult['VARIABLES']['ELEMENT_CODE'],
        'LINK' => $arResult['FOLDER'] . $arResult['VARIABLES']['ELEMENT_CODE'] . '/'
    ],
    $component
); ?>
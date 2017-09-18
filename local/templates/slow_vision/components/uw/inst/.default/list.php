<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @global CMain $APPLICATION */
/** @var CBitrixComponent $component */
/** @var array $arParams */
$this->setFrameMode(true);
?>

<? $APPLICATION->IncludeComponent(
    'uw:inst.list',
    '.default',
    [
        'IBLOCK_ID' => $arParams['IBLOCK_ID'],
        'ELEM_COUNT' => $arParams['ELEM_COUNT']
    ],
    $component
); ?>
<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @global CMain $APPLICATION */
/** @var CBitrixComponent $component */
/** @var array $arParams */
/** @var array $arResult */
$this->setFrameMode(true);
?>

<? $APPLICATION->IncludeComponent(
    'uw:structure.detail',
    '.default',
    [
        'IBLOCK_ID' => $arParams['IBLOCK_ID'],
        'SECTION_CODE' => $arResult['VARIABLES']['SECTION_CODE'],
        'VACANCY_LINK' => $arParams['VACANCY_LINK']
    ],
    $component
); ?>
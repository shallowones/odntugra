<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @global CMain $APPLICATION */
/** @var CBitrixComponent $component */
/** @var array $arParams */
$this->setFrameMode(true);
?>

    <img src="<? echo SITE_TEMPLATE_PATH . '/images/structura.png' ?>" style="max-width: 100%">
<? $APPLICATION->IncludeComponent(
    'uw:structure.list',
    '.default',
    [
        'IBLOCK_ID' => $arParams['IBLOCK_ID']
    ],
    $component
); ?>


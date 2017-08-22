<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */

foreach ($arResult['ITEMS'] as $key => $item) {
    $arResult['ITEMS'][$key]['DATE'] = strtolower($item['DISPLAY_ACTIVE_FROM']);
}
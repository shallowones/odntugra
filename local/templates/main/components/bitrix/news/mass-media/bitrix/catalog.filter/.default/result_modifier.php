<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */

foreach ($arResult['ITEMS']['DATE_ACTIVE_FROM']['INPUT_NAMES'] as $key => $name) {
    $arResult['INPUTS'][] = [
        'LABEL' => ($key > 0) ? 'до' : 'от',
        'NAME' => $name,
        'VALUE' => ($arResult['ITEMS']['DATE_ACTIVE_FROM']['INPUT_VALUES'][$key])
            ? $arResult['ITEMS']['DATE_ACTIVE_FROM']['INPUT_VALUES'][$key]
            : ''
    ];
}
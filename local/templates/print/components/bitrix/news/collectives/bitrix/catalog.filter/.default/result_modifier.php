<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */

$count = 0;
foreach ($arResult['ITEMS'] as $key => $select) {
    if ($select['NAME']) {
        $arResult['INPUTS'][$count] = [
            'NAME' => $select['INPUT_NAME'],
            'LABEL' => $select['NAME'],
            'LIST' => $select['LIST'],
            'VALUE' => strval($select['INPUT_VALUE'])
        ];
    }
    $count++;
}
//gg($arResult);
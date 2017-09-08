<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */

foreach ($arResult['ITEMS'] as $key => $item) {
    // обрезаем длину текста описания (max - 3 строки)
    if ($text = $item['NAME']) {
        $arResult['ITEMS'][$key]['NAME_CROP'] = TruncateText($text, 300);
    }

    // переводим дату в нижний регистр
    $arResult['ITEMS'][$key]['DATE'] = strtolower($arResult['ITEMS'][$key]['DISPLAY_ACTIVE_FROM']);
}

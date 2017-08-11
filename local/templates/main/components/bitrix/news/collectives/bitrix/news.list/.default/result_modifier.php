<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */

foreach ($arResult['ITEMS'] as $key => $item) {
    // обрезаем размер изображения
    $arResult['ITEMS'][$key]['PREVIEW_PICTURE']['CROP_SRC'] = \UW\Tools::getResizeImage(
        $item['PREVIEW_PICTURE']['ID'],
        270,
        160
    );

    // обрезаем длину текста описания (max - 3 строки)
    if ($text = $item['PREVIEW_TEXT']) {
        $arResult['ITEMS'][$key]['PREVIEW_CROP_TEXT'] = TruncateText($text, 140);
    }

    // переводим дату в нижний регистр
    $arResult['ITEMS'][$key]['DATE'] = strtolower($arResult['ITEMS'][$key]['DISPLAY_ACTIVE_FROM']);

    // построим цепочку свойств
    $cats = [
        $item['PROPERTIES']['TYPE']['VALUE'],
        $item['PROPERTIES']['STATUS']['VALUE'],
        $item['PROPERTIES']['CITY']['VALUE']
    ];
    $arResult['ITEMS'][$key]['CATS'] = implode('&nbsp;&nbsp;&nbsp;\&nbsp;&nbsp;&nbsp;', array_diff($cats, ['']));
}

<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */

foreach ($arResult['ITEMS'] as $key => $item) {
    // обрезаем размер изображения
    $arResult['ITEMS'][$key]['PREVIEW_PICTURE']['CROP_SRC'] = \UW\Tools::getResizeImage(
        $item['PREVIEW_PICTURE']['ID'],
        160,
        160
    );
}

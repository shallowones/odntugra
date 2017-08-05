<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */

foreach ($arResult['ITEMS'] as $key => $item) {
    if ($path = $item['PREVIEW_PICTURE']['SRC']) {
        $arResult['ITEMS'][$key]['PREVIEW_PICTURE']['CROP_SRC'] = \UW\Tools::getResizeImage(
            $item['PREVIEW_PICTURE']['ID'],
            'auto',
            112
        );
    }
}
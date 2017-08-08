<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */

foreach ($arResult['items'] as $key => $item) {
    // обрезаем размер изображения
    if ($pictureId = $item['picture']['id']) {
        $arResult['items'][$key]['picture']['crop'] = \UW\Tools::getResizeImage(
            $pictureId,
            370,
            330
        );
    }
}
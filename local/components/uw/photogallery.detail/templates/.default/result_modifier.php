<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */

foreach ($arResult['items'] as $key => $item) {
    // обрезаем размер изображения
    $arResult['items'][$key]['picture']['crop'] = \UW\Tools::getResizeImage(
        $item['picture']['id'],
        370,
        330
    );
}
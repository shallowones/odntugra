<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */

// обрезаем размер изображения
if ($pictureId = $arResult['PREVIEW_PICTURE']['ID']) {
    $arResult['PREVIEW_PICTURE']['CROP_SRC'] = \UW\Tools::getResizeImage(
        $pictureId,
        470,
        'auto'
    );
}

// переводим дату в нижний регистр
$arResult['DATE'] = strtolower($arResult['DISPLAY_ACTIVE_FROM']);

// работа с файлами
$fileValue = $arResult['DISPLAY_PROPERTIES']['FILES']['FILE_VALUE'];
if ($fileValue['ID']) {
    $fileValue['INFO'] =
        \UW\Tools::getFileNameAndExtension($fileValue['ORIGINAL_NAME']);
} else {
    foreach ($fileValue as $key => $arFile) {
        $fileValue[$key]['INFO'] = \UW\Tools::getFileNameAndExtension($arFile['ORIGINAL_NAME']);
    }
}
$arResult['DISPLAY_PROPERTIES']['FILES']['FILE_VALUE'] = $fileValue;

// работа с фотографиями
$photoValue = $arResult['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE'];
if ($photoId = $photoValue['ID']) {
    $photoValue['CROP'] = \UW\Tools::getResizeImage(
        $photoId,
        870,
        500
    );
} else {
    foreach ($photoValue as $key => $arFile) {
        $photoValue['CROP'][$key] = [
            'BIG' => \UW\Tools::getResizeImage(
                $arFile['ID'],
                870,
                500
            ),
            'SMALL' => \UW\Tools::getResizeImage(
                $arFile['ID'],
                195,
                110
            )
        ];
    }
}
$arResult['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE'] = $photoValue;

// работа со списком мероприятий (если текущий элемент - проект)
if ($ids = $arResult['PROPERTIES']['EVENTS']['VALUE']) {
    $arResult['EVENTS'] = \UW\Tools::getEvents($ids);
}
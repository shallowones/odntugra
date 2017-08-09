<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */

$arIds = [];

foreach ($arResult['SEARCH'] as $arItem) {
    $arIds[] = $arItem['ITEM_ID'];
}

$rs = \CIBlockElement::GetList(
    [],
    ['ACTIVE' => 'Y', 'ID' => $arIds],
    false,
    false,
    ['ID', 'PREVIEW_PICTURE']
);

while ($item = $rs->Fetch()) {
    foreach ($arResult['SEARCH'] as $key => $arItem) {
        if ($arItem['ITEM_ID'] === $item['ID']) {
            $arResult['SEARCH'][$key]['PREVIEW_PICTURE'] = \CFile::GetFileArray($item['PREVIEW_PICTURE'])['SRC'];
        }
    }
}


<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
/** @var CBitrixComponentTemplate $this */

\Bitrix\Main\Loader::includeModule('iblock');

define('TARGET_NAME', 'search');

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
            $arResult['SEARCH'][$key]['PREVIEW_PICTURE'] =
                \UW\Tools::getResizeImage($item['PREVIEW_PICTURE'], 270, 160);
        }
    }
}

if ($arResult['REQUEST']['QUERY']) {
    $this->SetViewTarget(\UW\Tools::TARGET_NAME_SEARCH);
    echo $arResult['REQUEST']['QUERY'];
    $this->EndViewTarget();
}

global $APPLICATION;
$APPLICATION->AddChainItem('Поиск');
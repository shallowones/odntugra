<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */

$result = [];
foreach ($arResult['ITEMS'] as $key => $item) {
    // разбиваем даты по месяцам
    $timestamp = MakeTimeStamp($item['PROPERTIES']['DATE']['VALUE']);
    $monthNumber = FormatDate('m', $timestamp);
    if (!$result[$monthNumber]) {
        $result[$monthNumber]['NAME'] = strtoupper(FormatDate('f', $timestamp));
    }
    $result[$monthNumber]['ITEMS'][] = [
        'ID' => $item['ID'],
        'NAME' => $item['NAME'],
        'DAY' => FormatDate('d', $timestamp),
        'MONTH' => strtoupper(FormatDate('F', $timestamp)),
        'TEXT' => $item['PREVIEW_TEXT'],
        'LINK' => $item['PROPERTIES']['LINK']['VALUE']
    ];
}
$arResult['MONTHS'] = $result;
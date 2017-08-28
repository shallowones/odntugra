<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */

$result = '<div class="breadcrumbs">';
foreach ($arResult as $key => $item) {
    if ($key !== count($arResult) - 1) {
        $result .= "<a href=\"{$item{'LINK'}}\" class=\"breadcrumbs__item\">{$item['TITLE']}</a>";
    } else {
        $result .= "<span class=\"breadcrumbs__item\">{$item['TITLE']}</span>";
    }
}
$result .= '</div>';

return $result;

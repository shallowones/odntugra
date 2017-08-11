<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
/** @global CMain $APPLICATION */
$APPLICATION->SetTitle("Результаты поиска");
?>

<? $APPLICATION->IncludeComponent(
    "bitrix:search.page",
    "main-search",
    array(
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_TIME" => "3600",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "N",
        "DEFAULT_SORT" => "rank",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FILTER_NAME" => "",
        "NO_WORD_LOGIC" => "N",
        "PAGER_SHOW_ALWAYS" => "Y",
        "PAGER_TEMPLATE" => "custom",
        "PAGER_TITLE" => "Результаты поиска",
        "PAGE_RESULT_COUNT" => "5",
        "RESTART" => "N",
        "SHOW_WHEN" => "N",
        "SHOW_WHERE" => "N",
        "USE_LANGUAGE_GUESS" => "Y",
        "USE_SUGGEST" => "N",
        "USE_TITLE_RANK" => "N",
        "arrFILTER" => array(),
        "arrWHERE" => "",
        "COMPONENT_TEMPLATE" => "main-search"
    ),
    false
); ?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
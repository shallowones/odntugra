<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
/** @global CMain $APPLICATION */
$APPLICATION->SetTitle("Учреждения КДУ муниципальных образований Югры");
?>

<? $APPLICATION->IncludeComponent("uw:inst", ".default", Array(
    "IBLOCK_ID" => \UW\IBHelper::getIbId(\UW\IBCodes::IB_CODE_AGENCY),    // Идентификатор инфоблока
    "SEF_FOLDER" => "/kdu-agency/",    // Каталог ЧПУ (относительно корня сайта)
    "SEF_MODE" => "Y",    // Включить поддержку ЧПУ
    "COMPONENT_TEMPLATE" => ".default",
    "ELEM_COUNT" => "5",    // Количество элементов на странице
    "SEF_URL_TEMPLATES" => array(
        "list" => "",
        "detail" => "#ELEMENT_CODE#/",
    )
),
    false
); ?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
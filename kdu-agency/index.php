<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
/** @global CMain $APPLICATION */
$APPLICATION->SetTitle("Учреждения КДУ муниципальных образований Югры");
?>

<? $APPLICATION->IncludeComponent(
    "uw:agency",
    ".default",
    array(
        "IBLOCK_ID" => \UW\IBHelper::getIbId(\UW\IBCodes::IB_CODE_AGENCY),
        "ELEM_COUNT" => "5"
    ),
    false
); ?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
<? define('FULL_WRAP', true);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
/** @global $APPLICATION */
$APPLICATION->SetTitle("Реестр Коллективов Югры (кду)");
LocalRedirect('/deyatelnost/razvitie/');
?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
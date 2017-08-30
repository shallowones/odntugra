<? define('isPolls', true); define('FULL_WRAP', true);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
/** @global CMain $APPLICATION */
$APPLICATION->SetTitle("Опросы");
?>

<? $APPLICATION->IncludeComponent(
	"uw:polls", 
	".default", 
	array(
		"IBLOCK_ID" => \UW\IBHelper::getIbId(\UW\IBCodes::IB_CODE_POLLS),
		"COMPONENT_TEMPLATE" => ".default",
		"COOKIE_NAME" => "POLLS",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/about/polls/",
		"SEF_URL_TEMPLATES" => array(
			"list" => "",
			"detail" => "#ELEMENT_ID#/",
		)
	),
	false
); ?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
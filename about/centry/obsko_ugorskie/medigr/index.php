<? define('FULL_WRAP', true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Медвежьи игрища 1988 г.");
?><?$APPLICATION->IncludeComponent(
	"uw:photogallery.detail", 
	".default", 
	array(
		"IBLOCK_ID" => "18",
		"COMPONENT_TEMPLATE" => ".default",
		"SECTION_ID" => "",
		"BACK_LINK" => ""
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
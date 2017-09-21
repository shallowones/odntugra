<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
/** @global CMain $APPLICATION */
$APPLICATION->SetTitle("Учреждения КДУ муниципальных образований Югры");
?><?$APPLICATION->IncludeComponent(
	"uw:inst",
	"",
	Array(
		"ELEM_COUNT" => "5",
		"IBLOCK_ID" => \UW\IBHelper::getIbId(\UW\IBCodes::IB_CODE_AGENCY),
		"SEF_FOLDER" => "/kdu-agency/",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => Array("detail"=>"#ELEMENT_CODE#/","list"=>"")
	)
);?><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
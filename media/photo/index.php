<? define('FULL_WRAP', true);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
/** @global CMain $APPLICATION */
$APPLICATION->SetTitle("Фотогалерея");
?>

<? $APPLICATION->IncludeComponent(
	"uw:photogallery", 
	".default", 
	array(
		"IBLOCK_ID" => \UW\IBHelper::getIbId(\UW\IBCodes::IB_CODE_PHOTO),
		"COMPONENT_TEMPLATE" => ".default",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/media/photo/",
		"SEF_URL_TEMPLATES" => array(
			"list" => "",
			"detail" => "#SECTION_ID#/",
		)
	),
	false
); ?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
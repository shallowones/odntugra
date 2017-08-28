<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
/** @global $APPLICATION */
/** @var $isAdmin */
$APPLICATION->SetTitle("Добавление фотографий");

if (!$isAdmin) LocalRedirect('/photo/');
?>

<?$APPLICATION->IncludeComponent(
	"bitrix:photogallery", 
	".default", 
	array(
		"USE_LIGHT_VIEW" => "N",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => \UW\IBHelper::getIbId(\UW\IBCodes::IB_CODE_PHOTO),
		"SECTION_SORT_BY" => "UF_DATE",
		"SECTION_SORT_ORD" => "DESC",
		"ELEMENT_SORT_FIELD" => "id",
		"ELEMENT_SORT_ORDER" => "desc",
		"PATH_TO_USER" => "",
		"DRAG_SORT" => "Y",
		"USE_COMMENTS" => "N",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/media/photo/add/",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"DATE_TIME_FORMAT_DETAIL" => "d.m.Y",
		"DATE_TIME_FORMAT_SECTION" => "d.m.Y",
		"SET_TITLE" => "N",
		"SECTION_PAGE_ELEMENTS" => "15",
		"ELEMENTS_PAGE_ELEMENTS" => "50",
		"PAGE_NAVIGATION_TEMPLATE" => "",
		"ALBUM_PHOTO_SIZE" => "370",
		"THUMBNAIL_SIZE" => "370",
		"JPEG_QUALITY1" => "100",
		"ORIGINAL_SIZE" => "1280",
		"JPEG_QUALITY" => "100",
		"ADDITIONAL_SIGHTS" => array(
		),
		"PHOTO_LIST_MODE" => "Y",
		"SHOWN_ITEMS_COUNT" => "6",
		"SHOW_NAVIGATION" => "N",
		"USE_RATING" => "N",
		"SHOW_TAGS" => "N",
		"UPLOADER_TYPE" => "form",
		"UPLOAD_MAX_FILE_SIZE" => "1000",
		"USE_WATERMARK" => "N",
		"WATERMARK_RULES" => "USER",
		"PATH_TO_FONT" => "default.ttf",
		"WATERMARK_MIN_PICTURE_SIZE" => "800",
		"SHOW_LINK_ON_MAIN_PAGE" => array(
			0 => "id",
			1 => "shows",
			2 => "rating",
			3 => "comments",
		),
		"COMPONENT_TEMPLATE" => ".default",
		"SEF_URL_TEMPLATES" => array(
			"index" => "index.php",
			"section" => "#SECTION_ID#/",
			"section_edit" => "#SECTION_ID#/action/#ACTION#/",
			"section_edit_icon" => "#SECTION_ID#/icon/action/#ACTION#/",
			"upload" => "#SECTION_ID#/action/upload/",
			"detail" => "#SECTION_ID#/#ELEMENT_ID#/",
			"detail_edit" => "#SECTION_ID#/#ELEMENT_ID#/action/#ACTION#/",
			"detail_list" => "list/",
			"search" => "search/",
		)
	),
	false
);?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
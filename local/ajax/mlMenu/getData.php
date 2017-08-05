<?
define('NO_KEEP_STATISTIC', true);
define('NO_AGENT_CHECK', true);
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');
/** @global $APPLICATION */

$request = \Bitrix\Main\Application::getInstance()
    ->getContext()
    ->getRequest();

if ($request->get('getData')) {

$arr = $APPLICATION->IncludeComponent(
    "bitrix:main.include",
    ".default",
    array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "AREA_FILE_RECURSIVE" => "",
        "EDIT_TEMPLATE" => "",
        "COMPONENT_TEMPLATE" => ".default",
        "PATH" => SITE_TEMPLATE_PATH . "/include/contacts.html"
    ),
    false
);

}
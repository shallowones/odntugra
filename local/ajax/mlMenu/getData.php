<?
define('NO_KEEP_STATISTIC', true);
define('NO_AGENT_CHECK', true);
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');
/** @global $APPLICATION */

$request = \Bitrix\Main\Application::getInstance()
    ->getContext()
    ->getRequest();

if ($curDir = $request->get('curDir')) {
    $APPLICATION->IncludeComponent(
        "bitrix:menu",
        "main-menu",
        array(
            "COMPONENT_TEMPLATE" => "main-menu",
            "ROOT_MENU_TYPE" => "top",
            "MENU_CACHE_TYPE" => "N",
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "MENU_CACHE_GET_VARS" => array(),
            "MAX_LEVEL" => "4",
            "CHILD_MENU_TYPE" => "left",
            "USE_EXT" => "N",
            "DELAY" => "N",
            "ALLOW_MULTI_SELECT" => "N",
            "CURRENT_DIR" => $curDir
        ),
        false
    );
}
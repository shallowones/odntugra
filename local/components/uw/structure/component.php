<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var CBitrixComponent $this */
/** @var array $arParams */
/** @var array $arResult */
/** @var string $componentPath */
/** @var string $componentName */
/** @var string $componentTemplate */
/** @global CDatabase $DB */
/** @global CUser $USER */
/** @global CMain $APPLICATION */
\Bitrix\Main\Loader::includeModule('iblock');

$arDefaultUrlTemplates404 = array(
    'list' => '',
    'detail' => '#SECTION_CODE#/'
);
$arDefaultVariableAliases404 = array();
$arDefaultVariableAliases = array();
$arComponentVariables = array(
    'SECTION_CODE'
);

if ($arParams['SEF_MODE'] === 'Y') {
    $arVariables = array();

    $arUrlTemplates = CComponentEngine::MakeComponentUrlTemplates($arDefaultUrlTemplates404, $arParams['SEF_URL_TEMPLATES']);
    $arVariableAliases = CComponentEngine::MakeComponentVariableAliases($arDefaultVariableAliases404, $arParams['VARIABLE_ALIASES']);

    $engine = new CComponentEngine($this);
    $componentPage = $engine->guessComponentPath(
        $arParams['SEF_FOLDER'],
        $arUrlTemplates,
        $arVariables
    );

    $b404 = false;
    if (!$componentPage) {
        $componentPage = 'list';
        $b404 = true;
    }

    if ($b404 && $arParams["SET_STATUS_404"] === "Y") {
        $folder404 = str_replace("\\", "/", $arParams["SEF_FOLDER"]);
        if ($folder404 != "/")
            $folder404 = "/" . trim($folder404, "/ \t\n\r\0\x0B") . "/";
        if (substr($folder404, -1) == "/")
            $folder404 .= "index.php";

        if ($folder404 != $APPLICATION->GetCurPage(true))
            CHTTP::SetStatus("404 Not Found");

    }

    CComponentEngine::InitComponentVariables($componentPage, $arComponentVariables, $arVariableAliases, $arVariables);

    $arResult = array(
        'FOLDER' => $arParams['SEF_FOLDER'],
        'URL_TEMPLATES' => $arUrlTemplates,
        'VARIABLES' => $arVariables,
        'ALIASES' => $arVariableAliases
    );
}

$this->IncludeComponentTemplate($componentPage);
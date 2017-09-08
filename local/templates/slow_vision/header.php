<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @global CMain $APPLICATION */

$arPage = array(
    'js' => array(
        SITE_TEMPLATE_PATH . '/js/main.js',
        SITE_TEMPLATE_PATH . '/js/jquery-1.7.2.min.js',
        SITE_TEMPLATE_PATH . '/js/cookie.js',
        SITE_TEMPLATE_PATH . '/js/js.js',
    )
);

$oAsset = \Bitrix\Main\Page\Asset::getInstance();
foreach ($arPage['js'] as $js) {
    $oAsset->addJs($js);
}

if ($_REQUEST['slow_vision'] === 'N')
{
    $_SESSION['slow_vision'] = 'N';
    LocalRedirect($APPLICATION->GetCurDir());
}

$CurDir = $APPLICATION->GetCurDir();
$arCurDir = explode('/', $CurDir);
$bHomePage = ($CurDir == '/');

?>

<!DOCTYPE HTML>
<head>
    <title><? $APPLICATION->ShowTitle() ?></title>
    <? $APPLICATION->ShowHead() ?>
</head>

<body>
<? $APPLICATION->ShowPanel() ?>
<div <? if (defined("X_STRUCTURE")): ?>class="page page_lt_one-col" <? else: ?> class="page page_lt_main"<? endif; ?>>
    <header class="header">
        <section class="header-tool">
            <div class="wrapper clearfix" style="position: relative">

                <div class="aa-block aaFontsize">
                    <a class="special-set" href="#">Настройки</a>
                </div>
                <div class="aa-settings-popup">
                    <div class="popup-flex">
                        <div class="aaKerning">
                            <div style="margin-right: 20px">Кернинг</div>
                            <div class="aaKerning-wrapper">
                                <a class="aaKerning-small <? echo ($_COOKIE['js-kerning'] === 'normal' || !$_COOKIE['js-kerning']) ? 'a-current' : '' ?>" data-aa-kerning="normal" href="#">Стандартный</a>
                                <a class="aaKerning-big <? echo ($_COOKIE['js-kerning'] === 'big') ? 'a-current' : '' ?>" style="letter-spacing: 5px" data-aa-kerning="big" href="#">Средний</a>
                                <a class="aaKerning-extra <? echo ($_COOKIE['js-kerning'] === 'extra') ? 'a-current' : '' ?>" style="letter-spacing: 8px" data-aa-kerning="extra" href="#">Большой</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tool-font"><span class="tool__label">Размер шрифта</span>
                    <a href="#" data-size="small" class="tool__size js-size tool__size_small <? echo ($_COOKIE['js-size'] === 'small' || !$_COOKIE['js-size']) ? 'tool__size_active' : '' ?>">A</a>
                    <a href="#" data-size="normal" class="tool__size js-size" <? echo ($_COOKIE['js-size'] === 'normal') ? 'tool__size_active' : '' ?>>A</a>
                    <a href="#" data-size="big" class="tool__size js-size tool__size_big <? echo ($_COOKIE['js-size'] === 'big') ? 'tool__size_active' : '' ?>">A</a>
                </div>
                <div class="tool-color">
                    <span class="tool__label tool__label_color">Цвет сайта</span>
                    <a href="#" data-color="normal" class="tool__size js-color tool__color <? echo ($_COOKIE['js-color'] === 'normal' || !$_COOKIE['js-color']) ? 'tool__color_active' : '' ?>">Ц</a>
                    <a href="#" data-color="black"
                       class="tool__size js-color tool__color tool__color_black <? echo ($_COOKIE['js-color'] === 'black') ? 'tool__color_active' : '' ?>">Ц</a>
                    <a href="#" data-color="blue" class="tool__size js-color tool__color tool__color_blue <? echo ($_COOKIE['js-color'] === 'blue') ? 'tool__color_active' : '' ?>">Ц</a>
                </div>
                <div class="tool-eye">
                    <a href="<?= $APPLICATION->GetCurDir() ?>?slow_vision=N" class="tool__label tool__label_link">Обычная версия</a>
                </div>
            </div>
        </section>
        <section class="wrapper">
            <div class="header-logo clearfix">
                <form class="search" action="/search/">
                    <div class="tool-search">
                        <input
                            id="search-form-text"
                            value="<? $APPLICATION->ShowViewContent(\UW\Tools::TARGET_NAME_SEARCH) ?>"
                            name="q"
                            class="tool-search__input"
                            placeholder="Поиск"
                        />
                        <button id="input-name" class="tool-search__submit"></button>
                    </div>
                </form>
        </section>
        <section class="wrapper">
            <div class="header-logo clearfix">
                <a href="/" class="logo__link">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "AREA_FILE_RECURSIVE" => "",
                        "EDIT_TEMPLATE" => "",
                        "COMPONENT_TEMPLATE" => ".default",
                        "PATH" => SITE_TEMPLATE_PATH . "/include/logo_text.html"
                    ),
                    false
                ); ?>
                    </a>
                <div class="header-info">
                    <div class="contacts-line">
                        ПРИЕМНАЯ:
                        <div class="contacts-line__item">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                ".default",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "AREA_FILE_RECURSIVE" => "",
                                    "EDIT_TEMPLATE" => "",
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "PATH" => SITE_TEMPLATE_PATH . "/include/contacts-reception.html"
                                ),
                                false
                            ); ?>
                        </div>
                    </div>
                    <div class="contacts-line">
                         ТЕЛЕФОН:
                        <div class="contacts-line__item">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                ".default",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "AREA_FILE_RECURSIVE" => "",
                                    "EDIT_TEMPLATE" => "",
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "PATH" => SITE_TEMPLATE_PATH . "/include/contacts-phone.html"
                                ),
                                false
                            ); ?>
                        </div>
                    </div>
                    <div class="contacts-line">
                        E-MAIL:
                        <div class="contacts-line__item">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                ".default",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "AREA_FILE_RECURSIVE" => "",
                                    "EDIT_TEMPLATE" => "",
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "PATH" => SITE_TEMPLATE_PATH . "/include/contacts-email.html"
                                ),
                                false
                            ); ?>
                        </div>
                    </div>
                </div>
            </div>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "left_menu",
                    Array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => "",
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "top",
                        "USE_EXT" => "N"
                    )
                );?>

                <? if(!$bHomePage): ?>
                <?$APPLICATION->IncludeComponent("bitrix:menu", "menu.sub", Array(
                    "ROOT_MENU_TYPE" => "left",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "MENU_CACHE_GET_VARS" => "",
                    "MAX_LEVEL" => "1",
                    "CHILD_MENU_TYPE" => "left",
                    "USE_EXT" => "N",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "N",
                ),
                    false
                );?>
                <?endif;?>
        </section>
    </header>


    <section class="wrapper">
    <? if(!defined("X_HOME_PAGE") && !defined("X_NOT_SHOW_TITLE")):?>
        <h1><?$APPLICATION->ShowTitle()?></h1>
    <?endif ?>
    
<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @global CMain $APPLICATION */

$asset = Bitrix\Main\Page\Asset::getInstance();
$page = [
    'css' => [
        'https://fonts.googleapis.com/css?family=Merriweather:400,400i,700,700i|Open+Sans:400,400i,600,600i,700,700i',
        SITE_TEMPLATE_PATH . '/js/vendor/swiper/swiper.min.css',
        SITE_TEMPLATE_PATH . '/js/vendor/fancybox/jquery.fancybox.min.css',
        SITE_TEMPLATE_PATH . '/css/main.css'
    ],
    'js' => [
        SITE_TEMPLATE_PATH . '/js/vendor/underscore/underscore.js',
        SITE_TEMPLATE_PATH . '/js/vendor/jquery/jquery-3.2.1.min.js',
        SITE_TEMPLATE_PATH . '/js/vendor/backbone/backbone.js',
        SITE_TEMPLATE_PATH . '/js/vendor/swiper/swiper.min.js',
        SITE_TEMPLATE_PATH . '/js/vendor/fancybox/jquery.fancybox.min.js',
        SITE_TEMPLATE_PATH . '/js/app/app.js',
        SITE_TEMPLATE_PATH . '/js/app/models/Item.js',
        SITE_TEMPLATE_PATH . '/js/app/collections/Items.js',
        SITE_TEMPLATE_PATH . '/js/app/models/Group.js',
        SITE_TEMPLATE_PATH . '/js/app/collections/Groups.js',
        SITE_TEMPLATE_PATH . '/js/app/views/ItemButton.js',
        SITE_TEMPLATE_PATH . '/js/app/views/ItemLink.js',
        SITE_TEMPLATE_PATH . '/js/app/views/BackButton.js',
        SITE_TEMPLATE_PATH . '/js/app/views/Group.js',
        SITE_TEMPLATE_PATH . '/js/app/views/Menu.js',
        SITE_TEMPLATE_PATH . '/js/vendor/mlmenu/mlmenu.js',
        SITE_TEMPLATE_PATH . '/js/app/main.js'
    ],
    'meta' => [
        '<meta name="viewport" content="width=device-width, initial-scale=1.0">',
        '<meta name="apple-mobile-web-app-capable" content="yes">',
        '<meta name="apple-mobile-web-app-status-bar-style" content="black">'
    ]
];
foreach ($page['css'] as $css) {
    $asset->addCss($css);
}
foreach ($page['js'] as $js) {
    $asset->addJs($js);
}
foreach ($page['meta'] as $meta) {
    $asset->addString($meta);
}

global $USER;
$isAdmin = $USER->IsAdmin();
$main = ($APPLICATION->GetCurDir() === '/');
?>
<!DOCTYPE html>
<html lang="<? echo LANGUAGE_ID ?>">
<head>
    <title><? $APPLICATION->ShowTitle() ?></title>
    <? $APPLICATION->ShowHead() ?>
</head>
<body>
<div class="page<? echo ($isAdmin) ? ' with-panel' : '' ?>">
    <div class="bx-panel"><? $APPLICATION->ShowPanel() ?></div>
    <div class="page-overlay"></div>
    <header class="header">
        <a class="header-logo" href="/"></a>
        <div class="header-bottom">
            <nav id="ml-menu"></nav>
            <div id="helper"></div>
            <form class="search" action="/search/index.php" method="post">
                    <input type="text" id="search-form-text" value="" name="q" class="search__input"
                           placeholder="Поиск">
                    <button type="submit" id="input-name" class="search__submit"></button>
            </form>
            <div class="social">
                <a class="social__item insta" href="http://www.instagram.com/odntugra86/" target="_blank"></a>
                <a class="social__item vk" href="http://www.vk.com/to.kultura" target="_blank"></a>
                <a class="social__item ok" href="http://www.ok.ru/odntugra86" target="_blank"></a>
            </div>
            <div class="contacts">
                <? $APPLICATION->IncludeComponent(
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
                ); ?>
            </div>
            <div class="text-center">
                <a class="slow" href="#">Версия для слабовидящих</a>
                <br><br>
                <a href="#">Старая версия сайта</a>
            </div>
        </div>
    </header>
    <div class="header-mobile">
        <button class="header-mobile__button js-mobile"></button>
        <a class="header-mobile__logo" href="/"></a>
    </div>
    <main class="main">
        <? if (!$main): ?>
        <div class="wrapper-detail">
            <h1 class="main-h1"><? $APPLICATION->ShowTitle() ?></h1>
            <? endif; ?>

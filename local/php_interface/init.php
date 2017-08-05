<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

// регистрируем классы
\Bitrix\Main\Loader::registerAutoLoadClasses(
    null,
    [
        'UW\IBHelper' => '/local/libs/IBHelper.php',
        'UW\IBCodes' => '/local/libs/IBCodes.php',
        'UW\Tools' => '/local/libs/Tools.php',
    ]
);

// подключаем дополнительные функции и хэндлеры
$path = $_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/inc/';
$inc = [
    'gg.php',
    'newsHandler.php',
    'videosHandler.php'
];
foreach ($inc as $file) {
    require ($path . $file);
}
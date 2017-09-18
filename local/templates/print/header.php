<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

?>

<!DOCTYPE HTML>
<html lang="ru-RU">
<head>
    <meta charset="utf-8">
    <title><?=$APPLICATION->ShowTitle()?></title>
    <link rel="shortcut icon" href="/favicon.ico">
    <?=$APPLICATION->ShowHead()?>
</head>

<body>
<?global $APPLICATION;
$APPLICATION->ShowPanel();
$dir = $APPLICATION->GetCurDir();?>
<div id="page">
    <a href="/" class="logo">
        <?$APPLICATION->IncludeFile(
            "/bitrix/templates/main/inc/hdr_logo_text.php",
            Array(),
            Array("MODE"=>"php")
        );?>
    </a>

    <p>
        наш адрес: <a href="<?echo "http://".$GLOBALS["SERVER_NAME"]?>"><?echo "http://".$GLOBALS["SERVER_NAME"]?></a><br>
        адрес страницы: <a href="<?echo "http://".$GLOBALS["SERVER_NAME"].$dir?>"><?echo "http://".$GLOBALS["SERVER_NAME"].$dir?></a>
    </p>


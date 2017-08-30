<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
/** @global $APPLICATION */
$APPLICATION->SetTitle("404 Страница не найдена");
?>

    <div class="wrapper found-404">
        <img src="<? echo SITE_TEMPLATE_PATH . '/images/404.png' ?>">
        <div class="found-404-text">
            Страница, которую Вы ищете, не существует или была перемещена.<br>
            Попробуйте воспользоваться поиском или <a href="/">вернитесь на главную</a>.
        </div>
    </div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
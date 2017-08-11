<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @global CMain $APPLICATION */
?>

<? if (!$main): ?>
    </div> <!-- .wrapper-detail -->
    <? if (!defined('isPolls')): ?>
        <? $APPLICATION->IncludeComponent(
            "uw:poll",
            ".default",
            array(
                "IBLOCK_ID" => \UW\IBHelper::getIbId(\UW\IBCodes::IB_CODE_POLLS),
                "COOKIE_NAME" => "POLLS",
                "POLLS_LINK" => "/about/polls/"
            ),
            false
        ); ?>
    <? else: ?>
        <div class="line-for-bottom"></div>
    <? endif; ?>
<? endif; ?>

<div class="footer">
    <div class="wrapper footer-flex">
        <div class="footer-left">
            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                ".default",
                array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "AREA_FILE_RECURSIVE" => "",
                    "EDIT_TEMPLATE" => "",
                    "COMPONENT_TEMPLATE" => ".default",
                    "PATH" => SITE_TEMPLATE_PATH . "/include/footer.html"
                ),
                false
            ); ?>
        </div>
        <div class="footer-right">
            <a class="uw" href="http://ugraweb.ru/" target="_blank"></a>
        </div>
    </div>
</div>

</main> <!-- .main -->
</div> <!-- .page -->
</body>
</html>
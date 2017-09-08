<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

        <div class="footer">
            <section class="wrapper">
                <div class="footer__text">
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
                <address class="footer__text address">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        ".default",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "AREA_FILE_RECURSIVE" => "",
                            "EDIT_TEMPLATE" => "",
                            "COMPONENT_TEMPLATE" => ".default",
                            "PATH" => SITE_TEMPLATE_PATH . "/include/contacts-company.html"
                        ),
                        false
                    ); ?>                   
                </address>
            </section>
        </div>

</section>
        </div>
    </body>
</html>
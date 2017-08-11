<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
/** @global CMain $APPLICATION */
$APPLICATION->SetTitle("Контакты");
?>
    <div class="cont">
        <div class="cont-left">
            <div class="main-contacts">
                <div class="main-contacts-line">
                    ПРИЕМНАЯ:
                    <span>
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
                    </span>
                </div>
                <div class="main-contacts-line">
                    ТЕЛЕФОН:
                    <span>
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
                    </span>
                </div>
                <div class="main-contacts-line">
                    E-MAIL:
                    <span>
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
                    </span>
                </div>
                <div class="main-contacts-line with-social">
                    СОЦСЕТИ:
                    <div class="social">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            ".default",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "AREA_FILE_RECURSIVE" => "",
                                "EDIT_TEMPLATE" => "",
                                "COMPONENT_TEMPLATE" => ".default",
                                "PATH" => SITE_TEMPLATE_PATH . "/include/contacts-social.html"
                            ),
                            false
                        ); ?>
                    </div>
                </div>
                <div class="main-contacts-line block">
                    СХЕМА ПРОЕЗДА:
                    <span>
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            ".default",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "AREA_FILE_RECURSIVE" => "",
                                "EDIT_TEMPLATE" => "",
                                "COMPONENT_TEMPLATE" => ".default",
                                "PATH" => SITE_TEMPLATE_PATH . "/include/contacts-way.html"
                            ),
                            false
                        ); ?>
                    </span>
                </div>
            </div>
        </div>
        <a class="cont-right" href="/about/structure/spravochnik/">
            <i class="cont-right__icon"></i>
            <div class="cont-right__name">ТЕЛЕФОННЫЙ<br>СПРАВОЧНИК</div>
        </a>
    </div>

    <div class="map">
        <? $APPLICATION->IncludeComponent(
            "bitrix:map.yandex.view",
            ".default",
            array(
                "CONTROLS" => array(
                    0 => "ZOOM",
                    1 => "MINIMAP",
                    2 => "TYPECONTROL",
                    3 => "SCALELINE",
                ),
                "INIT_MAP_TYPE" => "MAP",
                "MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:60.99957658679533;s:10:\"yandex_lon\";d:69.02037422992635;s:12:\"yandex_scale\";i:17;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:69.02087848522115;s:3:\"LAT\";d:60.99951667459093;s:4:\"TEXT\";s:31:\"улица Гагарина, 10\";}}}",
                "MAP_HEIGHT" => "400",
                "MAP_ID" => "",
                "MAP_WIDTH" => "100%",
                "OPTIONS" => array(
                    0 => "ENABLE_SCROLL_ZOOM",
                    1 => "ENABLE_DBLCLICK_ZOOM",
                    2 => "ENABLE_DRAGGING",
                ),
                "COMPONENT_TEMPLATE" => ".default"
            ),
            false
        ); ?>
    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
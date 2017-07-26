<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><div class="main-contacts-blocks">
        <div class="main-contacts-block">
            <div class="main-contacts">
                <div class="main-contacts-line">
                    <div class="main-contacts-line__item">ПРИЕМНАЯ:</div>
                    <div class="main-contacts-line__item">8 (3467) <b>33-29-64</b></div>
                </div>
                <div class="main-contacts-line">
                    <div class="main-contacts-line__item">ТЕЛЕФОН:</div>
                    <div class="main-contacts-line__item">8 (3467) <b>33-26-04</b></div>
                </div>
                <div class="main-contacts-line">
                    <div class="main-contacts-line__item">E-MAIL:</div>
                    <div class="main-contacts-line__item"><a href="#">to.kultura@yandex.ru</a></div>
                </div>
            </div>
            <div class="main-contacts-social">
                <p class="main-contacts-caption">соцсети:
                <div class="main-contacts-social__items"><a class="social__item insta" href="#">[insta]</a><a class="social__item vk" href="#">[vk]</a><a class="social__item ok" href="#">[ok]</a></div>
                </p>
            </div>
            <div class="driving-directions">
                <p class="main-contacts-caption">схема проезда: <span class="driving-directions__text">Автономное учреждение Ханты-Мансийского автономного округа - Югры "Окружной дом народного творчества", <b>г. Ханты-Мансийск,ул. Гагарина, д. 10, Ханты-Мансийск, Ханты-Мансийский автономный округ - Югра, 628011</b></span></p>
            </div>
        </div><a class="link-phonebook" href="#">
            <p>Телефонный<br>справочник</p></a>
    </div>
    <div class="map"><?$APPLICATION->IncludeComponent(
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
);?></div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
/** @global CMain $APPLICATION */
$APPLICATION->SetTitle("Окружной дом народного творчества");
?>

<? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "main-slider",
    array(
        "COMPONENT_TEMPLATE" => "main-slider",
        "IBLOCK_TYPE" => "content",
        "IBLOCK_ID" => \UW\IBHelper::getIbId(\UW\IBCodes::IB_CODE_MAIN_SLIDER),
        "NEWS_COUNT" => "20",
        "SORT_BY1" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_BY2" => "ACTIVE_FROM",
        "SORT_ORDER2" => "DESC",
        "FILTER_NAME" => "",
        "FIELD_CODE" => array(
            0 => "",
            1 => "",
        ),
        "PROPERTY_CODE" => array(
            0 => "LINK",
            1 => "",
        ),
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "36000000",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "PREVIEW_TRUNCATE_LEN" => "",
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "SET_TITLE" => "N",
        "SET_BROWSER_TITLE" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_LAST_MODIFIED" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "INCLUDE_SUBSECTIONS" => "Y",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "PAGER_TEMPLATE" => ".default",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_TITLE" => "Новости",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "SET_STATUS_404" => "N",
        "SHOW_404" => "N",
        "MESSAGE_404" => ""
    ),
    false
); ?>
    <div class="wrapper">
        <h1 class="main-h1">Новости<a class="link" href="/news/">Все новости</a></h1>
        <? // выводим только те новости, у которых свойство "Закрепить новость" активно
        $GLOBALS['filterConsolidate'] = [
            '!PROPERTY_CONSOLIDATE_VALUE' => false
        ];
        $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "news-slider",
            array(
                "COMPONENT_TEMPLATE" => "news-slider",
                "IBLOCK_TYPE" => "content",
                "IBLOCK_ID" => \UW\IBHelper::getIbId(\UW\IBCodes::IB_CODE_NEWS),
                "NEWS_COUNT" => "20",
                "SORT_BY1" => "SORT",
                "SORT_ORDER1" => "ASC",
                "SORT_BY2" => "ACTIVE_FROM",
                "SORT_ORDER2" => "DESC",
                "FILTER_NAME" => "filterConsolidate",
                "FIELD_CODE" => array(),
                "PROPERTY_CODE" => array(),
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "36000000",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "PREVIEW_TRUNCATE_LEN" => "",
                "ACTIVE_DATE_FORMAT" => "j F Y",
                "SET_TITLE" => "N",
                "SET_BROWSER_TITLE" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_LAST_MODIFIED" => "N",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "N",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "INCLUDE_SUBSECTIONS" => "Y",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "PAGER_TEMPLATE" => ".default",
                "DISPLAY_TOP_PAGER" => "N",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "PAGER_TITLE" => "Новости",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "SET_STATUS_404" => "N",
                "SHOW_404" => "N",
                "MESSAGE_404" => ""
            ),
            false
        ); ?>
        <? // выводим только те новости, у которых свойство "Закрепить новость" не активно
        $GLOBALS['filterNoConsolidate'] = [
            '=PROPERTY_CONSOLIDATE_VALUE' => false
        ];
        $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "news-list",
            array(
                "COMPONENT_TEMPLATE" => "news-list",
                "IBLOCK_TYPE" => "content",
                "IBLOCK_ID" => \UW\IBHelper::getIbId(\UW\IBCodes::IB_CODE_NEWS),
                "NEWS_COUNT" => "5",
                "SORT_BY1" => "SORT",
                "SORT_ORDER1" => "ASC",
                "SORT_BY2" => "ACTIVE_FROM",
                "SORT_ORDER2" => "DESC",
                "FILTER_NAME" => "filterNoConsolidate",
                "FIELD_CODE" => array(),
                "PROPERTY_CODE" => array(),
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "36000000",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "PREVIEW_TRUNCATE_LEN" => "",
                "ACTIVE_DATE_FORMAT" => "j F Y",
                "SET_TITLE" => "N",
                "SET_BROWSER_TITLE" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_LAST_MODIFIED" => "N",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "N",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "INCLUDE_SUBSECTIONS" => "Y",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "PAGER_TEMPLATE" => ".default",
                "DISPLAY_TOP_PAGER" => "N",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "PAGER_TITLE" => "Новости",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "SET_STATUS_404" => "N",
                "SHOW_404" => "N",
                "MESSAGE_404" => ""
            ),
            false
        ); ?>
        <a class="mobile-more" href="#">ВСЕ НОВОСТИ</a>
    </div>
    <div class="blue">
        <div class="wrapper">
            <h1 class="main-h1">Ближайшие мероприятия<a class="link" href="#">Все мероприятия</a></h1>
            <div class="blue-flex"><a class="blue__item" href="#">Древний праздник встречи весны у северных народов
                    ханты и манси <span>8 апреля 2017</span></a><a class="blue__item" href="#">
                    В Ханты-Мансийске состоялся вечер-сказ «Всё отдать земле и детям…», посвященный 80-летию
                    Марии Кузьминичны Волдиной. <span>28 января 2017</span></a><a class="blue__item" href="#">Межрегиональный
                    форум «Диалог национальных культур» <span>4 января 2017</span></a><a class="blue__item" href="#">
                    В Ханты-Мансийске состоялся вечер-сказ «Всё отдать земле и детям…», посвященный 80-летию
                    Марии Кузьминичны Волдиной. <span>28 января 2017</span></a></div>
            <a class="mobile-more" href="#">ВСЕ МЕРОПРИЯТИЯ</a>
        </div>
    </div>
    <div class="wrapper photo">
        <h1 class="main-h1">Фотогалерея<a class="link" href="#">Все фотографии</a></h1>
        <div class="swiper-container photo-slider js-bottom-slider">
            <div class="swiper-wrapper bottom-wrapper"><a class="swiper-slide photos__item" href="#">
                    <div class="photos__item-img" style="background-image: url('../images/content/foto-1.png');"></div>
                    <div class="photos__item-wrap"></div>
                    <div class="photos__item-desc">
                        <div class="photos__item-desc__date">24 марта 2017</div>
                        <div class="photos__item-desc__title">Праздничный концерт, посвященный Дню работника культуры
                        </div>
                    </div>
                    <div class="more">ПЕРЕЙТИ К АЛЬБОМУ</div>
                </a><a class="swiper-slide photos__item" href="#">
                    <div class="photos__item-img" style="background-image: url('../images/content/foto-2.png');"></div>
                    <div class="photos__item-wrap"></div>
                    <div class="photos__item-desc">
                        <div class="photos__item-desc__date">24 марта 2017</div>
                        <div class="photos__item-desc__title">Праздничный концерт, посвященный Дню работника культуры
                        </div>
                    </div>
                    <div class="more">ПЕРЕЙТИ К АЛЬБОМУ</div>
                </a><a class="swiper-slide photos__item" href="#">
                    <div class="photos__item-img" style="background-image: url('../images/content/foto-3.png');"></div>
                    <div class="photos__item-wrap"></div>
                    <div class="photos__item-desc">
                        <div class="photos__item-desc__date">24 марта 2017</div>
                        <div class="photos__item-desc__title">Праздничный концерт, посвященный Дню работника культуры
                        </div>
                    </div>
                    <div class="more">ПЕРЕЙТИ К АЛЬБОМУ</div>
                </a></div>
            <div class="swiper-button-prev inner-left"></div>
            <div class="swiper-button-next inner-right"></div>
        </div>
        <a class="mobile-more" href="#">ВСЕ ФОТОГРАФИИ</a>
    </div>
    <div class="blue-second">
        <div class="wrapper">
            <h1 class="main-h1">Коллективы ОДНТ</h1>
            <div class="swiper-container bottom-slider js-bottom-slider">
                <div class="swiper-wrapper bottom-wrapper"><a class="swiper-slide bottom-slide" href="#"><img
                                class="bottom-slide__img" src="../images/content/bottom-1.png">
                        <div class="inner-slide__wrap"></div>
                        <div class="bottom-slide__desc">Народный семейный фольклорно-этнографический ансамбль «Ешак
                            най»
                        </div>
                        <div class="more">ПОДРОБНЕЕ</div>
                    </a><a class="swiper-slide bottom-slide" href="#"><img class="bottom-slide__img"
                                                                           src="../images/content/bottom-2.png">
                        <div class="inner-slide__wrap"></div>
                        <div class="bottom-slide__desc">Народный самодеятельный коллектив Хор русской песни «Покрова»
                        </div>
                        <div class="more">ПОДРОБНЕЕ</div>
                    </a><a class="swiper-slide bottom-slide" href="#"><img class="bottom-slide__img"
                                                                           src="../images/content/bottom-3.png">
                        <div class="inner-slide__wrap"></div>
                        <div class="bottom-slide__desc">Хореографический коллектив «Феерия»</div>
                        <div class="more">ПОДРОБНЕЕ</div>
                    </a><a class="swiper-slide bottom-slide" href="#"><img class="bottom-slide__img"
                                                                           src="../images/content/bottom-4.png">
                        <div class="inner-slide__wrap"></div>
                        <div class="bottom-slide__desc">Детская студия танца народов Кавказа</div>
                        <div class="more">ПОДРОБНЕЕ</div>
                    </a><a class="swiper-slide bottom-slide" href="#"><img class="bottom-slide__img"
                                                                           src="../images/content/bottom-1.png">
                        <div class="inner-slide__wrap"></div>
                        <div class="bottom-slide__desc">Народный семейный фольклорно-этнографический ансамбль «Ешак
                            най»
                        </div>
                        <div class="more">ПОДРОБНЕЕ</div>
                    </a><a class="swiper-slide bottom-slide" href="#"><img class="bottom-slide__img"
                                                                           src="../images/content/bottom-2.png">
                        <div class="inner-slide__wrap"></div>
                        <div class="bottom-slide__desc">Народный самодеятельный коллектив Хор русской песни «Покрова»
                        </div>
                        <div class="more">ПОДРОБНЕЕ</div>
                    </a><a class="swiper-slide bottom-slide" href="#"><img class="bottom-slide__img"
                                                                           src="../images/content/bottom-3.png">
                        <div class="inner-slide__wrap"></div>
                        <div class="bottom-slide__desc">Хореографический коллектив «Феерия»</div>
                        <div class="more">ПОДРОБНЕЕ</div>
                    </a><a class="swiper-slide bottom-slide" href="#"><img class="bottom-slide__img"
                                                                           src="../images/content/bottom-4.png">
                        <div class="inner-slide__wrap"></div>
                        <div class="bottom-slide__desc">Детская студия танца народов Кавказа</div>
                        <div class="more">ПОДРОБНЕЕ</div>
                    </a></div>
                <div class="swiper-button-prev inner-left"></div>
                <div class="swiper-button-next inner-right"></div>
            </div>
        </div>
        <form class="vote wrapper" action="#">
            <div class="vote-title"><img class="vote-title__img" src="<? echo SITE_TEMPLATE_PATH . '/images/vote.png' ?>">
                <div class="vote-title__desc">
                    Оцените качество проведения Интернет – экспозиции «Вернисаж творчества самодеятельных художников»,
                    лиц с ограничениями жизнедеятельности

                </div>
            </div>
            <div class="vote-radio">
                <input class="vote-radio__input" type="radio" name="radio" id="radio-0">
                <label class="vote-radio__label" for="radio-0">Татьяна Николаевна Кривуля</label>
                <input class="vote-radio__input" type="radio" name="radio" id="radio-1">
                <label class="vote-radio__label" for="radio-1">Галина Михайловна Галушко</label>
                <input class="vote-radio__input" type="radio" name="radio" id="radio-2">
                <label class="vote-radio__label" for="radio-2">Нина Владимировна Халилова</label>
                <input class="vote-radio__input" type="radio" name="radio" id="radio-3" checked>
                <label class="vote-radio__label" for="radio-3">Татьяна Николаевна Кривуля</label>
                <input class="vote-radio__input" type="radio" name="radio" id="radio-4">
                <label class="vote-radio__label" for="radio-4">солистка Выдрина Юлия (Образцовый художественный
                    коллектив «Театр песни “Экспромт”»)</label>
                <input class="vote-radio__input" type="radio" name="radio" id="radio-5">
                <label class="vote-radio__label" for="radio-5">Нина Владимировна Халилова</label>
            </div>
            <div class="vote-contrs">
                <div class="vote-contrs-left">
                    <button class="vote__button">Голосовать</button>
                </div>
                <div class="vote-contrs-right"><a class="link" href="#">Смотреть результаты</a><a class="link" href="#">Старые
                        опросы</a></div>
            </div>
        </form>
    </div>
    <div class="wrapper">
        <? $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "partners",
            array(
                "COMPONENT_TEMPLATE" => "partners",
                "IBLOCK_TYPE" => "content",
                "IBLOCK_ID" => \UW\IBHelper::getIbId(\UW\IBCodes::IB_CODE_PARTNERS),
                "NEWS_COUNT" => "20",
                "SORT_BY1" => "SORT",
                "SORT_ORDER1" => "ASC",
                "SORT_BY2" => "ACTIVE_FROM",
                "SORT_ORDER2" => "DESC",
                "FILTER_NAME" => "",
                "FIELD_CODE" => array(
                    0 => "",
                    1 => "",
                ),
                "PROPERTY_CODE" => array(
                    0 => "link",
                    1 => "",
                ),
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "36000000",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "PREVIEW_TRUNCATE_LEN" => "",
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "SET_TITLE" => "N",
                "SET_BROWSER_TITLE" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_LAST_MODIFIED" => "N",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "N",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "INCLUDE_SUBSECTIONS" => "Y",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "PAGER_TEMPLATE" => ".default",
                "DISPLAY_TOP_PAGER" => "N",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "PAGER_TITLE" => "Новости",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "SET_STATUS_404" => "N",
                "SHOW_404" => "N",
                "MESSAGE_404" => ""
            ),
            false
        ); ?>
    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
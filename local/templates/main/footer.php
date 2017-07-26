<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); /** @global CMain $APPLICATION */ ?>
</div>
<? if($APPLICATION->GetCurDir() == "/"):?>
<div class="blue">
    <div class="wrapper">
        <h1 class="main-h1">Ближайшие мероприятия<a class="link" href="#">Все мероприятия</a></h1>
        <div class="blue-flex"><a class="blue__item" href="#">Древний праздник встречи весны у северных народов ханты и манси <span>8 апреля 2017</span></a><a class="blue__item" href="#">
                В Ханты-Мансийске состоялся вечер-сказ «Всё отдать земле и детям…», посвященный 80-летию
                Марии Кузьминичны Волдиной. <span>28 января 2017</span></a><a class="blue__item" href="#">
                Межрегиональный форум «Диалог национальных культур» <span>4 января 2017</span>
            </a></div>
    </div>
</div>
<div class="wrapper">
    <h1 class="main-h1">Фотогалерея<a class="link" href="#">Все фотографии</a></h1>
    <div class="photos"><a class="photos__item" href="#">
            <div class="photos__item-img"><img src="<?= SITE_TEMPLATE_PATH ?>/images/content/foto-1.png"></div>
            <div class="photos__item-wrap"></div>
            <div class="photos__item-desc">
                <div class="photos__item-desc__date">24 марта 2017</div>
                <div class="photos__item-desc__title">Праздничный концерт, посвященный Дню работника культуры</div>
            </div>
            <div class="more">ПЕРЕЙТИ К АЛЬБОМУ</div></a><a class="photos__item" href="#">
            <div class="photos__item-img"><img src="<?= SITE_TEMPLATE_PATH ?>/images/content/foto-2.png"></div>
            <div class="photos__item-wrap"></div>
            <div class="photos__item-desc">
                <div class="photos__item-desc__date">24 марта 2017</div>
                <div class="photos__item-desc__title">Праздничный концерт, посвященный Дню работника культуры</div>
            </div>
            <div class="more">ПЕРЕЙТИ К АЛЬБОМУ</div></a><a class="photos__item" href="#">
            <div class="photos__item-img"><img src="<?= SITE_TEMPLATE_PATH ?>/images/content/foto-3.png"></div>
            <div class="photos__item-wrap"></div>
            <div class="photos__item-desc">
                <div class="photos__item-desc__date">24 марта 2017</div>
                <div class="photos__item-desc__title">Праздничный концерт, посвященный Дню работника культуры</div>
            </div>
            <div class="more">ПЕРЕЙТИ К АЛЬБОМУ</div></a></div>
</div>
<div class="blue-second">
    <div class="wrapper">
        <h1 class="main-h1">Коллективы ОДНТ</h1>
        <div class="swiper-container bottom-slider js-bottom-slider">
            <div class="swiper-wrapper bottom-wrapper"><a class="swiper-slide bottom-slide" href="#"><img class="bottom-slide__img" src="<?= SITE_TEMPLATE_PATH ?>/images/content/bottom-1.png">
                    <div class="inner-slide__wrap"></div>
                    <div class="bottom-slide__desc">Народный семейный фольклорно-этнографический ансамбль «Ешак най»</div>
                    <div class="more">ПОДРОБНЕЕ</div></a><a class="swiper-slide bottom-slide" href="#"><img class="bottom-slide__img" src="<?= SITE_TEMPLATE_PATH ?>/images/content/bottom-2.png">
                    <div class="inner-slide__wrap"></div>
                    <div class="bottom-slide__desc">Народный самодеятельный коллектив Хор русской песни «Покрова»</div>
                    <div class="more">ПОДРОБНЕЕ</div></a><a class="swiper-slide bottom-slide" href="#"><img class="bottom-slide__img" src="<?= SITE_TEMPLATE_PATH ?>/images/content/bottom-3.png">
                    <div class="inner-slide__wrap"></div>
                    <div class="bottom-slide__desc">Хореографический коллектив «Феерия»</div>
                    <div class="more">ПОДРОБНЕЕ</div></a><a class="swiper-slide bottom-slide" href="#"><img class="bottom-slide__img" src="<?= SITE_TEMPLATE_PATH ?>/images/content/bottom-4.png">
                    <div class="inner-slide__wrap"></div>
                    <div class="bottom-slide__desc">Детская студия танца народов Кавказа</div>
                    <div class="more">ПОДРОБНЕЕ</div></a><a class="swiper-slide bottom-slide" href="#"><img class="bottom-slide__img" src="<?= SITE_TEMPLATE_PATH ?>/images/content/bottom-1.png">
                    <div class="inner-slide__wrap"></div>
                    <div class="bottom-slide__desc">Народный семейный фольклорно-этнографический ансамбль «Ешак най»</div>
                    <div class="more">ПОДРОБНЕЕ</div></a><a class="swiper-slide bottom-slide" href="#"><img class="bottom-slide__img" src="<?= SITE_TEMPLATE_PATH ?>/images/content/bottom-2.png">
                    <div class="inner-slide__wrap"></div>
                    <div class="bottom-slide__desc">Народный самодеятельный коллектив Хор русской песни «Покрова»</div>
                    <div class="more">ПОДРОБНЕЕ</div></a><a class="swiper-slide bottom-slide" href="#"><img class="bottom-slide__img" src="<?= SITE_TEMPLATE_PATH ?>/images/content/bottom-3.png">
                    <div class="inner-slide__wrap"></div>
                    <div class="bottom-slide__desc">Хореографический коллектив «Феерия»</div>
                    <div class="more">ПОДРОБНЕЕ</div></a><a class="swiper-slide bottom-slide" href="#"><img class="bottom-slide__img" src="<?= SITE_TEMPLATE_PATH ?>/images/content/bottom-4.png">
                    <div class="inner-slide__wrap"></div>
                    <div class="bottom-slide__desc">Детская студия танца народов Кавказа</div>
                    <div class="more">ПОДРОБНЕЕ</div></a></div>
            <div class="controls">
                <div class="wrapper for-controls">
                    <div class="swiper-button-prev inner-left"></div>
                    <div class="swiper-button-next inner-right"></div>
                </div>
            </div>
        </div>
    </div>
    <form class="vote wrapper" action="#">
        <div class="vote-title"><img class="vote-title__img" src="<?= SITE_TEMPLATE_PATH ?>/images/vote.png">
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
            <label class="vote-radio__label" for="radio-4">солистка Выдрина Юлия (Образцовый художественный коллектив «Театр песни “Экспромт”»)</label>
            <input class="vote-radio__input" type="radio" name="radio" id="radio-5">
            <label class="vote-radio__label" for="radio-5">Нина Владимировна Халилова</label>
        </div>
        <div class="vote-contrs">
            <div class="vote-contrs-left">
                <button class="vote__button" type="submit">Голосовать</button>
            </div>
            <div class="vote-contrs-right"><a class="link" href="#">Смотреть результаты</a><a class="link" href="#">Старые опросы</a></div>
        </div>
    </form>
</div>

<div class="wrapper">
    <div class="swiper-container part-slider js-part-slider">
        <div class="swiper-wrapper"><a class="swiper-slide part-slide" href="#"><img class="part-slide__img" src="<?= SITE_TEMPLATE_PATH ?>/images/content/part-2.png"></a><a class="swiper-slide part-slide" href="#"><img class="part-slide__img" src="<?= SITE_TEMPLATE_PATH ?>/images/content/part-1.png"></a><a class="swiper-slide part-slide" href="#"><img class="part-slide__img" src="<?= SITE_TEMPLATE_PATH ?>/images/content/part-3.png"></a><a class="swiper-slide part-slide" href="#"><img class="part-slide__img" src="<?= SITE_TEMPLATE_PATH ?>/images/content/part-1.png"></a><a class="swiper-slide part-slide" href="#"><img class="part-slide__img" src="<?= SITE_TEMPLATE_PATH ?>/images/content/part-2.png"></a><a class="swiper-slide part-slide" href="#"><img class="part-slide__img" src="<?= SITE_TEMPLATE_PATH ?>/images/content/part-3.png"></a></div>
        <div class="swiper-button-prev inner-left"></div>
        <div class="swiper-button-next inner-right"></div>
    </div>
</div>
<? endif; ?>
<div class="footer">
    <div class="wrapper footer-flex">
        <div class="footer-left">
            <span>Окружной дом народного творчества</span>
            2009-2015 АУ ХМАО – Югры «Окружной дом народного творчества»<br>
            628011, г. Ханты-Мансийск, ул. Гагарина, д. 10
        </div>
        <div class="footer-right"><a class="uw" href="#"></a></div>
    </div>
</div>
</main>
</div>
</body>
</html>
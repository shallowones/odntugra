<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); /** @global CMain $APPLICATION */ ?>
<!DOCTYPE html>
<html lang="<? echo LANGUAGE_ID ?>">
<head>
    <title><? $APPLICATION->ShowTitle() ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,400i,700,700i|Open+Sans:400,400i,600,600i,700,700i">
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/js/vendor/swiper/swiper.min.css">
    <script src="<?= SITE_TEMPLATE_PATH ?>/js/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="<?= SITE_TEMPLATE_PATH ?>/js/vendor/swiper/swiper.min.js"></script>
    <script src="<?= SITE_TEMPLATE_PATH ?>/js/app/main.js"></script>
    <? $APPLICATION->ShowHead() ?>
</head>
<body>
<? $APPLICATION->ShowPanel(); ?>
<div class="page">
    <header class="header"><a class="header-logo" href="#"></a>
        <div class="header-bottom">
            <nav class="nav"><a class="nav__item" href="#">О НАС</a><br><a class="nav__item" href="#">ПРЕСС-СЛУЖБА</a><br><a class="nav__item" href="#">ДЕЯТЕЛЬНОСТЬ</a><br><a class="nav__item" href="#">ПРОЕКТЫ</a><br><a class="nav__item" href="#">КУЛЬТУРНО-ДОСУГОВЫЕ УЧРЕЖДЕНИЯ ЮГРЫ</a><br><a class="nav__item" href="#">ДОКУМЕНТЫ</a><br><a class="nav__item" href="#">ФИНАНСОВО-ХОЗЯЙСТВЕННАЯ ДЕЯТЕЛЬНОСТЬ</a><br><a class="nav__item" href="#">КОНТАКТЫ</a><br>
            </nav>
            <div class="search">
                <input class="search__input" type="text" placeholder="Поиск">
                <button class="search__submit" type="submit"></button>
            </div>
            <div class="social"><a class="social__item insta" href="#">[insta]</a><a class="social__item vk" href="#">[vk]</a><a class="social__item ok" href="#">[ok]</a></div>
            <div class="contacts">
                <div class="contacts-line">
                    <div class="contacts-line__item">ПРИЕМНАЯ:</div>
                    <div class="contacts-line__item">8 (3467) <b>33-29-64</b></div>
                </div>
                <div class="contacts-line">
                    <div class="contacts-line__item">ТЕЛЕФОН:</div>
                    <div class="contacts-line__item">8 (3467) <b>33-26-04</b></div>
                </div>
                <div class="contacts-line">
                    <div class="contacts-line__item">E-MAIL:</div>
                    <div class="contacts-line__item"><a href="#"><b>to.kultura@yandex.ru</b></a></div>
                </div>
            </div>
            <div class="text-center"><a class="slow" href="#">Версия для слабовидящих</a><br><br><a href="#">Старая версия сайта</a></div>
        </div>
    </header>
    <main class="main">
       <? if($APPLICATION->GetCurDir() == "/"):?>

        <div class="swiper-container top-slider js-top-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide top-slide"><img class="top-slide__img" src="<?= SITE_TEMPLATE_PATH ?>/images/content/top-slider.png">
                    <div class="top-slide__wrap"></div>
                    <div class="top-slide__desc">
                        <div class="info">
                            <h2>Окружной Дом народного творчества отмечен за активное участие на Международном IT-Форуме</h2>
                            <p>
                                Оргкомитет IX Международного IT-Форума с участием стран БРИКС и ШОС выражает благодарность Окружному
                                Дому народного творчества за активное участие в выставке «Информационные технологии для всех».
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide top-slide"><img class="top-slide__img" src="<?= SITE_TEMPLATE_PATH ?>/images/content/top-slider.png">
                    <div class="top-slide__wrap"></div>
                    <div class="top-slide__desc">
                        <div class="info">
                            <h2>Окружной Дом народного творчества отмечен за активное участие на Международном IT-Форуме</h2>
                            <p>
                                Оргкомитет IX Международного IT-Форума с участием стран БРИКС и ШОС выражает благодарность Окружному
                                Дому народного творчества за активное участие в выставке «Информационные технологии для всех».
                                Оргкомитет IX Международного IT-Форума с участием стран БРИКС и ШОС выражает благодарность Окружному
                                Дому народного творчества за активное участие в выставке «Информационные технологии для всех».
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide top-slide"><img class="top-slide__img" src="<?= SITE_TEMPLATE_PATH ?>/images/content/top-slider.png">
                    <div class="top-slide__wrap"></div>
                    <div class="top-slide__desc">
                        <div class="info">
                            <h2>Окружной Дом народного творчества отмечен за активное участие на Международном IT-Форуме</h2>
                            <p>
                                Оргкомитет IX Международного IT-Форума с участием стран БРИКС и ШОС выражает благодарность Окружному
                                Дому народного творчества за активное участие в выставке «Информационные технологии для всех».
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev top-left"></div>
            <div class="swiper-button-next top-right"></div>
        </div>
        <? endif; ?>
        <div class="wrapper">
            <h1 class="main-h1"><?$APPLICATION->ShowTitle(false);?><? if($APPLICATION->GetCurDir() == "/"):?><a class="link" href="#">Все новости</a><?endif;?></h1>
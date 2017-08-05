<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @global CMain $APPLICATION */
?>

<? if (!$main): ?>
    </div> <!-- .wrapper-detail -->
    <form class="vote wrapper" action="#">
        <div class="vote-title">
            <img class="vote-title__img" src="<? echo SITE_TEMPLATE_PATH . '/images/vote.png' ?>">
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
            <div class="vote-contrs-right">
                <a class="link" href="#">Смотреть результаты</a>
                <a class="link" href="#">Старые опросы</a>
            </div>
        </div>
    </form>
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
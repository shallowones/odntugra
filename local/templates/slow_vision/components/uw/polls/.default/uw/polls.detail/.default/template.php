<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var CBitrixComponentTemplate $this */
/** @var array $arParams */
/** @var array $arResult */
/** @var string $componentPath */
/** @var string $componentName */
/** @var string $componentTemplate */
/** @global CDatabase $DB */
/** @global CUser $USER */
/** @global CMain $APPLICATION */
?>

<? if ($arResult['poll']): ?>
    <form class="vote" action="<? echo POST_FORM_ACTION_URI ?>" method="post">
        <input type="hidden" name="poll-id" value="<? echo $arResult['poll']['id'] ?>"/>

            <div><? echo $arResult['poll']['name'] ?></div>
        <br>
        <div>
            <? foreach ($arResult['poll']['options'] as $optionId => $optionName): ?>
                <input
                        class="vote-radio__input"
                        type="radio"
                        name="option"
                        id="<? echo 'option-' . $optionId ?>"
                        value="<? echo $optionId ?>"
                />
                <label class="vote-radio__label" for="<? echo 'option-' . $optionId ?>"><? echo $optionName ?></label>
                <br>
            <? endforeach; ?>
        </div>
        <br>
        <div class="vote-contrs">
            <div class="vote-contrs-left">
                <button class="form__submit" name="set-answer" value="Y">Голосовать</button>
            </div>
            <div class="vote-contrs-right">
                <a class="link custom" href="<? echo $arResult['listLink'] ?>">Список опросов</a>
            </div>
        </div>
    </form>
<? elseif ($arResult['answers']): ?>
        <div><? echo $arResult['answers']['name'] ?></div>
        <ul>
            <? foreach ($arResult['answers']['items'] as $item): ?>
                <li> <? echo $item['value'] ?> -

                       <? echo $item['count'] ?>%</li>

            <? endforeach; ?>
        </ul>
            <div>
                <a href="<? echo $arResult['listLink'] ?>">Список опросов</a>
            </div>
<? endif; ?>

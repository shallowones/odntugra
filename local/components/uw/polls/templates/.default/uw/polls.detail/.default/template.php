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
        <div class="vote-title">
            <img class="vote-title__img" src="<? echo SITE_TEMPLATE_PATH . '/images/vote.png' ?>">
            <div class="vote-title__desc"><? echo $arResult['poll']['name'] ?></div>
        </div>
        <div class="vote-radio">
            <? foreach ($arResult['poll']['options'] as $optionId => $optionName): ?>
                <input
                        class="vote-radio__input"
                        type="radio"
                        name="option"
                        id="<? echo 'option-' . $optionId ?>"
                        value="<? echo $optionId ?>"
                />
                <label class="vote-radio__label" for="<? echo 'option-' . $optionId ?>"><? echo $optionName ?></label>
            <? endforeach; ?>
        </div>
        <div class="vote-contrs">
            <div class="vote-contrs-left">
                <button class="vote__button" name="set-answer" value="Y">Голосовать</button>
            </div>
            <div class="vote-contrs-right">
                <a class="link custom" href="<? echo $arResult['listLink'] ?>">Список опросов</a>
            </div>
        </div>
    </form>
<? elseif ($arResult['answers']): ?>
    <div class="vote">
        <div class="vote-title">
            <img class="vote-title__img" src="<? echo SITE_TEMPLATE_PATH . '/images/vote.png' ?>">
            <div class="vote-title__desc"><? echo $arResult['answers']['name'] ?></div>
        </div>
        <div class="vote-complete">
            <? foreach ($arResult['answers']['items'] as $item): ?>
                <div class="vote-complete__item">
                    <div class="vote-complete__item-label"><? echo $item['value'] ?></div>
                    <div class="vote-complete__item-line" style="<? echo "width: {$item['percent']}%;" ?>">
                        <? echo $item['count'] ?>
                    </div>
                </div>
            <? endforeach; ?>
        </div>
        <div class="vote-contrs">
            <div class="vote-contrs-right">
                <a class="link custom" href="<? echo $arResult['listLink'] ?>">Список опросов</a>
            </div>
        </div>
    </div>
<? endif; ?>

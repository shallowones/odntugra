<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
?>



<form class="filter" action="<? echo $arResult['FORM_ACTION'] ?>" name="<? echo $arResult['FILTER_NAME'] . "_form" ?>"
      method="post">

            <? foreach ($arResult['INPUTS'] as $select): ?>
                <div class="main-news-item__title">
                   <? echo $select['LABEL'] ?>
                </div>
                <div class="cc">
                    <select name="<? echo $select['NAME'] ?>" title="<? echo $select['NAME'] ?>" class="slow__input">
                        <? foreach ($select['LIST'] as $value => $name): ?>
                            <option value="<? echo $value ?>" <? echo ($value == $select['VALUE']) ? 'selected' : '' ?>>
                                <? echo $name ?>
                            </option>
                        <? endforeach; ?>
                    </select>
                </div>
            <? endforeach; ?>

    <div>
        <button class="form__submit" name="del_filter" value="Y">Сбросить</button>
        <button class="form__submit" name="set_filter" value="Y">Показать</button>
    </div>
</form>

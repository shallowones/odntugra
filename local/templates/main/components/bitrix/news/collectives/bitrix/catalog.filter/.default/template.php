<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
?>

<form class="filter" action="<? echo $arResult['FORM_ACTION'] ?>" name="<? echo $arResult['FILTER_NAME'] . "_form" ?>"
      method="post">
    <div class="filter-left space-b">
        <? foreach ($arResult['INPUTS'] as $select): ?>
            <div class="filter-select-block">
                <div class="filter-dsc"><? echo $select['LABEL'] ?></div>
                <select name="<? echo $select['NAME'] ?>" title="<? echo $select['NAME'] ?>" class="filter-select">
                    <? foreach ($select['LIST'] as $value => $name): ?>
                        <option value="<? echo $value ?>" <? echo ($value == $select['VALUE']) ? 'selected' : '' ?>>
                            <? echo $name ?>
                        </option>
                    <? endforeach; ?>
                </select>
            </div>
        <? endforeach; ?>
    </div>
    <div class="filter-right">
        <button class="filter__button clear" name="del_filter" value="Y">Сбросить</button>
        <button class="filter__button" name="set_filter" value="Y">Показать</button>
    </div>
</form>

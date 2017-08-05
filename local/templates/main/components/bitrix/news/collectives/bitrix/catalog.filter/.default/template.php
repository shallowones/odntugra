<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<form class="filter" action="<? echo $arResult['FORM_ACTION'] ?>" name="<? echo $arResult['FILTER_NAME'] . "_form" ?>" method="post">
    <div class="filter-left">
        <? foreach ($arResult['ITEMS'] as $item): ?>
            <div>
                <label class="filter-block__label" for="<? echo $item['NAME'] ?>"><? echo $item['NAME'] ?></label>
                <? echo $item['INPUT'] . '<br><br>' ?>
            </div>
        <? endforeach; ?>
    </div>
    <div class="filter-right">
        <button class="filter__button clear" name="del_filter" value="Y">Сбросить</button>
        <button class="filter__button" name="set_filter" value="Y">Показать</button>
    </div>
</form>

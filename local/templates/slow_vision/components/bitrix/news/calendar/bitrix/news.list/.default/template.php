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

<? if ($arResult['MONTHS']): ?>
    <div class="calendar">
        <? foreach ($arResult['MONTHS'] as $month): ?>
            <div class="calendar-month">
                <span><? echo $month['NAME'] ?></span>
            </div>
            <? foreach ($month['ITEMS'] as $item):
                $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_EDIT'));
                $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_DELETE'), ['CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
                ?>
                <? if ($item['LINK']): ?>
                    <a class="calendar-item" href="<? echo $item['LINK'] ?>" target="_blank" id="<? echo $this->GetEditAreaId($item['ID']); ?>">
                        <div class="calendar-item__date">
                            <? echo $item['DAY'] ?>
                            <span><? echo $item['MONTH'] ?></span>
                        </div>
                        <div class="calendar-item__desc">
                            <div class="calendar-item__desc-title"><? echo $item['NAME'] ?></div>
                            <div class="calendar-item__desc-text"><? echo $item['TEXT'] ?></div>
                        </div>
                    </a>
                <? else: ?>
                    <div class="calendar-item" id="<? echo $this->GetEditAreaId($item['ID']); ?>">
                        <div class="calendar-item__date">
                            <? echo $item['DAY'] ?>
                            <span><? echo $item['MONTH'] ?></span>
                        </div>
                        <div class="calendar-item__desc">
                            <div class="calendar-item__desc-title"><? echo $item['NAME'] ?></div>
                            <div class="calendar-item__desc-text"><? echo $item['TEXT'] ?></div>
                        </div>
                    </div>
                <? endif; ?>
            <? endforeach; ?>
        <? endforeach; ?>
    </div>

    <? if ($arParams['DISPLAY_BOTTOM_PAGER']): ?>
        <? echo $arResult['NAV_STRING'] ?>
    <? endif; ?>
<? endif; ?>
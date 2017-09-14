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

<? if ($arResult['ITEMS']): ?>
    <div class="list">
        <? foreach ($arResult['ITEMS'] as $item):
            $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_EDIT'));
            $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_DELETE'), ['CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
            ?>
            <div class="list-item" id="<? echo $this->GetEditAreaId($item['ID']); ?>">
                <a href="<? echo $item['DETAIL_PAGE_URL'] ?>" class="list-item__img">
                    <img src="<? echo $item['PREVIEW_PICTURE']['CROP_SRC'] ?>">
                </a>
                <div class="list-item-text">
                    <a href="<? echo $item['DETAIL_PAGE_URL'] ?>" class="list-item-text__title"><? echo $item['NAME'] ?></a>
                    <div class="list-item-text__desc"><? echo $item['PREVIEW_CROP_TEXT'] ?></div>
                    <div class="list-item-text__date"><? echo $item['DATE'] ?></div>
                    <? if ($link = $item['PROPERTIES']['LINK']['VALUE']): ?>
                        <a href="<? echo $link ?>" class="list-item-text__title ist" target="_blank"><? echo $link ?></a>
                    <? endif; ?>
                </div>
            </div>
        <? endforeach; ?>
    </div>

    <? if ($arParams['DISPLAY_BOTTOM_PAGER']): ?>
        <? echo $arResult['NAV_STRING'] ?>
    <? endif; ?>
<? endif; ?>
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
    <? foreach ($arResult['ITEMS'] as $item):
        $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_EDIT'));
        $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_DELETE'), ['CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
        ?>

        <div class="main-news-item" id="<?=$this->GetEditAreaId($item['ID']);?>">
            <div class="main-news-item__date"><?echo $item['DATE']?></div>
            <a href="<?echo $item["DETAIL_PAGE_URL"]?>" class="link_clear">
                <div class="main-news-item__title h4"><?echo $item['NAME']?></div>
                <div class="main-news-item__title"><?echo $item['PREVIEW_CROP_TEXT']?></div>
            </a>
        </div>

    <? endforeach; ?>

    <? if ($arParams['DISPLAY_BOTTOM_PAGER']): ?>
        <? echo $arResult['NAV_STRING'] ?>
    <? endif; ?>
<? endif; ?>

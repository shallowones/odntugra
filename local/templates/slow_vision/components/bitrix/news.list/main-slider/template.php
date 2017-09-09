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
    <br>
    <? foreach ($arResult['ITEMS'] as $item):
        $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_EDIT'));
        $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_DELETE'), ['CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
        ?>
        <div id="<? echo $this->GetEditAreaId($item['ID']);?>">
            <h2  class="header-slider"><a href="<? echo $item['PROPERTIES']['LINK']['VALUE'] ?>"><?echo $item['NAME_CROP']?></a></h2>
            <p><? echo $item['PREVIEW_CROP_TEXT'] ?></p>
            <br>
        </div>
    <? endforeach; ?>
<? endif; ?>
<div class="bottom-line"></div>

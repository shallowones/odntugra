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
    <div class="videos">
        <? foreach ($arResult['ITEMS'] as $item):
            $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_EDIT'));
            $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_DELETE'), ['CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
            ?>
            <a class="videos__item" href="<? echo $item['PROPERTIES']['LINK']['VALUE'] ?>" id="<? echo $this->GetEditAreaId($item['ID']); ?>" data-fancybox>
                <div class="photos__item-img" style="background-image: url('<? echo $item['DISPLAY_PROPERTIES']['PICTURE']['FILE_VALUE']['SRC'] ?>')"></div>
                <div class="photos__item-wrap"></div>
                <div class="photos__item-desc">
                    <div class="photos__item-desc__date"><? echo $item['DATE'] ?></div>
                    <div class="photos__item-desc__title"><? echo $item['NAME'] ?></div>
                </div>
            </a>
        <? endforeach; ?>
    </div>
<? endif; ?>


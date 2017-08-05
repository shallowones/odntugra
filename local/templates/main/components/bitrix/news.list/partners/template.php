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
    <div class="swiper-container part-slider js-part-slider">
        <div class="swiper-wrapper">
            <? foreach ($arResult['ITEMS'] as $item):
                $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_EDIT'));
                $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_DELETE'), ['CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
                ?>
                <a
                        class="swiper-slide part-slide"
                        href="<? echo $item['PROPERTIES']['LINK']['VALUE'] ?>"
                        id="<? echo $this->GetEditAreaId($item['ID']); ?>"
                        target="_blank"
                >
                    <img class="part-slide__img" src="<? echo $item['PREVIEW_PICTURE']['CROP_SRC'] ?>">
                </a>
            <? endforeach; ?>
        </div>
        <div class="swiper-button-prev inner-left"></div>
        <div class="swiper-button-next inner-right"></div>
    </div>
<? endif; ?>
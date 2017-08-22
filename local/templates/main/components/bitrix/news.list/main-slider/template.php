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
    <div class="swiper-container top-slider js-top-slider">
        <div class="swiper-wrapper">
            <? foreach ($arResult['ITEMS'] as $item):
                $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_EDIT'));
                $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_DELETE'), ['CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
                ?>
                <a class="swiper-slide top-slide" id="<? echo $this->GetEditAreaId($item['ID']); ?>"
                    <? echo ($link = $item['PROPERTIES']['LINK']['VALUE']) ? "href={$link}" : '' ?>>
                    <div class="top-slide__img"
                         style="background-image: url('<? echo $item['PREVIEW_PICTURE']['CROP_SRC'] ?>');"></div>
                    <div class="top-slide__wrap"></div>
                    <div class="top-slide__desc">
                        <div class="info">
                            <h2><? echo $item['NAME_CROP'] ?></h2>
                            <p><? echo $item['PREVIEW_CROP_TEXT'] ?></p>
                        </div>
                    </div>
                </a>
            <? endforeach; ?>
        </div>
        <div class="swiper-button-prev top-left"></div>
        <div class="swiper-button-next top-right"></div>
    </div>
<? endif; ?>
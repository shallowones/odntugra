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
    <div class="swiper-container inner-slider js-inner-slider">
        <div class="swiper-wrapper">
            <? foreach ($arResult['ITEMS'] as $item):
                $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_EDIT'));
                $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_DELETE'), ['CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
                ?>
                <a class="swiper-slide inner-slide" href="<? echo $item['DETAIL_PAGE_URL'] ?>" id="<? echo $this->GetEditAreaId($item['ID']); ?>">
                    <div class="inner-slide__img" style="background-image: url('<? echo $item['PREVIEW_PICTURE']['CROP_SRC'] ?>');"></div>
                    <div class="inner-slide__wrap"></div>
                    <div class="inner-slide__desc">
                        <div class="info">
                            <div class="info-date"><? echo $item['DATE'] ?></div>
                            <p><? echo $item['NAME_CROP'] ?></p>
                        </div>
                    </div>
                    <div class="more">ПОДРОБНЕЕ</div>
                </a>
            <? endforeach; ?>
        </div>
        <div class="swiper-button-prev inner-left"></div>
        <div class="swiper-button-next inner-right"></div>
    </div>
<? endif; ?>

<hr class="hr">

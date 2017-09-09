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

<?// if ($arResult['ITEMS']): ?>
<!--    <div class="swiper-container bottom-slider js-bottom-slider">-->
<!--        <div class="swiper-wrapper bottom-wrapper">-->
<!--            --><?// foreach ($arResult['ITEMS'] as $item):
//                $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_EDIT'));
//                $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_DELETE'), ['CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
//                ?>
<!--                <a class="swiper-slide bottom-slide" href="--><?// echo $item['DETAIL_PAGE_URL'] ?><!--" id="--><?// echo $this->GetEditAreaId($item['ID']); ?><!--">-->
<!--                    <img class="bottom-slide__img" src="--><?// echo $item['PREVIEW_PICTURE']['CROP_SRC'] ?><!--">-->
<!--                    <div class="inner-slide__wrap"></div>-->
<!--                    <div class="bottom-slide__desc">--><?// echo $item['NAME_CROP'] ?><!--</div>-->
<!--                    <div class="more">ПОДРОБНЕЕ</div>-->
<!--                </a>-->
<!--            --><?// endforeach; ?>
<!--        </div>-->
<!--        <div class="swiper-button-prev inner-left"></div>-->
<!--        <div class="swiper-button-next inner-right"></div>-->
<!--    </div>-->
<?// endif; ?>

<? if ($arResult['ITEMS']): ?>
    <div class="main-news">
        <?foreach ($arResult['ITEMS'] as $item):
            $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_EDIT'));
            $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_DELETE'), ['CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
            ?>
            <div class="main-news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="main-news-item__title h4"><a href="<? echo $item['DETAIL_PAGE_URL'] ?>" class="link_clear">
                        <?echo $item['NAME_CROP']?></a></div>
            </div>
        <?endforeach; ?>
    </div>
<? endif; ?>
<br>
<div class="bottom-line"></div>

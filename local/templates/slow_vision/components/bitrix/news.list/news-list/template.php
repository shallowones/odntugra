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
<!--    <div class="list">-->
<!--        --><?// foreach ($arResult['ITEMS'] as $item):
//            $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_EDIT'));
//            $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_DELETE'), ['CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
//            ?>
<!--            <a class="list-item" href="--><?// echo $item['DETAIL_PAGE_URL'] ?><!--" id="--><?// echo $this->GetEditAreaId($item['ID']); ?><!--">-->
<!--                <div class="list-item__img">-->
<!--                    <img src="--><?// echo $item['PREVIEW_PICTURE']['CROP_SRC'] ?><!--">-->
<!--                </div>-->
<!--                <div class="list-item-text">-->
<!--                    <div class="list-item-text__title">--><?// echo $item['NAME'] ?><!--</div>-->
<!--                    <div class="list-item-text__desc">--><?// echo $item['PREVIEW_CROP_TEXT'] ?><!--</div>-->
<!--                    <div class="list-item-text__date">--><?// echo $item['DATE'] ?><!--</div>-->
<!--                </div>-->
<!--            </a>-->
<!--        --><?// endforeach; ?>
<!--    </div>-->
<?// endif; ?>


<? if ($arResult['ITEMS']): ?>
    <h1 class="h1">Новости</h1>
    <div class="main-news">
        <?foreach ($arResult['ITEMS'] as $item):
            $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_EDIT'));
            $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_DELETE'), ['CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
            ?>
            <div class="main-news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="main-news-item__date"><?echo $item['DATE']?></div>
                <div class="main-news-item__title h4"><a href="<?echo $item["DETAIL_PAGE_URL"]?>" class="link_clear">
                        <?echo $item['NAME']?></a></div>
            </div>
        <?endforeach; ?>
    </div>
<? endif; ?>

<hr class="hr">
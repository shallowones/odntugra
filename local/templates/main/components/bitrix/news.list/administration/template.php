<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<div class="admistration">
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="admistration-items">
            <p class="admistration-img"><? if ($arItem["PREVIEW_PICTURE"]["SRC"]): ?>
                    <img style="max-width: 16.875rem;" src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>">
                <? else: ?>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/no-photo.png"><? endif; ?></p>
            <p class="admistration-position"><?= $arItem["NAME"] ?></p>


            <p class="admistration-name">
                <? if ($arItem["PROPERTIES"]["NAME"]["VALUE"]): ?>
                    <?= $arItem["PROPERTIES"]["NAME"]["VALUE"] ?>
                <? else: ?>
                    <a class="link-email" href="http://odntugra.probitrix.com/about/vakansii.php">Вакансия</a>
                <? endif; ?>
            </p>


            <p class="admistration-contact">тел.: <?= $arItem["PROPERTIES"]["PHONE"]["VALUE"] ?>
                <? if ($arItem["PROPERTIES"]["EMAIL"]["VALUE"]): ?>
                ;<br>E-mail: <a class="link-email"
                                href="mailto:<?= $arItem["PROPERTIES"]["EMAIL"]["VALUE"] ?>"><?= $arItem["PROPERTIES"]["EMAIL"]["VALUE"] ?></a>
            </p>
            <? else: ?>

            <? endif; ?>
        </div>


    <? endforeach; ?>

</div>

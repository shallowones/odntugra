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

<div class="detail-contacts"><b>Телефон для связи</b>
    <p class="desc margin"></p>
</div>
<p class="desc">В функционал отдела входит:</p>
<ol class="roll">
<?= $arResult["DESCRIPTION"]?>
</ol>
<table class="phonebook-adm table desc">
    <tr>
        <th class="left" style="width:50%;">Должность</th>
        <th class="left">ФИО</th>
    </tr>
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <tr>
            <td class="phonebook-adm__position"><?= $arItem["NAME"]?></td>
            <td><? if ($arItem["PROPERTIES"]["NAME"]["VALUE"]): ?>
                    <?= $arItem["PROPERTIES"]["NAME"]["VALUE"] ?>
                <? else: ?>
                    <a class="link-email" href="http://odntugra.probitrix.com/about/vakansii.php">Вакансия</a>
                <? endif; ?></td>
        </tr>
    <?endforeach;?>
</table>

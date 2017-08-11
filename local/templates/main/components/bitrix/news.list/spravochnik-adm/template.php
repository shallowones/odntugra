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
    <div class="adm">
        <? foreach ($arResult['ITEMS'] as $item):
            $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_EDIT'));
            $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_DELETE'), ['CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
            ?>
            <div class="adm-item without-photo">
                <div class="adm-item__post adm-column"><? echo $item['NAME'] ?></div>
                <div class="adm-item__name adm-column"><? echo $item['PROPERTIES']['FIO']['VALUE'] ?></div>
                <ul class="adm-item__contacts">
                    <? if ($phone = $item['PROPERTIES']['PHONE']['VALUE']): ?>
                        <li>тел.: <b><? echo $phone ?></b></li>
                    <? endif; ?>
                    <? if ($email = $item['PROPERTIES']['EMAIL']['VALUE']): ?>
                        <li>E-mail: <b><a href="<? echo 'mailto:' . $email ?>"><? echo $email ?></a></b></li>
                    <? endif; ?>
                </ul>
            </div>
        <? endforeach; ?>
    </div>
<? endif; ?>

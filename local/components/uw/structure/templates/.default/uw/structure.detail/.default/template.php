<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var CBitrixComponentTemplate $this */
/** @var array $arParams */
/** @var array $arResult */
/** @var string $componentPath */
/** @var string $componentName */
/** @var string $componentTemplate */
/** @global CDatabase $DB */
/** @global CUser $USER */
/** @global CMain $APPLICATION */
?>
    <div class="structure_contact">
        <? if ($arResult['section']['phones']): ?>
            <div class="detail-contacts main-padding-right">
                <b>Телефон для связи</b>
                <p class="desc margin"><? echo $arResult['section']['phones'] ?></p>
            </div>
        <? endif; ?>

        <? if ($arResult['section']['email']): ?>
            <div class="detail-contacts">
                <b>E-mail</b>
                <p class="desc margin"><? echo $arResult['section']['email'] ?></p>
            </div>
        <? endif; ?>
    </div>
<? if ($arResult['section']['description']): ?>
    <div class="detail-desc">
        <? echo $arResult['section']['description'] ?>
    </div>
<? endif; ?>

<? if ($arResult['items']): ?>
    <table class="phonebook-adm table desc">
        <tbody>
        <tr>
            <th class="left" style="width:50%;">Должность</th>
            <th class="left">ФИО</th>
        </tr>
        <? foreach ($arResult['items'] as $item): ?>
            <tr>
                <td class="phonebook-adm__position"><? echo $item['post'] ?></td>
                <? if ($item['name']): ?>
                    <td><? echo $item['name'] ?></td>
                <? else: ?>
                    <td>
                        <a href="<? echo $arResult['vacancy'] ?>">Вакансия</a>
                    </td>
                <? endif; ?>
            </tr>
        <? endforeach; ?>
        </tbody>
    </table>
<? endif; ?>
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

<? if ($arResult['section']['phones']): ?>
        <b>Телефон для связи</b>
        <p><? echo $arResult['section']['phones'] ?></p>
<? endif; ?>
<hr>
<? if ($arResult['section']['description']): ?>
        <? echo $arResult['section']['description'] ?>
<? endif; ?>

<? if ($arResult['items']): ?>
    <div class="folding__body">
        <table>
            <tbody>
            <tr>
                <th class="left" style="width:50%;">Должность</th>
                <th class="left">ФИО</th>
            </tr>
            <? foreach ($arResult['items'] as $item): ?>
                <tr>
                    <td ><? echo $item['post'] ?></td>
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
    </div>
<? endif; ?>


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


<? foreach ($arResult['section'] as $mo): ?>
    <div class="folding__body_str">
        <div class="main-news-item">
        <span class="main-news-item__title h4"> <? echo $mo['name'] ?></span>
        <table>
            <tbody>
            <? foreach ($mo['items'] as $item): ?>
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
            <ul>
        <? if ($mo['phones']):
            foreach ($mo['phones'] as $phone):?>
                <li>тел: <? echo $phone ?></li>
            <? endforeach;
        endif; ?>

        <? if ($mo['email']): ?>
            <li>e-mail: <? echo $mo['email'] ?></li>
        <? endif; ?>
            </ul>
        </div>
        <? endforeach; ?>

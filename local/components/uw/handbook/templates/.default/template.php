<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
?>
    <div class="hide-block">
        <? foreach ($arResult['section'] as $mo): ?>
            <div class="hide">
                <div class="hide-title js-hide"><? echo $mo['name'] ?></div>
                <div class="hide-body">
                    <table class="phonebook-adm table desc">
                        <? foreach ($mo['items'] as $item): ?>
                            <tr>
                                <td class="phonebook-adm__position"><? echo $item['post'] ?></td>
                                <? if ($item['name']): ?>
                                    <td><? echo $item['name'] ?></td>
                                <? else: ?>
                                    <td>
                                        <a href="<?echo $arResult['vacancy']?>">Вакансия</a>
                                    </td>
                                <? endif; ?>
                            </tr>
                        <? endforeach; ?>
                    </table>
                    <div class="hide-body__contacts">
                        <? if ($mo['phones']):
                            foreach ($mo['phones'] as $phone):?>
                                    <p>тел: <? echo $phone ?></p>
                        <? endforeach;
                        endif; ?>

                        <? if ($mo['email']):
                            foreach ($mo['email'] as $email):?>
                            <p>e-mail: <? echo $email ?></p>
                            <? endforeach;?>
                        <? endif; ?>
                    </div>
                </div>
            </div>
        <? endforeach; ?>
    </div>

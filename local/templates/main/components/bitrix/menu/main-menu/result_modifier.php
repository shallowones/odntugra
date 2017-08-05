<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */

define('MAX_DEPTH_LEVEL', 4);

foreach ($arResult as $key => $item) {
    $arResult[$key]['ID'] = $key;
}

/*$lastId = 'main';
$lastSecondId = randString(2);
$result[$lastId] = [
    'id' => $lastId,
    'parentId' => '',
    'active' => true
];*/

$previousLevel = 1;
foreach ($arResult as $key => $item) {

    $result[$key] = [
        'id' => $key
    ];

    if ($previousLevel === intval($item['DEPTH_LEVEL'])) {
        if ($item['IS_PARENT']) {
            $result[$item['ID']]['items'][] = [
                'name' => $item['TEXT'],
                'action' => $lastId
            ];
        } else {
            $result[$item['ID']]['items'][] = [
                'name' => $item['TEXT'],
                'link' => $item['LINK']
            ];
        }
    }



    if ($previousLevel < intval($item['DEPTH_LEVEL'])) {

        $lastId = randString();

        $result[$item['ID']] = [
            'id' => $item['ID'],
            'parentId' => $lastId,
            'active' => true
        ];
    }






    $previousLevel = $item['DEPTH_LEVEL'];
}

gg($result);



$previousLevel = 0;
foreach ($arResult as $arItem):?>

    <? if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
        <?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
    <?endif
    ?>

    <? if ($arItem["IS_PARENT"]):?>

        <? if ($arItem["DEPTH_LEVEL"] == 1):?>
            <li><a href="<?= $arItem["LINK"] ?>"
                   class="<? if ($arItem["SELECTED"]):?>root-item-selected<? else:?>root-item<? endif ?>"><?= $arItem["TEXT"] ?></a>
            <ul>
        <? else:?>
            <li<? if ($arItem["SELECTED"]):?> class="item-selected"<? endif ?>><a href="<?= $arItem["LINK"] ?>"
                                                                                  class="parent"><?= $arItem["TEXT"] ?></a>
            <ul>
        <? endif ?>

    <? else:?>

        <? if ($arItem["PERMISSION"] > "D"):?>

            <? if ($arItem["DEPTH_LEVEL"] == 1):?>
                <li><a href="<?= $arItem["LINK"] ?>"
                       class="<? if ($arItem["SELECTED"]):?>root-item-selected<? else:?>root-item<? endif ?>"><?= $arItem["TEXT"] ?></a>
                </li>
            <? else:?>
                <li<? if ($arItem["SELECTED"]):?> class="item-selected"<? endif ?>><a
                            href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
            <? endif ?>

        <? else:?>

            <? if ($arItem["DEPTH_LEVEL"] == 1):?>
                <li><a href="" class="<? if ($arItem["SELECTED"]):?>root-item-selected<? else:?>root-item<? endif ?>"
                       title="<?= GetMessage("MENU_ITEM_ACCESS_DENIED") ?>"><?= $arItem["TEXT"] ?></a></li>
            <? else:?>
                <li><a href="" class="denied"
                       title="<?= GetMessage("MENU_ITEM_ACCESS_DENIED") ?>"><?= $arItem["TEXT"] ?></a></li>
            <? endif ?>

        <? endif ?>

    <? endif ?>

    <? $previousLevel = $arItem["DEPTH_LEVEL"]; ?>

<? endforeach ?>
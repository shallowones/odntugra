<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
/** @var array $arParams */
/** @global $APPLICATION */

define('MAIN', 'main');
$count = 0;
$result[$count] = [
    'id' => MAIN,
    'active' => true,
    'parentId' => ''
];

foreach ($arResult as $key => $item) {
    if ($item['DEPTH_LEVEL'] === 1) {
        if ($item['IS_PARENT']) {
            $result[$count]['items'][] = [
                'name' => $item['TEXT'],
                'action' => strval($key)
            ];
        } else {
            $result[$count]['items'][] = [
                'name' => $item['TEXT'],
                'link' => $item['LINK'],
                'selected' => false
            ];
        }
    }
}

$count++;

foreach ($arResult as $key => $item) {

    if ($item['IS_PARENT']) {
        $result[$count]['id'] = strval($key);

        if (empty($result[$count]['active'])) {
            $result[$count]['active'] = false;
        }

        for ($i = count($arResult); $i >= 0; $i--) {
            $keyPrev = strval($i - $key - 1);

            if (!array_key_exists($keyPrev, $arResult)) {
                $result[$count]['parentId'] = MAIN;
                break;
            }

            $prev = $arResult[$keyPrev];

            if ($item['DEPTH_LEVEL'] - 1 === $prev['DEPTH_LEVEL']) {
                $result[$count]['parentId'] = $keyPrev;
                break;
            }

        }

        $itemIndex = 0;
        for ($i = $key + 1; $i < count($arResult); $i++) {

            if (!array_key_exists($i, $arResult)) break;

            $next = $arResult[$i];

            if ($item['DEPTH_LEVEL'] + 1 === $next['DEPTH_LEVEL'] && $itemIndex === $next['ITEM_INDEX']) {
                if ($next['IS_PARENT']) {
                    $result[$count]['items'][] = [
                        'name' => $next['TEXT'],
                        'action' => strval($i)
                    ];
                } else {
                    $result[$count]['items'][] = [
                        'name' => $next['TEXT'],
                        'link' => $next['LINK'],
                        'selected' => false
                    ];
                }
                $itemIndex++;
            }
        }

        $count++;
    }
}

// добавляем активный пункт меню, т.к. компонент не видит текущий раздел из-за того, что вызывается путем ajax-запроса
foreach ($result as $keyParent => $parent) {
    foreach ($parent['items'] as $keyItem => $item) {
        if ($item['link'] === $arParams['CURRENT_DIR']) {
            $result[$keyParent]['items'][$keyItem]['selected'] = true;

            if ($keyParent !== 0) {
                $result[$keyParent]['active'] = true;
                $result[0]['active'] = false;
            }
        }
    }
}

$arResult['JSON'] = json_encode($result);
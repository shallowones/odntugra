<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
AddEventHandler('iblock', 'OnBeforeIBlockElementAdd', ['PollCountChanger', 'OnBeforeIBlockElementAddHandler']);
AddEventHandler('iblock', 'OnBeforeIBlockElementUpdate', ['PollCountChanger', 'OnBeforeIBlockElementAddHandler']);

class PollCountChanger
{
    const PROPERTY_CODE_OPTIONS = 'OPTIONS';

    const PROPERTY_CODE_ANSWERS = 'ANSWERS';

    function OnBeforeIBlockElementAddHandler(&$arFields)
    {
        if (intval($arFields['IBLOCK_ID']) !== intval(\UW\IBHelper::getIbId(\UW\IBCodes::IB_CODE_POLLS)))
            return true;

        $rsProps = \CIBlockElement::GetProperty(
            $arFields['IBLOCK_ID'],
            $arFields['ID'],
            ['sort' => 'asc'],
            ['CODE' =>
                [self::PROPERTY_CODE_OPTIONS, self::PROPERTY_CODE_ANSWERS]
            ]
        );
        $propOptionsId = '';
        $propAnswersId = '';
        while ($prop = $rsProps->Fetch()) {
            if (self::PROPERTY_CODE_OPTIONS === $prop['CODE']) {
                $propOptionsId = $prop['ID'];
            } else {
                $propAnswersId = $prop['ID'];
            }

            if ($propOptionsId && $propAnswersId) break;
        }

        $count = 0;
        foreach ($arFields['PROPERTY_VALUES'][$propOptionsId] as $item) {
            if (!empty($item['VALUE'])) {
                $count++;
            }
        }

        $arr = array_keys($arFields['PROPERTY_VALUES'][$propAnswersId]);
        for ($i = 0; $i < $count; $i++) {
            if (empty($arFields['PROPERTY_VALUES'][$propAnswersId][$arr[$i]]['VALUE'])) {
                $arFields['PROPERTY_VALUES'][$propAnswersId][$arr[$i]]['VALUE'] = '0';
            }
        }

        return true;
    }
}
<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
AddEventHandler('iblock', 'OnBeforeIBlockElementAdd', ['CodeAdder', 'OnBeforeIBlockElementAddHandler']);
AddEventHandler('iblock', 'OnBeforeIBlockElementUpdate', ['CodeAdder', 'OnBeforeIBlockElementAddHandler']);

class CodeAdder
{
    function OnBeforeIBlockElementAddHandler(&$arFields)
    {
        if (intval($arFields['IBLOCK_ID']) !== intval(\UW\IBHelper::getIbId(\UW\IBCodes::IB_CODE_NEWS))
            && !empty($arFields['CODE']))
            return true;

        $date = new \DateTime($arFields['ACTIVE_FROM']);
        $arFields['CODE'] = $arFields['ID'] . '-' . $date->format('dmy');

        return true;
    }
}
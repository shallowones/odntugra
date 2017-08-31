<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
AddEventHandler('iblock', 'OnAfterIBlockElementAdd', ['CodeAdder', 'OnAfterIBlockElementAddHandler']);

class CodeAdder
{
    function OnAfterIBlockElementAddHandler(&$arFields)
    {
        if (intval($arFields['IBLOCK_ID']) !== intval(\UW\IBHelper::getIbId(\UW\IBCodes::IB_CODE_NEWS))
            && !empty($arFields['CODE']))
            return true;

        $date = new \DateTime($arFields['ACTIVE_FROM']);
        $el = new CIBlockElement;
        $el->Update(
            $arFields['ID'],
            [
                'CODE' => $arFields['ID'] . '-' . $date->format('dmy')
            ]
        );

        return true;
    }
}
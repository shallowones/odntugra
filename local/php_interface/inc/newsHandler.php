<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
AddEventHandler('iblock', 'OnAfterIBlockElementAdd', ['CodeAdder', 'OnAfterIBlockElementAddHandler']);
AddEventHandler('iblock', 'OnAfterIBlockElementUpdate', ['CodeAdder', 'OnAfterIBlockElementAddHandler']);

class CodeAdder
{
    protected static $handlerDisallow = 0;

    public static function disableHandler()
    {
        self::$handlerDisallow--;
    }

    public static function enableHandler()
    {
        self::$handlerDisallow++;
    }

    public static function isEnabledHandler()
    {
        return (self::$handlerDisallow >= 0);
    }

    public function OnAfterIBlockElementAddHandler(&$arFields)
    {
        if (intval($arFields['IBLOCK_ID']) !== intval(\UW\IBHelper::getIbId(\UW\IBCodes::IB_CODE_NEWS))
            || !self::isEnabledHandler())
            return;

        self::disableHandler();

        $date = new \DateTime($arFields['ACTIVE_FROM']);
        $code = $arFields['ID'] . '-' . $date->format('dmy');

        if ($arFields['CODE'] === $code) {
            self::enableHandler();
            return;
        }

        $el = new CIBlockElement;
        $el->Update(
            $arFields['ID'],
            [
                'CODE' => $code
            ]
        );

        self::enableHandler();
        
        return;
    }
}
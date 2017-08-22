<?

namespace UW;

class IBHelper
{
    /**
     * Возврвращает идентификатор инфоблока по его символьному коду
     * @param $code
     * @return bool
     */
    public static function getIbId($code)
    {
        \Bitrix\Main\Loader::includeModule('iblock');

        $dbObj = \CIBlock::GetList(
            [],
            [
                'ACTIVE' => 'Y',
                'CODE' => $code
            ]
        );

        return ($result = $dbObj->Fetch())
            ? $result['ID']
            : false;
    }
}
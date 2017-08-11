<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

class CUwPollsList extends CBitrixComponent
{
    const KEY_PASSED = 'passed';

    const KEY_NO_PASSED = 'noPassed';

    private function pollPassed($pollId)
    {
        $polls = unserialize(
            \UW\Tools::getCookie(
                $this->arParams['COOKIE_NAME']
            )
        );

        return in_array($pollId, $polls);
    }

    private function getData()
    {
        $result = [];

        $rs = \CIBlockElement::GetList(
            ['sort' => 'asc', 'id' => 'asc'],
            ['ACTIVE' => 'Y', 'IBLOCK_ID' => $this->arParams['IBLOCK_ID']],
            false,
            false,
            ['ID', 'NAME']
        );
        while ($poll = $rs->Fetch()) {
            $pollId = $poll['ID'];
            $key = ($this->pollPassed($pollId)) ? self::KEY_PASSED : self::KEY_NO_PASSED;

            $result[$key][$pollId] = [
                'name' => $poll['NAME'],
                'detail' => str_replace('#ELEMENT_ID#', $poll['ID'], $this->arParams['DETAIL'])
            ];
        }

        $this->arResult['items'] = $result;

        return $this;
    }

    public function executeComponent()
    {
        $this
            ->getData()
            ->IncludeComponentTemplate();
    }
}
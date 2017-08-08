<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

class CUwMonthFilter extends CBitrixComponent
{
    const MONTHS = [
        1 => 'ЯНВАРЬ',
        2 => 'ФЕВРАЛЬ',
        3 => 'МАРТ',
        4 => 'АПРЕЛЬ',
        5 => 'МАЙ',
        6 => 'ИЮНЬ',
        7 => 'ИЮЛЬ',
        8 => 'АВГУСТ',
        9 => 'СЕНТЯБРЬ',
        10 => 'ОКТЯБРЬ',
        11 => 'НОЯБРЬ',
        12 => 'ДЕКАБРЬ'
    ];

    private function setFilter($monthId)
    {
        $rs = \CIBlockElement::GetList(
            ['id' => 'asc'],
            ['ACTIVE' => 'Y', 'IBLOCK_ID' => $this->arParams['iblockId'], 'SECTION_CODE' => $this->arParams['sectionCode']],
            false,
            false,
            ['ID', 'PROPERTY_DATE']
        );
        $result = [];
        while ($item = $rs->Fetch()) {
            $date = new \DateTime($item['PROPERTY_DATE_VALUE']);
            if (intval($monthId) === intval($date->format('m'))) {
                $result[] = $item['ID'];
            }
        }

        $GLOBALS[$this->arParams['filterName']] = [
            'ID' => ($result) ? $result : false
        ];

        $this->arResult['SELECTED'] = intval($monthId);

        return $this;
    }

    private function clearFilter()
    {
        $GLOBALS[$this->arParams['filterName']] = '';

        return $this;
    }

    private function getMonths()
    {
        $this->arResult['months'] = self::MONTHS;

        return $this;
    }

    public function executeComponent()
    {
        $request = $this->request;

        if (!empty($request->get('set-month'))) {
            $this->setFilter($request->get('set-month'));
        }
        if (!empty($request->get('clear-filter'))) {
            $this->clearFilter();
        }
        
        $this
            ->getMonths()
            ->IncludeComponentTemplate();
    }
}
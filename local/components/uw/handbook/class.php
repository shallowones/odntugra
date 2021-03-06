<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

class CUwHandBook extends CBitrixComponent
{
    private function getData()
    {
        $iblockId = $this->arParams['IBLOCK_ID'];
        $rs = \CIBlockSection::GetList(
            [],
            ['ACTIVE' => 'Y', 'IBLOCK_ID' => $iblockId],
            false,
            ['ID', 'CODE', 'NAME', 'UF_PHONES', 'UF_EMAIL']
        );
        $sec = [];

        while ($section = $rs->Fetch()) {
            $it = \CIBlockElement::GetList(
                ['sort' => 'asc', 'id' => 'asc'],
                ['ACTIVE' => 'Y', 'IBLOCK_ID' => $iblockId, 'SECTION_ID' => $section['ID']],
                false,
                false,
                ['ID', 'NAME', 'PROPERTY_FIO']
            );
            $items = [];
            while ($employee = $it->Fetch()) {
                $items['items'][$employee['ID']] = [
                    'post' => $employee['NAME'],
                    'name' => $employee['PROPERTY_FIO_VALUE']
                ];
            }

            $sec[]= [
                'name' => $section['NAME'],
                'phones' => $section['UF_PHONES'],
                'email' => $section['UF_EMAIL'],
                'items' => $items['items']
            ];
        }
        $this->arResult['section'] = $sec;
        $this->arResult['vacancy'] = $this->arParams['VACANCY_LINK'];

        return $this;
    }

    public function executeComponent()
    {
        $this
            ->getData()
            ->IncludeComponentTemplate();
    }
}
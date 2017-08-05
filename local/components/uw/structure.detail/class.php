<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

class CUwStructureDetail extends CBitrixComponent
{

    private function getData()
    {
        $iblockId = $this->arParams['IBLOCK_ID'];
        $sectionCode = $this->arParams['SECTION_CODE'];

        $rs = \CIBlockSection::GetList(
            [],
            ['ACTIVE' => 'Y', 'IBLOCK_ID' => $iblockId, 'CODE' => $sectionCode],
            false,
            ['ID', 'NAME', 'DESCRIPTION', 'UF_PHONES']
        );
        while ($section = $rs->Fetch()) {
            $this->arResult['section'] = [
                'name' => $section['NAME'],
                'description' => $section['DESCRIPTION'],
                'phones' => implode('<br>', $section['UF_PHONES'])
            ];
        }

        $rs = \CIBlockElement::GetList(
            ['sort' => 'asc', 'id' => 'asc'],
            ['ACTIVE' => 'Y', 'IBLOCK_ID' => $iblockId, 'SECTION_CODE' => $sectionCode],
            false,
            false,
            ['ID', 'NAME', 'PROPERTY_FIO']
        );
        while ($employee = $rs->Fetch()) {
            $this->arResult['items'][$employee['ID']] = [
                'post' => $employee['NAME'],
                'name' => $employee['PROPERTY_FIO_VALUE']
            ];
        }

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
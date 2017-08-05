<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

class CUwStructureList extends CBitrixComponent
{
    private function getData()
    {
        $iblockId = $this->arParams['IBLOCK_ID'];

        $rs = \CIBlock::GetByID($iblockId);
        $detail = '';
        if ($iblock = $rs->Fetch()) {
            $detail = str_replace('#SITE_DIR#', '', $iblock['DETAIL_PAGE_URL']);
        }

        $rs = \CIBlockSection::GetList(
            ['sort' => 'asc', 'id' => 'asc'],
            ['ACTIVE' => 'Y', 'IBLOCK_ID' => $iblockId],
            false,
            ['ID', 'NAME', 'CODE']
        );
        while ($section = $rs->Fetch()) {
            $this->arResult['items'][$section['ID']] = [
                'name' => $section['NAME'],
                'detail' => str_replace('#SECTION_CODE#', $section['CODE'], $detail),
            ];
        }

        return $this;
    }

    public function executeComponent()
    {
        $this
            ->getData()
            ->IncludeComponentTemplate();
    }
}
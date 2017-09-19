<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

class CUwInstList extends CBitrixComponent
{
    private function getData()
    {

        $result = [];

        $iblockId = $this->arParams['IBLOCK_ID'];

        $rs = \CIBlock::GetByID($iblockId);
        $detail = '';
        if ($iblock = $rs->Fetch()) {
            $detail = str_replace('#SITE_DIR#', '', $iblock['DETAIL_PAGE_URL']);
        }


        $rsSections = \CIBlockSection::GetList(
            ['sort' => 'asc', 'created' => 'asc'],
            ['ACTIVE' => 'Y', 'IBLOCK_ID' => $iblockId],
            false,
            ['ID', 'NAME']
        );

        $rsSections->NavStart($this->arParams['ELEM_COUNT']);
        while ($section = $rsSections->Fetch()) {
            $result[$section['ID']] = [
                'name' => $section['NAME']
            ];
        }

        $rsElements = \CIBlockElement::GetList(
            [],
            ['ACTIVE' => 'Y', 'IBLOCK_ID' => $iblockId],
            false,
            false,
            ['ID', 'CODE', 'NAME', 'IBLOCK_SECTION_ID', 'PROPERTY_LINK', 'PROPERTY_EMAIL']
        );

        while ($element = $rsElements->Fetch()) {
            $sectionId = $element['IBLOCK_SECTION_ID'];
            if ($result[$sectionId]) {
                $result[$sectionId]['items'][] = [
                    'id' => $element['ID'],
                    'detail' => str_replace('#ELEMENT_CODE#', $element['CODE'], $detail),
                    'name' => $element['NAME']
                ];
            }
        }

        $this->arResult['agency'] = $result;
        $this->arResult['navString'] =
            $rsSections->GetPageNavStringEx(
                $navComponentObject,
                '',
                'custom',
                'N');;

        return $this;
    }

    public function executeComponent()
    {
        $this
            ->getData()
            ->IncludeComponentTemplate();
    }
}
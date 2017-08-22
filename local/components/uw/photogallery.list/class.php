<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

class CUwPhotogalleryList extends CBitrixComponent
{
    private function getData()
    {
        $rs = \CIBlockSection::GetList(
            ['created' => 'desc', 'id' => 'desc'],
            ['ACTIVE' => 'Y', 'IBLOCK_ID' => $this->arParams['IBLOCK_ID']],
            false,
            ['ID', 'NAME', 'DETAIL_PICTURE', 'DATE_CREATE']
        );
        while ($section = $rs->Fetch()) {
            $this->arResult['items'][$section['ID']] = [
                'name' => $section['NAME'],
                'picture' => [
                    'id' => $section['DETAIL_PICTURE'],
                    'path' => \CFile::GetPath($section['DETAIL_PICTURE'])
                ],
                'date' => strtolower(FormatDate('d F Y', MakeTimeStamp($section['DATE_CREATE']))),
                'detail' => str_replace('#SECTION_ID#', $section['ID'], $this->arParams['DETAIL']),
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
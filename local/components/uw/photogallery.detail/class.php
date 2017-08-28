<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

class CUwPhotogalleryDetail extends CBitrixComponent
{
    private function getData()
    {
        $iblockId = $this->arParams['IBLOCK_ID'];
        $sectionId = $this->arParams['SECTION_ID'];

        $rs = \CIBlockSection::GetList(
            [],
            ['ACTIVE' => 'Y', 'IBLOCK_ID' => $iblockId, 'ID' => $sectionId],
            false,
            ['NAME']
        );
        if ($section = $rs->Fetch()) {
            global $APPLICATION;
            $APPLICATION->SetTitle($section['NAME']);
            $APPLICATION->AddChainItem($section['NAME']);
        }

        $rs = \CIBlockElement::GetList(
            ['sort' => 'asc', 'id' => 'asc'],
            ['ACTIVE' => 'Y', 'IBLOCK_ID' => $iblockId, 'SECTION_ID' => $sectionId],
            false,
            false,
            ['ID', 'NAME', 'PROPERTY_REAL_PICTURE']
        );
        while ($photo = $rs->Fetch()) {
            $this->arResult['items'][$photo['ID']] = [
                'name' => $photo['NAME'],
                'picture' => [
                    'id' => $photo['PROPERTY_REAL_PICTURE_VALUE'],
                    'path' => \CFile::GetPath($photo['PROPERTY_REAL_PICTURE_VALUE'])
                ]
            ];
        }

        $this->arResult['backLink'] = $this->arParams['BACK_LINK'];

        return $this;
    }

    public function executeComponent()
    {
        $this
            ->getData()
            ->IncludeComponentTemplate();
    }
}
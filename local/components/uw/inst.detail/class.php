<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

class CUwInstDetail extends CBitrixComponent
{
    private function getData()
    {
        $iblockId = $this->arParams['IBLOCK_ID'];
        $eleCode = $this->arParams['ELEMENT_CODE'];
        $rsElements = \CIBlockElement::GetList(
            [],
            ['ACTIVE' => 'Y', 'IBLOCK_ID' => $iblockId, 'CODE' => $eleCode],
            false,
            false,
            ['ID', 'CODE', 'NAME', 'PROPERTY_LINK', 'PROPERTY_PHONE',
                'PROPERTY_EMAIL', 'DETAIL_TEXT',
                'PROPERTY_DIRECTOR', 'PROPERTY_ADDRESS', 'PREVIEW_PICTURE']
        );
        while ($element = $rsElements->Fetch()) {

            $it = \CIBlockElement::GetList(
                ['sort' => 'asc', 'id' => 'asc'],
                ['ACTIVE' => 'Y', 'IBLOCK_ID' => $iblockId, 'CODE' => $eleCode],
                false,
                false,
                ['PROPERTY_PHONE']
            );
            $phones = [];
            while ($phone = $it->Fetch()) {
                $phones[] = [
                    'tel' => $phone['PROPERTY_PHONE_VALUE']
                ];
            }

            $this->arResult['info'] = [
                'name' => $element['NAME'],
                'email' => $element['PROPERTY_EMAIL_VALUE'],
                'link' => $element['PROPERTY_LINK_VALUE'],
                'desc' => $element['DETAIL_TEXT'],
                'direk' => $element['PROPERTY_DIRECTOR_VALUE'],
                'address' => $element['PROPERTY_ADDRESS_VALUE'],
                'PREVIEW_PICTURE' => CFile::GetFileArray($element['PREVIEW_PICTURE']),
                'phone' => $phones
            ];
        }
        global $APPLICATION;
        $APPLICATION->SetTitle( $this->arResult['info']['name']);
        $APPLICATION->AddChainItem( $this->arResult['info']['name'], $this->arParams['LINK']);

        return $this;
    }

    public function executeComponent()
    {
        $this
            ->getData()
            ->IncludeComponentTemplate();
    }
}
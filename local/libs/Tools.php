<?

namespace UW;

class Tools
{
    /**
     * Метод обрезает изображение до переданных ему размеров
     * @param $pictureId
     * @param $width
     * @param $height
     * @return mixed
     */
    public static function getResizeImage($pictureId, $width, $height)
    {
        $image = \CFile::ResizeImageGet(
            $pictureId,
            [
                'width' => $width,
                'height' => $height
            ],
            BX_RESIZE_IMAGE_EXACT
        );

        return $image['src'];
    }

    /**
     * Метод возвращает имя и расширение файла в виде массива
     * @param $fileName
     * @return array
     */
    public static function getFileNameAndExtension($fileName)
    {
        $dotPosition = strripos($fileName, '.');

        return [
            'NAME' => substr(
                $fileName,
                0,
                $dotPosition
            ),
            'EXTENSION' => substr(
                $fileName,
                $dotPosition + 1
            )
        ];
    }

    /**
     * Метод возвращает первый символьный код первого раздела
     * @param $ibId
     * @return string
     */
    public static function getFirstSectionCode($ibId)
    {
        $sections = \CIBlockSection::GetList(
            ['sort' => 'asc', 'id' => 'asc'],
            ['ACTIVE' => 'Y', 'IBLOCK_ID' => $ibId],
            false,
            ['CODE']
        );

        return ($section = $sections->Fetch())
            ? $section['CODE']
            : '';
    }

    /**
     * Возвращает информацию о мероприятиях по идентификаторам
     * @param $id
     * @return array|bool
     */
    public static function getEvents($id)
    {
        $rs = \CIBlockElement::GetList(
            ['id' => 'asc'],
            ['ACTIVE' => 'Y', 'ID' => $id],
            false,
            false,
            ['ID', 'NAME', 'ACTIVE_FROM', 'DETAIL_PAGE_URL']
        );
        $result = [];
        while ($event = $rs->Fetch()) {
            $url = str_replace('#SITE_DIR#', '', $event['DETAIL_PAGE_URL']);
            $result[] = [
                'NAME' => $event['NAME'],
                'DATE' => strtolower(
                    FormatDate(
                        'd F Y',
                        MakeTimeStamp($event['ACTIVE_FROM'])
                    )
                ),
                'LINK' => str_replace('#ELEMENT_ID#', $event['ID'], $url)
            ];
        }

        return $result;
    }

}
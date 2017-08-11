<?

namespace UW;

class Tools
{
    /**
     * Наименование отложенной функции для поиска
     */
    const TARGET_NAME_SEARCH = 'search';

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
     * Метод возвращает символьный код первого раздела
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

    /**
     * Метод устанавливает куку
     *
     * @param string $name имя куки
     * @param string $value значение
     * @param int $expire срок жизни
     * @param string $prefix
     */
    public static function setCookie($name, $value, $expire = '', $prefix = 'UW')
    {
        global $APPLICATION;

        if (empty($expire)) {
            $expire = false;
        }

        $APPLICATION->set_cookie($name, $value, $expire, '/', false, false, true, $prefix);
    }

    /**
     * Метод читает куку
     *
     * @param string $name имя куки
     * @param string $prefix
     * @return string
     */
    public static function getCookie($name, $prefix = 'UW')
    {
        global $APPLICATION;

        return $APPLICATION->get_cookie($name, $prefix);
    }

}
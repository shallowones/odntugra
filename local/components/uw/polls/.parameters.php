<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

\Bitrix\Main\Loader::includeModule('iblock');

$arComponentParameters = array(
    'PARAMETERS' => array(
        'VARIABLE_ALIASES' => array(
            'ELEMENT_ID' => array(
                'NAME' => 'Идентификатор отдела'
            ),
        ),
        'SEF_MODE' => array(
            'list' => array(
                'NAME' => 'Страница списка отделов',
                'DEFAULT' => '',
                'VARIABLES' => array()
            ),
            'detail' => array(
                'NAME' => 'Детальная страница отдела',
                'DEFAULT' => '#ELEMENT_ID#/',
                'VARIABLES' => array(
                    'ELEMENT_ID'
                )
            ),
        ),
        "IBLOCK_ID" => array(
            "PARENT" => "BASE",
            "NAME" => 'Идентификатор инфоблока',
            "TYPE" => "STRING",
            "DEFAULT" => ''
        ),
        'COOKIE_NAME' => array(
            'PARENT' => 'BASE',
            'NAME' => 'Наименование файла куки',
            'TYPE' => 'STRING',
            'DEFAULT' => '',
        )
    )
);
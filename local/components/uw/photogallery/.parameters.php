<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

\Bitrix\Main\Loader::includeModule('iblock');

$arComponentParameters = array(
    'PARAMETERS' => array(
        'VARIABLE_ALIASES' => array(
            'SECTION_ID' => array(
                'NAME' => 'Идентификатор фотоальбома'
            ),
        ),
        'SEF_MODE' => array(
            'list' => array(
                'NAME' => 'Страница списка фотоальбомов',
                'DEFAULT' => '',
                'VARIABLES' => array()
            ),
            'detail' => array(
                'NAME' => 'Детальная страница фотоальбома',
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
        )
    )
);
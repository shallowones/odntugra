<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = [
    'PARAMETERS' => array(
        "IBLOCK_ID" => array(
            "PARENT" => "BASE",
            "NAME" => 'Идентификатор инфоблока',
            "TYPE" => "STRING",
            "DEFAULT" => ''
        ),
        "ELEMENT_ID" => array(
            "PARENT" => "BASE",
            "NAME" => 'Идентификатор элемента',
            "TYPE" => "STRING",
            "DEFAULT" => ''
        ),
        'COOKIE_NAME' => array(
            'PARENT' => 'BASE',
            'NAME' => 'Наименование файла куки',
            'TYPE' => 'STRING',
            'DEFAULT' => '',
        ),
        'LIST' => array(
            'PARENT' => 'BASE',
            'NAME' => 'Ссылка на список опросов',
            'TYPE' => 'STRING',
            'DEFAULT' => '',
        )
    )
];
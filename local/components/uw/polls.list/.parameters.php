<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = [
    'PARAMETERS' => array(
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
        ),
        'DETAIL' => array(
            'PARENT' => 'BASE',
            'NAME' => 'Детальная страница опроса',
            'TYPE' => 'STRING',
            'DEFAULT' => '',
        )
    )
];
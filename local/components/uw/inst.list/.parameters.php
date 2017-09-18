<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = [
    'PARAMETERS' => [
        "IBLOCK_ID" => [
            "PARENT" => "BASE",
            "NAME" => 'Идентификатор инфоблока',
            "TYPE" => "STRING",
            "DEFAULT" => ''
        ],
        'ELEM_COUNT' => [
            'PARENT' => 'BASE',
            'NAME' => 'Количество элементов на странице',
            'TYPE' => 'STRING',
            'DEFAULT' => ''
        ]
    ]
];
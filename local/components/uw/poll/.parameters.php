<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = [
    'PARAMETERS' => [
        'IBLOCK_ID' => [
            'PARENT' => 'BASE',
            'NAME' => 'Идентификатор инфоблока',
            'TYPE' => 'STRING',
            'DEFAULT' => '',
        ],
        'COOKIE_NAME' => [
            'PARENT' => 'BASE',
            'NAME' => 'Наименование файла куки',
            'TYPE' => 'STRING',
            'DEFAULT' => '',
        ]
    ]
];
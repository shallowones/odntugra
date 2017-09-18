<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

\Bitrix\Main\Loader::includeModule('iblock');

$arComponentParameters = [
    'PARAMETERS' =>[
        'VARIABLE_ALIASES' => [
            'ELEMENT_CODE' => [
                'NAME' => 'Идентификатор учреждения'
            ],
        ],
        'SEF_MODE' => [
            'list' => [
                'NAME' => 'Инентификатор раздела',
                'DEFAULT' => '#SECTION_ID#/',
                'VARIABLES' => [
                    'SECTION_ID'
                ]
            ],
            'detail' => [
                'NAME' => 'Детальная страница учреждения',
                'DEFAULT' => '#ELEMENT_CODE#/',
                'VARIABLES' => [
                    'ELEMENT_CODE'
                ]
            ],
        ],
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
            'DEFAULT' => '',
        ]
    ]
];
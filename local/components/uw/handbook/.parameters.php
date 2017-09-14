<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = [
    'PARAMETERS' => [
//        'VARIABLE_ALIASES' => [
//            'ELEMENT_ID' => [
//                'NAME' => 'Идентификатор отдела'
//            ]
//        ],
        'IBLOCK_ID' => [
            'PARENT' => 'BASE',
            'NAME' => 'Идентификатор инфоблока',
            'TYPE' => 'STRING',
            'DEFAULT' => '',
        ],
        'VACANCY_LINK' => [
            'PARENT' => 'BASE',
            'NAME' => "Ссылка на раздел Вакансии",
            "TYPE" => "STRING",
            "DEFAULT" => ''
        ]

    ]
];

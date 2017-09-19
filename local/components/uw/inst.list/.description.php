<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = [
    'NAME' => 'Список учреждений КДУ',
    'DESCRIPTION' => 'Компонент, который отображет список учреждений КДУ',
    'PATH' => [
        'ID' => 'inst',
        "CHILD" => [
            "ID" => 'inst-list',
            "NAME" => 'Список учреждений КДУ',
            "SORT" => 10
        ],
    ]
];
<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = [
    'PARAMETERS' => array(
        "IBLOCK_ID" => array(
            "PARENT" => "BASE",
            "NAME" => 'Идентификатор инфоблока',
            "TYPE" => "STRING",
            "DEFAULT" => ''
        ),
        "SECTION_ID" => array(
            "PARENT" => "BASE",
            "NAME" => 'Идентификатор раздела',
            "TYPE" => "STRING",
            "DEFAULT" => ''
        ),
        "BACK_LINK" => array(
            "PARENT" => "BASE",
            "NAME" => 'Ссылка на раздел Фотоальбомы',
            "TYPE" => "STRING",
            "DEFAULT" => ''
        ),
    )
];
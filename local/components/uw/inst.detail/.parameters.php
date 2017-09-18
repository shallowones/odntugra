<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = [
    'PARAMETERS' => array(
        "IBLOCK_ID" => array(
            "PARENT" => "BASE",
            "NAME" => 'Идентификатор инфоблока',
            "TYPE" => "STRING",
            "DEFAULT" => ''
        ),
        "ELEMENT_CODE" => array(
            "PARENT" => "BASE",
            "NAME" => 'Символьный код раздела',
            "TYPE" => "STRING",
            "DEFAULT" => ''
        ),
        "LINK" => array(
            "PARENT" => "BASE",
            "NAME" => 'Ссылка на текущий раздел',
            "TYPE" => "STRING",
            "DEFAULT" => ''
        ),
    )
];
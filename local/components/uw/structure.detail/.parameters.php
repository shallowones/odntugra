<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = [
    'PARAMETERS' => array(
        "IBLOCK_ID" => array(
            "PARENT" => "BASE",
            "NAME" => 'Идентификатор инфоблока',
            "TYPE" => "STRING",
            "DEFAULT" => ''
        ),
        "SECTION_CODE" => array(
            "PARENT" => "BASE",
            "NAME" => 'Символьный код раздела',
            "TYPE" => "STRING",
            "DEFAULT" => ''
        ),
        "VACANCY_LINK" => array(
            "PARENT" => "BASE",
            "NAME" => 'Ссылка на раздел Вакансии',
            "TYPE" => "STRING",
            "DEFAULT" => ''
        ),
    )
];
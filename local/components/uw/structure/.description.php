<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => 'Структура',
	"DESCRIPTION" => 'Организационная структура',
	"COMPLEX" => 'Y',
	"PATH" => array(
		"ID" => 'structure',
		"CHILD" => array(
			"ID" => 'structure-child',
			"NAME" => 'Организационная структура',
			"SORT" => 10,
			"CHILD" => array(
				"ID" => 'structure-cmpx',
			),
		),
	),
);
<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => 'Опросы',
	"DESCRIPTION" => 'Кмпонентов вывода опросов',
	"COMPLEX" => 'Y',
	"PATH" => array(
		"ID" => 'polls',
		"CHILD" => array(
			"ID" => 'polls-child',
			"NAME" => 'Опросы',
			"SORT" => 10,
			"CHILD" => array(
				"ID" => 'polls-cmpx',
			),
		),
	),
);
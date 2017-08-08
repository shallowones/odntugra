<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => 'Фотогалерея',
	"DESCRIPTION" => 'Фотогалерея',
	"COMPLEX" => 'Y',
	"PATH" => array(
		"ID" => 'photogallery',
		"CHILD" => array(
			"ID" => 'photogallery-child',
			"NAME" => 'Фотогалерея',
			"SORT" => 10,
			"CHILD" => array(
				"ID" => 'photogallery-cmpx',
			),
		),
	),
);
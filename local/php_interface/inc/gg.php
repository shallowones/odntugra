<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * Распечатывает массивы
 * @param $var
 */
function gg($var)
{
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}

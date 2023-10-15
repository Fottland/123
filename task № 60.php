<?php
/*Реализуйте функцию joinNumbersFromRange(), которая объединяет все числа из диапазона в строку:*/
function joinNumbersFromRange($start, $end)
{
    $i = $start;
    $result = '';

    while ($i <= $end) {
        $result = "{$result}{$i}";
        $i = $i + 1;
    }

    return $result;
}
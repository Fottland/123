<?php
/*Реализуйте функцию multiplyNumbersFromRange(), которая перемножает числа в указанном
диапазоне включая границы диапазона. Пример вызова:*/ 

function multiplyNumbersFromRange($start, $finish)
{
    $i = $start;
    $result = 1;

    while ($i <= $finish) {
        $result = $result * $i;
        $i = $i + 1;
    }

    return $result;
}
<?php
/*Функция из теории учитывает регистр букв. То есть A и a с её точки зрения разные символы.
Реализуйте вариант этой же функции, так чтобы регистр букв был не важен:*/
function countChars($str, $char)
{
    $i = 0;
    $count = 0;
    while ($i < strlen($str)) {
        if (strtoupper($str[$i]) === strtoupper($char)) {
            $count = $count + 1;
        }
        $i = $i + 1;
    }

    return $count;
}
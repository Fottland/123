<?php
/*Реализуйте функцию sumOfSeries(), которая считает сумму ряда целых чисел.
Ряд задаётся двумя числами — начальным и конечным.*/
function sumOfSeries($first_number, $second_number)
{
$result = 0;
for($i = $first_number; $i <= $second_number; $i++){
$result += $i;
}
return $result;
}
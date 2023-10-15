<?php
/*Реализуйте функцию-предикат isArgumentsForSubstrCorrect, которая принимает три аргумента:

1. строку
2. индекс, с которого начинать извлечение
3. длину извлекаемой подстроки*/
function isArgumentsForSubstrCorrect ($string, $number, $length)
{
if (($length <= 0) || ($number <= 0) || ($number > (strlen($string))) || ($length + $number > (strlen($string)))) {
return false;
} else {
return true;
}
}
<?php
/*Реализуйте функцию printReversedWordBySymbol(), которая печатает переданное слово посимвольно,
как в примере из теории, но делает это в обратном порядке.*/
function printReversedWordBySymbol($word)
{
    $i = strlen($word) - 1;
    while ($i >= 0) {
        print_r("$word[$i]\n");
        $i = $i - 1;
    }
}
<?php
/*Допишите реализацию функции startsWith(), которая определяет, начинается ли строка с подстроки.*/
function startsWith($text, $substr)
{
    return mb_strpos($text, $substr) === 0;
}
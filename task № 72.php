<?php
/*Допишите реализацию функции getYear(), которая возвращает год переданного timestamp:*/
const SECONDS_IN_YEAR = 60 * 60 * 24 * 365;

function getYear($timestamp)
{
    return 1970 + (int) floor($timestamp / SECONDS_IN_YEAR);
}
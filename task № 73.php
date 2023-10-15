<?php
/*Допишите реализацию функции getCustomDate(), которая возвращает дату в формате 15/03/1985
 на основе переданного timestamp.*/
const SECONDS_IN_YEAR = 60 * 60 * 24 * 365;

function getCustomDate($timestamp)
{
      return date('d/m/Y', $timestamp);
}
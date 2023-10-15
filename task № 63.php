<?php
/*Реализуйте функцию mysubstr(),
 которая извлекает из строки подстроку указанной длины. Она принимает 
 на вход два аргумента (строку и длину) и возвращает подстроку начиная с первого символа:*/
 function mysubstr($str, $length)
 {
     $index = 0;
     $result = '';
     while ($index < $length) {
         $currentChar = $str[$index];
         $result = "{$result}{$currentChar}";
         $index = $index + 1;
     }
 
     return $result;
 }
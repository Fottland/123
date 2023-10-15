<?php
/*Реализуйте функцию filterString(), принимающую на вход строку и символ,
 и возвращающую новую строку, в которой удален переданный символ во всех его позициях.*/
 function filterString($str, $char)
 {
     $i = 0;
     $result = '';
     while ($i < strlen($str)) {
         $currentChar = $str[$i];
 
         if ($currentChar !== $char) {
             $result = "{$result}{$currentChar}";
         }
 
         $i += 1;
     }
 
     return $result;
 }
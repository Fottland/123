<?php
/*Напишите функцию makeItFunny(), которая принимает на вход строку и возвращает её копию, 
у которой каждый n-ный элемент переведен в верхний регистр. n – задается на входе в функцию.*/
function makeItFunny($str, $num) {
    $i = $num - 1;
    
    while($i < strlen($str)) {
    $str[$i] = strtoupper($str[$i]);
    $i += $num;
    }
    return $str;
    }
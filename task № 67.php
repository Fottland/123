<?php
/*Реализуйте функцию hasChar(), которая проверяет,
содержит ли строка букву в указанном регистре. Функция принимает два параметра:

* Строка
* Буква для поиска*/
function hasChar($text, $symbol) {
    $result = false;
    $i = 0;
    while ($i < strlen($text)) {
    if ($text[$i] === $symbol) $result = true;
    $i++;
    }
    return $result;
    };
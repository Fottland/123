<?php
function getNumberExplanation($count){
    switch ($count) {
        case 666:
            return 'devil number';
        case 42:
            return 'answer for everything';
        case 7:
            return 'prime number';
        default:
            return 'just a number';
    }
}
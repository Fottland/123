<?php
function normalizeUrl($add) {
    $https = 'https://';
    if ($add === $https) {
    return $add;
    }
    else {
     "https://{$add}";
    }
 
 }
 print_r(normalizeUrl('hello'));
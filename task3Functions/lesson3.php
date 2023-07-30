<?php
//** Напишите функцию reverseString, которая принимает один параметр
// - строку, и возвращает обратную ей строку.
// */

function reverseString($string){
    $length = strlen($string);

    $reverseStr = '';

    for($i = $length - 1; $i >= 0; $i--){
        $reverseStr .= $string[$i];
    }

    return $reverseStr;
}

var_dump(reverseString('creative'));
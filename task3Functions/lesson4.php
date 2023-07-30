<?php
//** Напишите функцию getFactorial,
// которая принимает один параметр - число, и возвращает факториал этого числа.
// Факториал - это произведение всех натуральных чисел от 1 до данного числа */

function getFactorial($num){
    $result = 1;
    for ($i = 1; $i <= $num; $i++){
        $result *= $i;
    }
    return $result;
}

$num = 10;

$result = getFactorial($num);

var_dump($result);
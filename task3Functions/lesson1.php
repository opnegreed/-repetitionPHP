<?php
//** Напишите функцию calcRectangleArea, которая принимает два параметра
// - длину и ширину прямоугольника, и возвращает его площадь. */
function calcRectangleArea($a, $b){
    $result = $a * $b;
    return $result;
}

$a = 2;
$b = 3;

$result = calcRectangleArea($a, $b);

print_r($result);

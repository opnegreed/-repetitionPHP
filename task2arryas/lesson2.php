<?php
// Создайте массив из 10 случайных чисел и найдите максимальное и минимальное значения.
$array = [];

for ($i = 0; $i < 9; $i++){
    $randomNumber = rand();

    $array[$i] = $randomNumber;
}

print_r($array);

echo '<br>';

$maxNumber = max($array);

print_r('максимальное число '. $maxNumber);
<?php
//  Создайте массив из 7 строк и выведите их в алфавитном порядке.

$arr = [
    'жираф',
    'верблюд',
    'поокемон',
    'чайник',
    'арбуз',
    'пельмень',
    'енот'
];

sort($arr);

print_r($arr);
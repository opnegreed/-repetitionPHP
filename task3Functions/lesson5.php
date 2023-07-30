<?php
//* Напишите функцию checkPalindrome, которая принимает один параметр - строку,
// и возвращает true, если строка является палиндромом (читается одинаково в обоих направлениях),
// и false, если нет.


function checkPalindrome($string){
    $length = strlen($string);
    $backwards = '';
    for ($i = $length - 1; $i >= 0; $i--){
        $backwards .= $string[$i];
    }
    if($string == $backwards){
        echo 'Это слово полиндром ' . $string;
    }
    else{
        echo "Слово " . $string . " не является полиндромом";
    }
}

checkPalindrome('forest');

echo "</br>";

checkPalindrome("deed");


<?php
//** Напишите функцию isPrime,
// которая принимает один параметр - число, и возвращает true,
// если число является простым, и false, если не является. */

function isPrime($num){
    if($num < 2 == true){
        return false;
    }
    for($i = 2; $i <= $num/2; $i++){
        if($num % $i === 0){
            return false;
        }

    }
    return true;
}

var_dump(isPrime(5));
var_dump(isPrime(10));
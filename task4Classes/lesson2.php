<?php
//**
// Создайте класс "Калькулятор", у которого будут методы для выполнения простых
// математических операций, таких как сложение, вычитание, умножение и деление.
// Создайте объект этого класса и использовать его методы для выполнения
// нескольких математических операций. */ */

class calc{

    public function sum($num1, $num2){

        echo "</br> Результат сложения = " . ($num1 + $num2);
    }

    public function sub($num1, $num2){

        echo "</br> Результат вычитания = ". ($num1 - $num2);
    }

    public function multipli($num1, $num2){

        echo "</br> Результат умножения = ". ($num1 * $num2);

    }

    public function div($num1, $num2){
        echo "</br> Результат деления = " . ($num1 / $num2);
    }
}

$num1 = 1;

$num2 = 2;

$resultcalc1 = new calc();

$resultcalc1 -> sum($num1, $num2);

$resultcalc1 -> sub($num1, $num2);

$resultcalc1 -> multipli($num1, $num2);

$resultcalc1 -> div($num1, $num2);
<?php
//**  Создайте массив $words с элементами "apple", "banana", "carrot" и "carrot".
// Посчитайте количество повторений слова "carrot" и выведите результат.

$words = ['apple', 'banana', 'carrot', 'carrot'];

$result = 0;

for($i = 0; $i < count($words); $i++){
   if($words[$i] == 'carrot'){
       $result++;
    }

}

echo 'Повторений: ' . $result;
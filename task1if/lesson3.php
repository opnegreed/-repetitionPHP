<?php
//**Создайте переменную $number и присвойте ей случайное число от 1 до 10. Если $number равно 7,
// выведите сообщение "Ура! Вы выиграли!", иначе выведите сообщение "Повезет в следующий раз!".

$number = rand();

if($number == 7){
    echo 'Ты победил';
}
else{
    echo 'В другой раз повезет';
}
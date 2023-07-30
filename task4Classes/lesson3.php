<?php
//** Задание 1
//
//Создать класс для работы с базой данных людей
//
//БД содержит поля:
//id, имя(только буквы), фамилия(только буквы), дата рождения, пол(0,1),
//город рождения.
//
//Класс должен иметь поля:
//id, имя, фамилия, дата рождения, пол(0,1), город рождения.
//
//Класс должен иметь методы:
//1. Сохранение полей экземпляра класса в БД;
//2. Удаление человека из БД в соответствии с id объекта;
//3. static преобразование даты рождения в возраст (полных лет);
//4. static преобразование пола из двоичной системы в текстовую (муж, жен);
//5. Конструктор класса либо создает человека в БД с заданной
//   информацией, либо берет информацию из БД по id (предусмотреть валидацию данных);
//6. Форматирование человека с преобразованием возраста и (или) пола (п.3 и п.4)
//   в зависимости от параметров (возвращает новый экземпляр stdClass со всеми
//   полями изначального класса). */

class DataBase{
    private $name;
    private $surname;
    private $date;
    private $gender;
    private $city;

    private $host;
    private $user;
    private $database;
    private $password;

    public function __construct($name, $surname, $date, $city, $gender, $host, $database, $password, $user)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->date = $date;
        $this->city = $city;
        $this->gender = $gender;

        $this->host = $host;
        $this->database = $database;
        $this->password = $password;
        $this->user = $user;
    }

    public function connect($host, $database, $password, $user){

        $connection = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if($connection == true){
            echo 'соединение установлено';
        }
        else{
            echo 'Ошибка соединения'. mysqli_error();
        }
    }

    public function saveToDB($name, $surname, $date, $gender, $city)
    {

    }
}

$connection = new DataBase('Юра', 'Боричевский', '09-12-1997', 'Пинск', '0', 'localhost', 'lessonDB', '', 'root');

$connection -> connect('localhost', 'lessonDB', '', 'root');
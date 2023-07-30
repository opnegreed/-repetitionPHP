<?php

//** Создайте класс "Студент".
//У класса должны быть следующие свойства: имя, фамилия, возраст.
//Создайте методы для получения и установки каждого из этих свойств.
//Создайте метод "получитьИнформацию()", который будет выводить информацию
// о студенте (имя, фамилия, возраст) на экран. */

class student{
    private $name;
    private $surname;
    private $age;

    public function __construct($name, $surname, $age)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
    }

    public function getName(){
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getInfo(){
        echo $this->name . "</br>";
        echo $this->surname . "</br>";
        echo $this->age . "</br>";
    }
}

$newStudent = new student();

$newStudent -> setName('Yura');

$newStudent -> getName();

$newStudent -> setAge(25);

$newStudent ->setSurname('Cringe');

$newStudent -> getInfo();
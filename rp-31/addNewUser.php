<?php

require_once 'connect.php';

class User {
    public $name = '';
    public $surname = "";
    public $phone = "";
    public $address = "";

    function __construct($name, $surname, $phone, $address) {
        $this->name = $name;
        $this->surname = $surname;
        $this->phone = $phone;
        $this->address = $address;

    }

    function addUserToDB($connect) {

        $name = $this->name;
        $surname = $this->surname;
        $phone = $this->phone;
        $address = $this->address;

        $sql = "INSERT INTO `User` (`id`, `Name`, `Surname`, `Phone`, `Adress`) VALUES (NULL, '$name', '$surname', '$phone', '$address')";

        mysqli_query($connect, $sql);

        header('Location: index.php');
    }


}



$name = $_POST['name'];
$surname = $_POST['surname'];
$address = $_POST['address'];
$phone = $_POST['phone'];

$user = new User($name, $surname, $phone, $address);

$user->addUserToDB($connect);




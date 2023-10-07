<?php 
require_once 'connect.php';
$id = $_POST['id'];

$sql = "DELETE FROM `User` WHERE `id`= '$id'";

$res = mysqli_query($connect, $sql);

if($res) {
    echo 'Удаления успешна';
} else {
    echo 'Ошибка при удаления';
}


?>
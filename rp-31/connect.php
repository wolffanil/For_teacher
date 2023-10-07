<?php

$connect =  mysqli_connect('213.108.170.208', 'students', 'Student$20XX', 'Pr1');

if(!$connect) {
    echo 'Error to connect to db' . mysqli_connect_error();
}
?>
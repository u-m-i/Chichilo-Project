<?php

require __DIR__ . '.\vendor\autoload.php';

$data_base = conex();

$conextion = new mysqli($data_base['host'],$data_base['user'],$data_base['password'],$data_base['dbname']);

verify($conextion);

$name = $_POST["name"];
$lastname = $_POST["lastname"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = hash('sha512', '73b0c0eeb6e3b347a4c32822293c71c72dafa8f5b08961c1811ab4025fdf06a5dbf27b3b3200a7731b65ca36ff80a743'.$_POST["password"]);

create_user($conextion,$name,$lastname,$username,$email,$password);






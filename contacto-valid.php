<?php

include('db.php');

$id = 0;
$usuario    = $_POST['usuario'];
$mail       = $_POST['mail'];
$mensaje    = $_POST['mensaje'];

// echo $mail;
// print_r($mail);

$query =  "INSERT INTO `contacto` (`id`, `usuario`, `mail`, `mensaje`) VALUES (null,'$usuario','$mail','$mensaje')";

// echo $query;


$connection->query($query);
// print_r($connection->insert_id);

header("location:index.php");

?>
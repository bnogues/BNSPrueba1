<?php

include('db.php');


$id = $_POST['id'];
$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$mail = $_POST['mail'];
$pass = $_POST['pass'];
if($id == 0){
    $query =  "INSERT INTO `usuario` (`id`, `usuario`, `nombre`, `direccion`, `telefono`, `mail`, `contrasena`) VALUES (null,'".$usuario."','".$nombre."','$direccion','$telefono','$mail','$pass')";
}
else{
    //update
    $query = "UPDATE `usuario` SET `usuario` = '$usuario',`contrasena` = '$pass',`nombre` = '$nombre',`direccion` = '$direccion',`telefono` = '$telefono',`mail` = '$mail' WHERE `usuario`.`id` = $id";
}

$connection->query($query);
// print_r($connection->insert_id);

if($_SESSION['login'] != true) 
{
header("location:index.php");
}
else 
{
header("location:usuario.php");
}
?>
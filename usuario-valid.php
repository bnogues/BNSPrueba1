<?php

include('db.php');


$id = $_POST['id'];
$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$mail = $_POST['mail'];
if($id == 0){
    $query =  "INSERT INTO `usuario` (`id`, `usuario`, `nombre`, `direccion`, `telefono`, `mail`) VALUES (null,'".$usuario."','".$nombre."','$direccion','$telefono','$mail')";
}
else{
    //update
    $query = "UPDATE `usuario` SET `usuario` = '$usuario',`nombre` = '$nombre',`direccion` = '$direccion',`telefono` = '$telefono',`mail` = '$mail' WHERE `usuario`.`id` = $id";
}

$connection->query($query);
// print_r($connection->insert_id);

header("location:usuario.php");

?>
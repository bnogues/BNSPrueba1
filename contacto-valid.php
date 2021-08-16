<?php

include('db.php');

$id = 0;
// $id         = $_POST['id'];
$usuario    = $_POST['usuario'];
$mail       = $_POST['mail'];
$mensaje    = $_POST['mensaje'];

echo $mail;
print_r($mail);

if($id == 0){
    // $query =  "INSERT INTO `contacto` (`id`, `usuario`, `mail`, `mensaje`) VALUES (null,'".$usuario."','".$mail."','".$mensaje"')";
    $query =  "INSERT INTO `contacto` (`id`, `usuario`, `mail`, `mensaje`) VALUES (null,'$usuario','$mail','$mensaje')";
}
// else{
//     //update
//     $query = "UPDATE `contacto` SET `usuario` = '$usuario',`mail` = '$mail',`mensaje` = '$mensaje' WHERE `contacto`.`id` = $id";
// }
echo $query;

$connection->query($query);
// print_r($connection->insert_id);

header("location:index.php");

?>
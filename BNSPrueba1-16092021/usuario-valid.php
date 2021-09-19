
<?php

include('db.php');


$id = $_POST['id'];
$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$mail = $_POST['mail'];
$pass = $_POST['pass'];

// echo "$usuario";
// echo "$mail";
// $esnul = is_null($mail);
// echo "$esnul";
// echo is_null($mail) ? 1 : 0;
// echo isset($mail) ? 1 : 0;   
// echo strlen($mail);

// die();


// if (is_null($usuario)  or is_null($nombre) or is_null($mail) or is_null($pass))
// if (strlen($usuario)==0  or strlen($nombre)==0 or strlen($mail)== 0 or strlen($pass)== 0)
// { 
//     // $_SESSION['errorjs3'] = '1';
//     // echo "<script type='text/javascript'>alert("Hola");</script>";
//     echo "<script type='text/javascript'>swal('Error:', 'Hay datos importantes incompletos !', 'error');</script>";
// }      
// else 
// {
    //swal("Su consulta fue enviada");      
    if($id == 0){
        $query =  "INSERT INTO `usuario` (`id`, `usuario`, `nombre`, `direccion`, `telefono`, `mail`, `contrasena`) VALUES (null,'".$usuario."','".$nombre."','$direccion','$telefono','$mail','$pass')";
    }
    else{
        //update
        $query = "UPDATE `usuario` SET `usuario` = '$usuario',`contrasena` = '$pass',`nombre` = '$nombre',`direccion` = '$direccion',`telefono` = '$telefono',`mail` = '$mail' WHERE `usuario`.`id` = $id";
    }
    
    $connection->query($query);
    // $_SESSION['errorjs3'] = '0';
    // print_r($connection->insert_id);
// }

// $login2 = $_SESSION['login'];
// echo "$login2";
// die();


if($_SESSION['login']) 
{
header("location:usuario.php");
}
else 
{
header("location:index.php");
}
?>
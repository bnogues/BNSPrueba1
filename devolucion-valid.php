<?php 
include('header.php'); 

include('db.php');

//Cuando el Menu habilita entrar a DEVOLUCION.PHP siempre hay un usuario conectado, por eso no pregunto por  isset
$usuario = $_SESSION['username'];

$id = $_POST['id'];

//      Validar si el Usuario tiene Libro Prestado sin Devolver con ISBN 
////////////////////////////////////////////////////////////////////////
$error1 = 'N';
$prestados = 0;
// $linea = 0;

$q = "SELECT isbn,usuario,fechadevuelto FROM prestamo where isbn = '$id' and usuario = '$user'";
$response = $connection->query($q);
if ($response->num_rows > 0) 
{
    while($row = $response->fetch_assoc()) 
    { 
    //    $linea = $linea + 1;
       if ($row["fechadevuelto"] == '0000-00-00') 
       {
           $prestados = $prestados + 1;
       }
    }
}  

//echo "$id";
// echo "$linea";
// echo "$prestados";

if ($prestados <= 0) 
{
    $error1 = 'S';
    echo "<script>swal('ERROR:', 'Este Libro no esta para Devolver', 'error');</script>";
}
else 
{
    //  Si no hubo Errores,  Grabo el Registro del Prestamo
    $fechahoy = date("Y-m-d");
    $query =  "UPDATE `prestamo` SET `fechadevuelto` = '$fechahoy' WHERE isbn = '$id' and usuario = '$user'";

    // echo "'$query'";
    $connection->query($query);

   echo "<script>swal('OK:', 'La Devolucion se grabo correctamente', 'sucess');</script>";
}
// echo "$error1";
// echo "$user";
// die();
header("location:devolucion.php");

?>

<?php include('footer.php'); ?>

<script>
alert('comienza  devolucion-valid');
</script>

<?php
echo "en devolucion-valid";

include('db.php');

$user = 'berna';

$id = $_POST['id'];


//      Validar si el Usuario tiene Libro Prestado sin Devolver con ISBN 
////////////////////////////////////////////////////////////////////////
$error1 = 'N';
$prestados = 0;
$linea = 0;

$q = "SELECT isbn,usuario,fechadevuelto FROM prestamo where isbn == $id and usuario == $user";
$response = $connection->query($q);
if ($response->num_rows > 0) 
{
    while($row = $response->fetch_assoc()) 
    { 
       $linea = $linea + 1;
       if ($row["fechadevuelto"] == '0000-00-00') 
       {
           $prestados = $prestados + 1;
       }
    }
}  

echo "$id";
echo "$linea";
echo "$prestados";

if ($prestados <= 0) 
{
    $error1 = 'S';
    echo "Error: Este Libro no esta para Devolver";
} 
else 
{
    //  Si no hubo Errores,  Grabo el Registro del Prestamo
    $fechahoy = date("d.m.Y");
    $query =  "UPDATE `prestamo` SET `fechadevuelto` = $fechahoy WHERE `prestamo`.`isbn` = $id and `prestamo`.`usuario` = $user";
    $connection->query($query);
}
echo "$error1";
echo "$user";
die();
header("location:prestamo.php");

?>

<?php include('footer.php'); ?>

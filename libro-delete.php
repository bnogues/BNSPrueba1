<?php

include('db.php');

$id = $_POST['id'];

$prestados = 0;
$q = "SELECT * FROM prestamo where isbn = '$id'";
$response = $connection->query($q);
if ($response->num_rows > 0) 
{
    while($row = $response->fetch_assoc()) 
    {  
           $prestados = $prestados + 1;
    }
}  

if ($prestados > 0) 
    {
        echo "<script>alert('Error: Este Libro no puede borrar porque hay registros en Prestados');</script>";
    } 
else 
    { 
        $query = "delete from libro where isbn = $id";
        $response = $connection->query($query);
        $mensaje = "Se ha eliminado el Libro";
    }    

// die();

header("location:libro.php");

?>
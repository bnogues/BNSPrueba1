<?php

include('db.php');
$id = $_POST['id'];
$query = "delete from libro where isbn = $id";
$response = $connection->query($query);

$mensaje = "Se ha eliminado el Libro";

header("location:libro.php");

?>
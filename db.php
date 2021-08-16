<?php

$connection = new mysqli("localhost","root","","biblioteca");
if (mysqli_connect_errno()) {
    printf("Error de conexión: %s\n", mysqli_connect_error());
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrucciones de la Biblioteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="../js/script.js"></script>   
    <link rel="stylesheet" href="../css/style.css">
</head>
<?php
include('header.php');
?>
<body>
    <div id="UsuarioConectado">
          <!-- <p>Usuario Conectado: </p> -->
    </div>  

    <div class="container">
        <br><br>

        <div class="row justify-content-center align-items-center">
            <h1 class="title" style="text-align: center;">Instrucciones de la Biblioteca</h1>
            <br>
            <div>
                Para solicitar prestamo de libros primero debe registrarse como Usuario
            </div>
            <div>
                Si no se registra, solo tendra disponible las opciones Inicio, Contacto, Preguntas Frecuentes e Instrucciones
            </div>
            <div>   
                Si se registra, ademas de las opciones de Menu anteriores, tendra las opciones Prestamo, Devolucion y Consulta
                Si se registra como Administrador, tambien tendra las opciones ABM de Libros y Usuarios
            </div>
            <div>     
                El usuario Administrador esta definido en Hardcode y es bernardonogues@yahoo.com y contraseña berna
            </div>
            <div>     
                Si necesita hacernos alguna consulta utilice la Opcion Contacto
            </div>
            <div>
                Para registrarse, seleccione la opcion "Registrese aqui"  y para conectarse la opcion "Login"
            </div> 
            <div> 
                El ABM de Usuarios tiene el campo Clave "ID"  que se incrementa automaticamente.
            </div> 
            <div>     
                El ABM de Libros tiene el campo Clave "ISBN" que el Usuario lo debe ingresar manualmente.
            </div>
            <div> 
                La opcion "Consulta" muestra la Historia de todos los Libros Prestados al Usuario conectado en el momento de hacer la Consulta.
                Como particularidad el SELECT de esta opcion es un INNER JOIN
            </div>
            <div>     
                La opcion "Prestamo" valida que el Usuario tenga hasta 3 Libros prestados, no tenga Libros Vencidos sin devolver, si hay Libros Disponibles para prestar y si el Usuario ya tiene este mismo Libro Prestado y sin Devolver.
            </div>
        </div>
    </div> 
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../js/menu.js"></script>
    <script src="../js/instrucciones.js"></script>  
    <!-- <script src="../js/contacto.js"></script> -->
</body>
</html>
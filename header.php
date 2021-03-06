<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" integrity="sha512-f8gN/IhfI+0E9Fc/LKtjVq4ywfhYAVeMGKsECzDUHcFJ5teVwvKTqizm+5a84FINhfrgdvjX8hEJbem2io1iTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
    <title>Libreria</title>
  </head>
  <body>

  <!-- Login -->
  <?php

session_start();
if(!isset($_SESSION['login']))
{
  $_SESSION['login'] = false;
  $_SESSION['username'] = 'Invitado';
  $_SESSION['error'] = '0';
  $_SESSION['errorjs2'] = '0';
}

      // Login
$user = isset($_SESSION['username'])?$_SESSION['username']:"";
$my_Usr = "Usuario: ".  $user;
  ?>

  <div class="container-fluid">
    <a class="navbar-brand" href="#">LIBRERIA "Del Taller"</a>
  </div>    
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <!-- <a class="navbar-brand" href="#">LIBRERIA</a> -->
   <div class="container-fluid">  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/BNSPrueba1">Inicio</a>
        </li>
        <?php 
          if($_SESSION['login'] === true)
          {
            echo '<li class="nav-item">
                  <a class="nav-link" href="prestamo.php">Prestamo</a>
                  </li>'; 
            echo '<li class="nav-item">
                  <a class="nav-link" href="devolucion.php">Devolucion</a>
                  </li>';
            echo '<li class="nav-item">
                  <a class="nav-link" href="consulta.php">Consulta</a>
                  </li>';
          }
        ?>
        <!-- Las siguientes dos opciones mostrar solo si esta conectado y es Administrador         -->
        <?php 
          if($_SESSION['login'] === true && $_SESSION['username'] == 'BERNA' )
          {
        
            echo '<li class="nav-item">
                  <a class="nav-link" href="libro.php">Libros</a>
                  </li>';
            echo '<li class="nav-item">
                  <a class="nav-link" href="usuario.php">Usuarios</a>
                  </li>';
          }
        ?>
        <li class="nav-item">
          <a class="nav-link" href="contacto.php">Contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pregunta.php">Preg.Frecuentes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="instruccion.php">Instrucciones</a>
        </li>
      </ul>
      
      <!-- <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        <button class="btn btn-outline-success" type="button">Registro</button>
      </form> -->
    </div>
  </div>
</nav>
<!-- <div class="container-fluid"> -->
<div class="d-flex">
    <div class="d-flex">
        <!-- Login -->
        <?php $my_Usr = "Usuario: ".  $user;?>
        <h4><?php echo $my_Usr;?></h4>;       
 
        <!-- <p>"Usuario Conectado:"</p>
        <div id="usuarioconectado"> </div> -->
    </div>
    <a  id="btnCarrito"style="margin: 0px 400px;visibility: hidden;" type="button" class="btn btn-primary bg-dark">
                    Carrito <span class="badge bg-secondary">4</span>
    </a>
    <!-- <form class="d-flex"> -->
    <form action="usuario-crear.php" method="post" class="d-flex"> 
        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button> -->
        <?php 
          if($_SESSION['login'] != true)
          {
            echo '<button class="btn btn-outline-success" type="submit">Registro</button>';
          }
        ?>     
        <a
          <?php
            if($_SESSION['login']){
              echo 'href="login-valid.php"';
            }
            else{
            
            echo 'href="login.php"';
            }
          ?>
          class="btn btn-outline-success" type="button">
          <?php       
            if($_SESSION['login']){
              echo('Logout');
            }else{
              echo('Login');
            }
          ?>
        </a>

    </form>  
</div>  

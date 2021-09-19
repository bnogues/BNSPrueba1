

<?php //include('header.php'); ?>

<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->


<!-- <script>
let errorjs = JSON.parse(sessionStorage.getItem('errorparametro')); 
</script> -->

<?php

include('db.php');
session_start();
$user = isset($_SESSION['username'])?$_SESSION['username']:"";


$id = $_POST['id'];
// $titulo = $_POST['titulo'];
// $autor = $_POST['autor'];
// $resena = $_POST['resena'];
// $editorial = $_POST['editorial'];
// $idioma = $_POST['idioma'];
// $paginas = $_POST['paginas'];
// $total = $_POST['total'];

// $errorjs2 = $_SESSION['errorjs2'];
// echo "$errorjs2";
// echo "$user";
// echo "$id";
// echo "<script>'$errorjs'</script>";
// die();

include('db.php');

$error1 = 'N';
$error2 = 'N';
$error3 = 'N';
$error4 = 'N';

$fechahoy    = date("Y-m-d"); 
// $fechahoy    = date("Y-m-d",strtotime($fechahoy."- 1 days"));
$vencimiento = date("Y-m-d",strtotime($fechahoy."+ 1 days")); 

//      Validar si hay libros Disponibles para Prestar
//////////////////////////////////////////////////////
$error1 = 'N';
$disponible = 0;
$total = 0;
$prestados = 0;
$q = "SELECT isbn,total FROM libro where isbn = '$id'";
$response = $connection->query($q);
if ($response->num_rows > 0) 
{
    while($row = $response->fetch_assoc()) 
    {
       $total = $row["total"];
    }
}   
$q = "SELECT isbn,fechadevuelto FROM prestamo where isbn = '$id'";
$response = $connection->query($q);
if ($response->num_rows > 0) 
{
    while($row = $response->fetch_assoc()) 
    {
       if ($row["fechadevuelto"] == '0000-00-00') 
       {
           $prestados = $prestados + 1;
       }
    }
}  
$disponible = $total - $prestados;

// echo "$disponible";
//die();

if ($disponible <= 0) 
{
    $error1 = 'S';
    $_SESSION['errorjs2'] = '1';
    // // echo "<script>alert('Error: No hay Libros Disponibles para Prestar');</script>";
    // echo "<script>swal('Error:', 'No hay Libros Disponibles para Prestar', 'error');</script>";
} 
else 
{
    //      Validar si el  Usuario ya tiene el maximo (3) de Libros Prestados
    /////////////////////////////////////////////////////////////////////////
    $error2 = 'N';
    $prestados2 = 0;
    $q = "SELECT usuario,fechadevuelto FROM prestamo where usuario = '$user'";
    // forma de Debug... de ver la instruccion SELECT y despues copiarla y ejecutarla sola
    // echo $q;
    // die();

    $response = $connection->query($q);
    if ($response->num_rows > 0) 
    {
        while($row = $response->fetch_assoc()) 
        {
            if ($row["fechadevuelto"] == '0000-00-00') 
            {
                $prestados2 = $prestados2 + 1;
            }
        }
    }  
    if ($prestados2 >= 3) 
    {
        $error2 = 'S';
        $_SESSION['errorjs2'] = '2';
        //// echo "<script>alert('Error: El Usuario ya tiene el Maximo (3) de Libros Prestados');</script>";
        // echo "<script>swal('Error:', 'El Usuario ya tiene el Maximo (3) de Libros Prestados', 'error');</script>";
    }
    else
    {
        //      Validar si el Usuario tiene Libros Vencidos
        //////////////////////////////////////////////////// 
        $error2 = 'N';
        $prestados2 = 0;

        $q = "SELECT usuario,fechadevolucion,fechadevuelto FROM prestamo where usuario = '$user'" ;
        $response = $connection->query($q);
        if ($response->num_rows > 0) 
        {   
            while($row = $response->fetch_assoc()) 
            {
                if ( $row["fechadevuelto"] == '0000-00-00' and $row["fechadevolucion"] < $fechahoy ) 
                {
                    $prestados2 = $prestados2 + 1;
            }   }
        }  
        // echo $user;
        // echo $fechahoy;
        // echo $prestados2; 
        if ($prestados2 >= 1) 
        {
            $error3 = 'S';
            $_SESSION['errorjs2'] = '3';
            // echo "<script>swal('Error:', 'El Usuario tiene Libros Vencidos', 'error');</script>";
        }
        else
        {
            //      Validar si el Usuario ya tiene este mismo Libro Prestado
            //////////////////////////////////////////////////////////////// 
// echo "$id";
// echo "$user";

            $error4 = 'N';
            $estelibro = 0;
            $q = "SELECT isbn,fechadevuelto FROM prestamo where isbn = '$id' and usuario = '$user'";
            $response = $connection->query($q);
            if ($response->num_rows > 0) 
            {
                 while($row = $response->fetch_assoc()) 
                 {    
                     if ($row["fechadevuelto"] == '0000-00-00') 
                     {
                        $error4 = 'S';
                     }
                 }                 
            }
            
            if ($error4 == 'S') 
            {
                // echo "<script>alert('Error: El Usuario ya tiene este Libro Prestado');</script>";
                // echo "<script>swal('Error:', 'El Usuario ya tiene este Libro Prestado', 'error');</script>";
                $_SESSION['errorjs2'] = '4';
                //  die();
            }
            else 
            {           
                //  Si no hubo Errores,  Grabo el Registro del Prestamo
                if ($error1 === 'N' and $error2 === 'N' and $error3 === 'N' and $error4 === 'N') 
                {
                    $query =  "INSERT INTO `prestamo` (`isbn`, `usuario`, `fechaprestamo`, `fechadevolucion`, `fechadevuelto`  ) VALUES ('".$id."','".$user."','".$fechahoy."','".$vencimiento."','   ')";
                    $connection->query($query);
                    $_SESSION['errorjs2'] = '9';
                    //  echo "<script>swal('OK:', 'El Prestamo se grabo correctamente', 'sucess');</script>";
                }
            }
        }    
    }
}

// echo "errores";
// echo "$error1";
// echo "$error2";
// echo "$error3";
// echo "$error4";
// die();

// $errorjs2 = $_SESSION['errorjs2'];
// echo "$errorjs2";
// echo "$user";
//die();
// $message = "wrong answer";
// echo "<script type='text/javascript'>alert('$message');</script>";
?>

<script>
// let errorjs = JSON.parse(sessionStorage.getItem('errorparametro')); 

// $errorjs2 = $_SESSION['errorjs2'];
// if ($errorjs2 == 4)
// {
//     swal('Llegue al FINAL');
// }
</script>

<?php //include('footer.php'); ?>

<?php
//  die();
 //header("Location: prestamo.php");
 header("location:prestamo.php");
?>

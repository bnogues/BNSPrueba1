<script>
alert('comienza  prestamo-valid');
</script>

<?php
echo "en prestamo-valid";

include('db.php');

$user = 'berna';

$id = $_POST['id'];
// $titulo = $_POST['titulo'];
// $autor = $_POST['autor'];
// $resena = $_POST['resena'];
// $editorial = $_POST['editorial'];
// $idioma = $_POST['idioma'];
// $paginas = $_POST['paginas'];
// $total = $_POST['total'];


include('db.php');

$error1 = 'N';
$error2 = 'N';
$error3 = 'N';
$error4 = 'N';

//      Validar si hay libros Disponibles para Prestar
//////////////////////////////////////////////////////
$error1 = 'N';
$disponible = 0;
$total = 0;
$prestados = 0;
$q = "SELECT isbn,total FROM libro where isbn = $id";
$response = $connection->query($q);
if ($response->num_rows > 0) 
{
    while($row = $response->fetch_assoc()) 
    {
       $total = $row["total"];
    }
}   
$q = "SELECT isbn,fechadevuelto FROM prestamo where isbn = $id";
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
echo "$id";
echo "$disponible";

if ($disponible <= 0) 
{
    $error1 = 'S';
    echo "Error: No hay Libros Disponibles para Prestar";
} 
else 
{

    //      Validar si el  Usuario ya tiene el maximo (3) de Libros Prestados
    /////////////////////////////////////////////////////////////////////////
    $error2 = 'N';
    $prestados2 = 0;
    $q = "SELECT usuario,fechadevuelto FROM prestamo where usuario = $user";
    $response = $connection->query($q);
    if ($response->num_rows > 0) 
    {
        while($row = $response->fetch_assoc()) 
        {
            if ($row["fechadevuelto"] = '0000-00-00') 
            {
                $prestados2 = $prestados2 + 1;
            }
        }
    }  
    if ($prestados2 >= 3) 
    {
        $error2 = 'S';
        echo "Error: El Usuario ya tiene el Maximo (3) de Libros Prestados";
    }
    else
    {
        //      Validar si el Usuario tiene Libros Vencidos
        //////////////////////////////////////////////////// 
        $error2 = 'N';
        $prestados2 = 0;
        $fechahoy = date("d.m.Y"); 
        $q = "SELECT usuario,fechadevolucion,fechadevuelto FROM prestamo where usuario = $user";
        $response = $connection->query($q);
        if ($response->num_rows > 0) 
        {
            while($row = $response->fetch_assoc()) 
            {
                if ($row["fechadevuelto"] = '0000-00-00' and $row["fechadevolucion"] < $fechahoy) 
                {
                    $prestados2 = $prestados2 + 1;
                }
            }
        }  
        if ($prestados2 >= 3) 
        {
            $error2 = 'S';
            echo "Error: El Usuario tiene Libros Vencidos";
        }
        else
        {
            //      Validar si el Usuario ya tiene este mismo Libro Prestado
            //////////////////////////////////////////////////////////////// 
            $error4 = 'N';
            $estelibro = 0;
            $q = "SELECT isbn,fechadevuelto FROM prestamo where isbn = $id and usuario = $user";
            $response = $connection->query($q);
            if ($response->num_rows > 0) 
            {
                 while($row = $response->fetch_assoc()) 
                 {    
                     if ($row["fechadevuelto"] == '2021-00-00') 
                     {
                        $error4 = 'S';
                     }
                 }                 
            }
            
            if ($error4 = 'S') 
            {
                echo "Error: El Usuario ya tiene este Libro Prestado";
            }
            else 
            {           
                //  Si no hubo Errores,  Grabo el Registro del Prestamo
                if ($error1 === 'N' and $error2 === 'N' and $error3 === 'N' and $error4 === 'N') 
                {
                    $vencimiento = $fechahoy + 5;
                    $query =  "INSERT INTO `prestamo` (`isbn`, `usuario`, `fechaprestamo`, `fechadevolucion`, `fechadevuelto`  ) VALUES ('".$id."','".$user."','".$fechahoy."','.$vencimiento.','   ')";
                    $connection->query($query);
                }
            }
        }    
    }
}
echo "$error1";
echo "$error2";
echo "$error3";
echo "$error4";
echo "$user";
echo "$fechahoy";
die();
header("location:prestamo.php");

?>
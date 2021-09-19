<?php include('header.php'); ?>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<?php
  // session_start();
  if (!isset($_SESSION['errorjs2'])) 
  {
    $_SESSION['errorjs2'] = '0';
  }
?>


<?php
  $filtro = "";
  $criterioValor = "";
  if(isset($_GET['filtro']))
  {
    $filtro = $_GET['filtro'];
    $criterioValor = $_GET['criterioValor'];
  }
  
?>

<div class="containerPrestamo">
  <h1>Prestamo de Libros</h1>
    
<!-- FILTRO -->
  <form id="filtrarPrestamo" action="prestamo.php" method="get">
    <label for="filtro">Filtro</label>
    <input type="text" name="filtro" id="filtro" value="<?php echo isset($_GET["filtro"])?$_GET["filtro"]:'';  ?>">
       
    <!-- Radio Button -->
    <label for="isbn">Isbn</label>
    <input type="radio" name="criterio" id="isbn" checked="checked">
    <label for="titulo">Titulo</label>
    <input type="radio" name="criterio" id="titulo">
    <label for="autor">Autor</label>
    <input type="radio" name="criterio" id="autor">
    <input type="hidden" name="criterioValor" id="criterioValor">

    <button type="submit" onclick="filtrar_prestamo(event)" id="filtrar">Filtrar</button>
  </form>

  <!-- <script>
        function filtrar_func(event){
        event.preventDefault();
        var selectedValue = document.querySelector('input[name="criterio"]:checked').id  
        alert("Hola");
        document.getElementById('criterioValor').value = selectedValue;
        document.getElementById('filtrarForm').submit();
        }
  </script> -->

  <table class="table">
    <thead>
      <tr>
        <!-- <th scope="col">Id</th>   -->
        <th scope="col">ISBN</th>
        <th scope="col">Titulo</th>
        <th scope="col">Autor</th>
        <th scope="col">Resena</th>
        <th scope="col">Editorial</th>
        <th scope="col">Idioma</th>
        <th scope="col">Paginas</th>
        <th scope="col">Disponibles</th>
        <th scope="col">Imagen</th>      
      </tr>
    </thead>
    <tbody>
      <?php
        include('db.php'); 
        $q = "SELECT isbn,titulo,autor,resena,editorial,idioma,paginas,total,imagen FROM libro";
        
        // echo $filtro;
        // echo $criterio;

        if(isset($_GET["filtro"]) && isset($_GET["criterioValor"]))
        {
          // $filtro = $_POST["filtro"];
          // $criterio = $_GET["criterioValor"];

          if($criterioValor === "isbn")
          {
            $q = "SELECT isbn,titulo,autor,resena,editorial,idioma,paginas,total,imagen FROM libro where isbn like '%$filtro%'";
          }
          else
          {
            if($criterioValor === "titulo")
            {
                $q = "SELECT isbn,titulo,autor,resena,editorial,idioma,paginas,total,imagen FROM libro where titulo like '%$filtro%'";
            }
            else
            {
                $q = "SELECT isbn,titulo,autor,resena,editorial,idioma,paginas,total,imagen FROM libro where autor like '%$filtro%'";
            }
          }

        }

        $response = $connection->query($q);

        if ($response->num_rows > 0) 
        {
            while($row = $response->fetch_assoc()) 
            {                
                echo '<tr id="'.$row["isbn"].'">
                <td>'.$row["isbn"].'</td>        
                <td>'.$row["titulo"].'</td>
                <td>'.$row["autor"].'</td>
                <td>'.$row["resena"].'</td>
                <td>'.$row["editorial"].'</td>
                <td>'.$row["idioma"].'</td>
                <td>'.$row["paginas"].'</td>
                <td>'.$row["total"].'</td>
                <td><img style="width:50px;" src="image/'.$row["imagen"].'"></td>           
                <td style="display:flex">

                <form id="prestarForm'.$row["isbn"].'" action="prestamo-valid.php" method="post">
                  <input  name="id" type="hidden" value="'.$row["isbn"].'">
                  <button type="submit" id="'.$row["isbn"].'" onclick="clickHandler3(event)" class="btn btn-danger">
                  Prestar</button>
    
                </form>

                </td>
                </tr>';              
            }
        } 
        // else 
        // {
        //     printf('No hay Libros para Prestas con este Filtro.<br />');
        // }
      ?>
    </tbody>
  </table>
  
</div>




<?php
//provisorio, al final de la pagina muestra lo que trae esta variabla
$errorjs2 = $_SESSION['errorjs2'];
//echo "$errorjs2";

 // echo "$user";
// die();


// //SWITCH  NO FUNCIONA /// DA ERROR EL SWAL
// switch ($errorjs2) 
// { 
//   case '1':
//     echo "<script type='text/javascript'>swal('Error:', 'No hay Libros Disponibles para Prestar', 'error');</script>";
//     break;
//   case '2':
//     echo "<script type='text/javascript'>swal('Error:', 'El Usuario ya tiene el Maximo (3) de Libros Prestados', 'error');</script>";
//     break;
//   case '3':
//      echo "<script type='text/javascript'>swal('Error:', 'El Usuario tiene Libros Vencidos', 'error');</script>";
//     break;
//   case '4':
//      echo "<script type='text/javascript'>swal('Error:', 'El Usuario ya tiene este Libro Prestado', 'error');</script>";
//     break;  
//   case '9':
//      echo "<script type='text/javascript'>swal('Ok:', 'El Prestamo se grabo correctamente', 'success');</script>";
//     break;          
//   default:
//     $_SESSION['errorjs2'] = '0';
//     break;
// }


if ($errorjs2 == '1')
{
  echo "<script type='text/javascript'>swal('Error:', 'No hay Libros Disponibles para Prestar', 'error');</script>";
} 
else 
{
  if ($errorjs2 == '2') 
  {
  echo "<script type='text/javascript'>swal('Error:', 'El Usuario ya tiene el Maximo (3) de Libros Prestados', 'error');</script>";
  }
  else 
  {
    if ($errorjs2 == '3') 
    { 
      echo "<script type='text/javascript'>swal('Error:', 'El Usuario tiene Libros Vencidos', 'error');</script>";
    }
    else 
    { 
      if ($errorjs2 == '4') 
      { 
        echo "<script type='text/javascript'>swal('Error:', 'El Usuario ya tiene este Libro Prestado', 'error');</script>";
      }
      else 
      {
        if ($errorjs2 == '9') 
        { 
          echo "<script type='text/javascript'>swal('Ok:', 'El Prestamo se grabo correctamente', 'success');</script>";
        }
      }  
    }  
  }
}

$_SESSION['errorjs2'] = '0';
?> 

<?php include('footer.php'); ?>

<!-- //Recuperar variable
//let usuario2 = JSON.parse(sessionStorage.getItem('Usuarioconectado')); 

var Usuario ;
Usuario = element.usuario
// grabo variable de Session Autorizado
sessionStorage.setItem('Usuarioconectado', JSON.stringify({user:Usuario})); -->

<!-- // This is in the PHP file and sends a Javascript alert to the client
$message = "wrong answer";
echo "<script type='text/javascript'>alert('$message');</script>"; -->
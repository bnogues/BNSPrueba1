<?php
include('header.php');
?>

<div class="containerLibro">
  <h1>Consulta de Libros del Usuario Logueado</h1>
    
<!-- FILTRO -->
  <!-- <form id="filtrarForm" action="libro.php" method="get">
    <label for="filtro">Filtro</label>
    <input type="text" name="filtro" id="filtro" value="<?php echo isset($_POST["filtro"])?$_POST["filtro"]:'';  ?>">
        -->
    <!-- Radio Button -->
    <!-- <label for="isbn">Isbn</label>
    <input type="radio" checked="checked" name="criterio" id="isbn">
    <label for="titulo">Titulo</label>
    <input type="radio" name="criterio" id="titulo">
    <label for="autor">Autor</label>
    <input type="radio" name="criterio" id="autor">
    <input type="hidden" name="criterioValor" id="criterioValor">

    <button type="submit" onclick="filtrar_func(event)" id="filtrar">Filtrar</button>
  </form> -->


  <table class="table">
  <thead>
    <tr>
      <!-- <th scope="col">Id</th>   -->
      <th scope="col">ISBN</th>
      <th scope="col">Titulo</th>
      <th scope="col">Autor</th>            
      <th scope="col">Fecha Prestamo</th>
      <th scope="col">Fecha Devolucion</th>
      <th scope="col">Fecha Devuelto</th>  
    </tr>
  </thead>
  <tbody>
  <?php
    include('db.php'); 
    // $q = "SELECT isbn,fechaprestamo,fechadevolucion,fechadevuelto FROM prestamo";
    $q = "SELECT prestamo.isbn,libro.titulo,libro.autor,prestamo.fechaprestamo,prestamo.fechadevolucion,prestamo.fechadevuelto FROM prestamo INNER JOIN libro ON prestamo.isbn = libro.isbn";

    // if(isset($_GET["filtro"]) && isset($_GET["criterio"]))
    // {
    //   $filtro = $_GET["filtro"];
    //   $criterio = $_GET["criterioValor"];
    //   echo $criterio;
    //   $critt = "critt";
    //   echo $critt;
    //   if($criterio === "isbn")
    //   {
    //     $q = "SELECT isbn,titulo,autor,resena,editorial,idioma,paginas,total,imagen FROM libro where isbn like '%$filtro%'";
    //   }
    //   else
    //   {
    //     if($criterio === "titulo")
    //     {
    //         $q = "SELECT isbn,titulo,autor,resena,editorial,idioma,paginas,total,imagen FROM libro where titulo like '%$filtro%'";
    //     }
    //     else{
    //         $q = "SELECT isbn,titulo,autor,resena,editorial,idioma,paginas,total,imagen FROM libro where autor like '%$filtro%'";
    //         }
    
    //   }

    // }

    $response = $connection->query($q);

    if ($response->num_rows > 0) {
        while($row = $response->fetch_assoc()) {

            
            echo '<tr id="'.$row["isbn"].'">
            <td>'.$row["isbn"].'</td>     
            <td>'.$row["titulo"].'</td>    
            <td>'.$row["autor"].'</td>                               
            <td>'.$row["fechaprestamo"].'</td>
            <td>'.$row["fechadevolucion"].'</td>
            <td>'.$row["fechadevuelto"].'</td>
 
             </tr>';              
        }
    } else {
        printf('Registro no encontrado.<br />');
    }
  ?>
  </tbody>
</table>
  </div>

  <?php include('footer.php'); ?>



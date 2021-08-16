<?php
include('header.php');
?>
<div class="containerLibro">
  <h1>Libros</h1>
  <!-- Flexbox container for aligning the toasts -->
  <a href="libro-crear.php" class="btn btn-primary">Crear</a>
  
<!-- FILTRO -->
  <form id="filtrarForm" action="libro.php" method="get">
    <label for="filtro">Filtro</label>
    <input type="text" name="filtro" id="filtro" value="<?php echo isset($_POST["filtro"])?$_POST["filtro"]:'';  ?>">
       
    <!-- Radio Button -->
    <label for="isbn">Isbn</label>
    <input type="radio" checked="checked" name="criterio" id="isbn">
    <label for="titulo">Titulo</label>
    <input type="radio" name="criterio" id="titulo">
    <label for="autor">Autor</label>
    <input type="radio" name="criterio" id="autor">
    <input type="hidden" name="criterioValor" id="criterioValor">

    <button type="submit" onclick="filtrar_func(event)" id="filtrar">Filtrar</button>
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
      <th scope="col">Total</th>
      <th scope="col">Imagen</th>      
    </tr>
  </thead>
  <tbody>
  <?php
    include('db.php'); 
    $q = "SELECT isbn,titulo,autor,resena,editorial,idioma,paginas,total,imagen FROM libro";

    if(isset($_GET["filtro"]) && isset($_GET["criterio"]))
    {
      $filtro = $_GET["filtro"];
      $criterio = $_GET["criterioValor"];
      echo $criterio;
      $critt = "critt";
      echo $critt;
      if($criterio === "isbn")
      {
        $q = "SELECT isbn,titulo,autor,resena,editorial,idioma,paginas,total,imagen FROM libro where isbn like '%$filtro%'";
      }
      else
      {
        if($criterio === "titulo")
        {
            $q = "SELECT isbn,titulo,autor,resena,editorial,idioma,paginas,total,imagen FROM libro where titulo like '%$filtro%'";
        }
        else{
            $q = "SELECT isbn,titulo,autor,resena,editorial,idioma,paginas,total,imagen FROM libro where autor like '%$filtro%'";
            }
    
      }

    }

    $response = $connection->query($q);

    if ($response->num_rows > 0) {
        while($row = $response->fetch_assoc()) {
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
            <form action="libro-crear.php" method="get">
            <input type="hidden" value="'.$row["isbn"].'" name="id">
            <button type="submit" class="btn btn-primary">
            Editar</button>
            </form>
            <form id="deleteForm'.$row["isbn"].'" action="libro-delete.php" method="post">
            <input name="id" type="hidden" value="'.$row["isbn"].'">
            <button type="submit" id="delete'.$row["isbn"].'" onclick="clickHandler(event)" class="btn btn-danger">
            Eliminar</button>
            </form>
            </td>
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
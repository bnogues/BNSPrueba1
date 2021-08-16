<?php

include('header.php'); 

$id = isset($_GET["id"]) ? $_GET["id"] :0;
$titulo = "";
$autor = "";
$resena = "";
$editorial = "";
$idioma = "";
$paginas = "";
$imagen = "";
$total = "";
include('db.php'); 
    $q = "SELECT isbn,titulo,autor,resena,editorial,idioma,paginas,imagen,total FROM libro WHERE isbn = $id";
    $response = $connection->query($q);
    if ($response->num_rows > 0) {
      while($row = $response->fetch_assoc()) {
        $titulo = $row['titulo'];
        $autor = $row['autor'];
        $resena = $row['resena']; 
        $editorial =$row['editorial'];   
        $idioma =$row['idioma']; 
        $paginas =$row['paginas'];   
        $imagen =$row['imagen']; 
        $total =$row['total'];      
      }
  }

?>

<div class="container">
  <?php
    if($id===0){
      echo "<h1>Crear</h1>";
    }
    else{
      echo "<h1>Editar</h1>";
    }
  ?>


<form action="libro-valid.php" method="post" class="row g-3" enctype="multipart/form-data">
  <div class="col-md-6">
    <label for="id" class="form-label">Isbn</label>
    <input type="text" value="<?php echo $id;?>" name="id" class="form-control" id="id">
  </div>  
  <div class="col-12">
    <label for="titulo" class="form-label">Titulo</label>
    <input type="text" value="<?php echo $titulo;?>"name="titulo" class="form-control" id="titulo" placeholder="">
  </div>
  <div class="col-md-6">
    <label for="autor" class="form-label">Autor</label>
    <input type="text" value="<?php echo $autor;?>" name="autor" class="form-control" id="autor">
  </div>
  <div class="col-md-6">
    <label for="resena" class="form-label">Resena</label>
    <input type="text" class="form-control" value="<?php echo $resena;?>" id="resena" name="resena" placeholder="">
  </div>
  <div class="col-md-6">
    <label for="editorial" class="form-label">Editorial</label>
    <input type="text" class="form-control" value="<?php echo $editorial;?>" id="editorial" name="editorial" placeholder="">
  </div>
  <div class="col-md-6">
    <label for="idioma" class="form-label">Idioma</label>
    <textarea type="text" class="form-control" id="idioma" name="idioma" placeholder=""><?php echo $idioma;?></textarea>
  </div>
  <div class="col-md-6">
    <label for="paginas" class="form-label">Paginas</label>
    <textarea type="text" class="form-control" id="paginas" name="paginas" placeholder=""><?php echo $paginas;?></textarea>
  </div>
  <div class="col-md-6">
    <label for="total" class="form-label">Total Libros</label>
    <textarea type="text" class="form-control" id="total" name="total" placeholder=""><?php echo $total;?></textarea>
  </div>
  <div class="col-md-6">
    <!-- <label for="imagen" class="form-label">Imagen</label>
    <textarea type="file" class="form-control" id="imagen" name="imagen" placeholder=""><?php echo $imagen;?></textarea> -->
    <label for="image" class="form-label">Imagen</label>
    <input type="file" name="image">
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Guardar</button>
  </div>
</form>
</div>


<?php include('footer.php'); ?>
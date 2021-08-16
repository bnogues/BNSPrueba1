<?php

include('header.php'); 

$id = isset($_GET["id"]) ? $_GET["id"] :0;
$usuario = "";
$nombre = "";
$direccion = "";
$telefono = "";
$mail = "";
include('db.php'); 
    $q = "SELECT id,usuario,nombre,direccion,telefono,mail FROM usuario WHERE id = $id";
    $response = $connection->query($q);
    if ($response->num_rows > 0) {
      while($row = $response->fetch_assoc()) {
        $usuario = $row['usuario'];
        $nombre = $row['nombre'];
        $direccion = $row['direccion'];
        $telefono =$row['telefono']; 
        $mail =$row['mail'];          
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
<form action="usuario-valid.php" method="post" class="row g-3">
<div class="col-12">
    <input type="hidden" name="id" value="<?php echo $id;?>">
    <label for="usuario" class="form-label">Usuario</label>
    <input type="text" value="<?php echo $usuario;?>"name="usuario" class="form-control" id="usuario" placeholder="">
  </div>
  <div class="col-md-6">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" value="<?php echo $nombre;?>" name="nombre" class="form-control" id="nombre">
  </div>
  <div class="col-md-6">
    <label for="direccion" class="form-label">Direccion</label>
    <input type="text" class="form-control" value="<?php echo $direccion;?>" id="direccion" name="direccion" placeholder="">
  </div>
  <div class="col-md-6">
    <label for="telefono" class="form-label">Telefono</label>
    <input type="number" class="form-control" value="<?php echo $telefono;?>" id="telefono" name="telefono" placeholder="">
  </div>
  <div class="col-md-6">
    <label for="mail" class="form-label">Mail</label>
    <textarea type="text" class="form-control" id="mail" name="mail" placeholder=""><?php echo $mail;?></textarea>
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Guardar</button>
  </div>
</form>
</div>


<?php include('footer.php'); ?>
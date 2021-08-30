<?php
include('header.php');
?>
<div class="container">
  <h1>Usuarios</h1>
  <!-- Flexbox container for aligning the toasts -->
  <a href="usuario-crear.php" class="btn btn-primary">Crear</a>

  <form id="filtrarUser" action="usuario.php" method="post">
    <label for="filtro">Filtro x Nombre</label>
    <input type="text" name="filtro" id="filtro" value="<?php echo isset($_POST["filtro"])?$_POST["filtro"]:'';  ?>">
    <button type="submit"  id="filtrar">Filtrar</button>
  </form>

  <table class="table">
  <thead>
    <tr>
      <!-- <th scope="col">Id</th>   -->
      <th scope="col">Usuario</th>
      <th scope="col">Nombre</th>
      <th scope="col">Direccion</th>
      <th scope="col">Telefono</th>
      <th scope="col">Mail</th>
      <th scope="col">Pass</th>
    </tr>
  </thead>
  <tbody>
  <?php
    include('db.php'); 

    if (isset($_POST["filtro"]) && strlen($_POST["filtro"])>0) {
      $termino = $_POST["filtro"];
      $q = "SELECT id,usuario,nombre,direccion,telefono,mail,contrasena FROM usuario where nombre like '%$termino%'";
    }
    else {
       $q = "SELECT id,usuario,nombre,direccion,telefono,mail,contrasena FROM usuario";
    }
    $response = $connection->query($q);

    if ($response->num_rows > 0) {
        while($row = $response->fetch_assoc()) {
            echo '<tr id="'.$row["id"].'">
            <td>'.$row["usuario"].'</td>
            <td>'.$row["nombre"].'</td>
            <td>'.$row["direccion"].'</td>
            <td>'.$row["telefono"].'</td>
            <td>'.$row["mail"].'</td>
            <td>'.$row["contrasena"].'</td>
            <td style="display:flex">
            <form action="usuario-crear.php" method="get">
            <input type="hidden" value="'.$row["id"].'" name="id">
            <button type="submit" class="btn btn-primary">
            Editar</button>
            </form>
            <form id="deleteForm'.$row["id"].'" action="usuario-delete.php" method="post">
            <input name="id" type="hidden" value="'.$row["id"].'">
            <button type="submit" id="delete'.$row["id"].'" onclick="clickHandler(event)" class="btn btn-danger">
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
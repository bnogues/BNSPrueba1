<?php
include('header.php');
//Cuando el Menu habilita entrar a DEVOLUCION.PHP siempre hay un usuario conectado, por eso no pregunto por  isset
$usuario = $_SESSION['username'];
?>

<div class="containerLibro">
  <h1>Devolucion de Libros</h1>
    
  <table class="table">
    <thead>
      <tr>
        <!-- <th scope="col">Id</th>   -->
        <th scope="col">ISBN</th>
        <th scope="col">Usuario</th>
        <th scope="col">Fecha Prestamo</th>
        <th scope="col">Fecha Devolucion</th>   
      </tr>
    </thead>
    <tbody>
        <?php
          include('db.php'); 
          $q = "SELECT isbn,usuario,fechaprestamo,fechadevolucion FROM prestamo where fechadevuelto = '0000-00-00'";
        
          $response = $connection->query($q);

          if ($response->num_rows > 0) 
          {
              while($row = $response->fetch_assoc()) 
              {
                if ($row["usuario"] == $usuario)    
                {
                  echo '<tr id="'.$row["isbn"].'">
                  <td>'.$row["isbn"].'</td>        
                  <td>'.$row["usuario"].'</td>
                  <td>'.$row["fechaprestamo"].'</td>
                  <td>'.$row["fechadevolucion"].'</td>      
                  <td style="display:flex">

                  <form id="devolverForm'.$row["isbn"].'" action="devolucion-valid.php" method="post">
                  <input name="id" type="hidden" value="'.$row["isbn"].'">
                  <button type="submit" id="'.$row["isbn"].'" onclick="clickHandler5(event)" class="btn btn-danger">
                  Devolver</button>
                  </form>

                  </td>
                  </tr>';    
                }             
              }
          } 
          // else 
          // {
          //     printf('Registro no encontrado.<br />');
          // }
        ?>
    </tbody>
  </table>
</div>

<?php include('footer.php'); ?>
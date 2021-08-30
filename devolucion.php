<?php
include('header.php');
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
    $user = 'berna';
    $q = "SELECT isbn,usuario,fechaprestamo,fechadevolucion FROM prestamo";

    $response = $connection->query($q);

    if ($response->num_rows > 0) 
    {
        while($row = $response->fetch_assoc()) 
        {
            echo '<tr id="'.$row["isbn"].'">
            <td>'.$row["isbn"].'</td>        
            <td>'.$row["usuario"].'</td>
            <td>'.$row["fechaprestamo"].'</td>
            <td>'.$row["fechadevolucion"].'</td>      
            <td style="display:flex">

            <form id="prestarForm'.$row["isbn"].'" action="devolucion-valid.php" method="post">
            <input name="id" type="hidden" value="'.$row["isbn"].'">
            <button type="submit" id="prestar'.$row["isbn"].'" onclick="clickHandler5(event)" class="btn btn-danger">
            Devolver</button>
            </form>

            </td>
             </tr>';              
        }
    } 
    else 
    {
        printf('Registro no encontrado.<br />');
    }
  ?>
  </tbody>
</table>
  </div>

  <?php include('footer.php'); ?>
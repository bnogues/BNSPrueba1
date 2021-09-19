<?php
  include('header.php');

  //Cuando el Menu habilita entrar a CONSULTA.PHP siempre hay un usuario conectado, por eso no pregunto por  isset
  $usuario = $_SESSION['username'];
?>

<div class="containerLibro">
  <h1>Consulta de Libros del Usuario Logueado</h1>
    
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
        $q = "SELECT prestamo.isbn,libro.titulo,libro.autor,prestamo.fechaprestamo,prestamo.fechadevolucion,prestamo.fechadevuelto FROM prestamo INNER JOIN libro ON prestamo.isbn = libro.isbn where prestamo.usuario = '$usuario'";

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



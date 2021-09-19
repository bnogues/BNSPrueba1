
<?php
// echo "en libro-valid";

include('db.php');


$id = $_POST['id'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$resena = $_POST['resena'];
$editorial = $_POST['editorial'];
$idioma = $_POST['idioma'];
$paginas = $_POST['paginas'];
// $imagen = $_POST['imagen'];
$total = $_POST['total'];

$image = $_FILES['image']['name'];

// image file directory
$target = "../image/".basename($image);

//busco si el ISBN (Variable $ID) ya existe, para determinar si el INSERT o UPDATE
$q = "SELECT * FROM libro WHERE isbn=$id";
$response = $connection->query($q);

if ($response->num_rows == 0) {
    // ALTA
    $query =  "INSERT INTO `libro` (`isbn`, `titulo`, `autor`, `resena`, `editorial`, `idioma`, `paginas`, `imagen`, `total`  ) VALUES ('".$id."','".$titulo."','".$autor."','$resena','$editorial','$idioma','$paginas','$image','$total')";
}
else{
    //MODIFICACION
    $query = "UPDATE `libro` SET `titulo` = '$titulo',`autor` = '$autor',`resena` = '$resena',`editorial` = '$editorial',`idioma` = '$idioma',`paginas` = '$paginas',`imagen` = '$image',`total` = '$total' WHERE `libro`.`isbn` = $id";
}

$connection->query($query);
// print_r($connection->insert_id);

if (move_uploaded_file($_FILES['imagen']['tmp_name'], $target)) {
    $msg = "Image uploaded successfully";
}else{
    $msg = "Failed to upload image";
}

header("location:libro.php");

?>
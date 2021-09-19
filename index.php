<?php include('header.php'); ?>
<!-- // Login
// $user = isset($_SESSION['username'])?$_SESSION['username']:"";
// $my_Usr = "Usuario: ".  $user; -->


<!-- <div class="container"> -->

<!-- <td><img style="width:50px;" src="image/'.$row["imagen"].'"></td>    -->

<body>

    <div class="container">
    <!-- Login -->
    

        <div class="row" style="margin: 10px;text-align: center;padding: 19px;background: #458;color: white;">
            <h3>Libros</h3>
        </div>

        <div class="row" id="listalibros">

 <script>


let librosContainer = document.getElementById("listaLibros");
<?php
    include('db.php'); 
    $q = "SELECT isbn,titulo,autor,resena,editorial,idioma,paginas,total,imagen FROM libro";
    $response = $connection->query($q);

    if ($response->num_rows > 0) 
    {
        while($row = $response->fetch_assoc()) 
        {

      $titull = $row["titulo"];
      $autor = $row["autor"];
      $resena = $row["resena"];
      $imagen = $row["imagen"];

      $domh5node =  "Domh5Node".$row['isbn'];
      $DOMpNode =  "DOMpNode".$row['isbn'];
      $DOMh3Node =  "DOMh3Node".$row['isbn'];
      $DOMdivNode =  "DOMdivNode".$row['isbn'];
      $DOMimgNode =  "DOMimgNode".$row['isbn'];   
      $DOMcardNode =  "DOMcardNode".$row['isbn'];    
      $DOMcolNode =  "DOMcolNode".$row['isbn'];    

      echo "let $domh5node = document.createElement('h5');
            $domh5node.className = 'card-title';
            $domh5node.innerText = '$titull';
    
            let $DOMpNode = document.createElement('p');
            $DOMpNode.className = 'card-text';
            $DOMpNode.innerText = '$autor';
    
            let $DOMh3Node = document.createElement('h5');
            $DOMh3Node.className = 'card-resena';
            $DOMh3Node.innerText = '$resena';
    
            let $DOMdivNode = document.createElement('div');
            $DOMdivNode.className = 'card-body';
    
            $DOMdivNode.appendChild($domh5node);
            $DOMdivNode.appendChild($DOMpNode);
            $DOMdivNode.appendChild($DOMh3Node);
    
    
            let $DOMimgNode = document.createElement('img');
            $DOMimgNode.className = 'card-img-top';        
            $DOMimgNode.setAttribute('src', 'image/$imagen');
   
            $DOMimgNode.setAttribute('height', '190px');
            $DOMimgNode.setAttribute('width', '150px');
    
            let $DOMcardNode = document.createElement('div');
            $DOMcardNode.className = 'card';
            $DOMcardNode.style.width = '18rem;';
            $DOMcardNode.style.textAlign = 'center';
    
            $DOMcardNode.appendChild($DOMimgNode);
            $DOMcardNode.appendChild($DOMdivNode);
    
            let $DOMcolNode = document.createElement('div');
            $DOMcolNode.className = 'col-4'
            $DOMcolNode.style.marginBottom = '8px';
            $DOMcolNode.appendChild($DOMcardNode);
    
            listalibros.appendChild($DOMcolNode);";
    

        } 
       
    }        
?>


 </script>       

    </div>

    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <script src="js/script.js"></script> -->
    <!-- <script src="js/menu.js"></script> -->
    
    <?php include('footer.php') ?>

</body>





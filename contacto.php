<?php
include('header.php');
?>

<?php 
$usuario = isset($_SESSION['username'])?$_SESSION['username']:"Invitado";
?>

<body>
    <div class="container">
        <form id="contacform" action="contacto-valid.php" method="post" class="row g-3">
            <div class="row justify-content-center align-items-center">
                <h1 class="title" style="text-align: center;">Contactar a la Biblioteca</h1>
                <!-- <br> -->
                <div id="errorcontacto" class="alert alert-danger alert-dismissible fade show" role="alert">
                    Formulario no valido.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                <script>
                     document.getElementById('errorcontacto').style.display = 'none';
                </script>

                <div class="mb-3">
                    <input type="hidden" name="usuario" value="<?php echo $usuario;?>">
                </div>
                <div class="mb-3">
                    <label for="mail"   class="form-label">Correo Electronico del Cliente</label>
                    <input type="email" class="form-control" name="mail" id="mail" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="mensaje" class="form-label">Mensaje a la Biblioteca</label>
                    <textarea class="form-control" name="mensaje" id="mensaje" rows="3"></textarea>
                </div>

                <div class="col-12" style="text-align: center;">
                    <button type="submit" id="enviar" onclick="clickHandler2(event)" class="btn btn-primary">Enviar Mensaje</button>  
                 </div> 
            </div>
        </form>
    </div>
</body>



<?php include('footer.php'); ?>
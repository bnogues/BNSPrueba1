
<body>   
    <div class="usuario">
        <br>
    
        <div class="row justify-content-center align-items-center">
            <h1 class="title" style="text-align: center;">Usuario</h1>
            <br>
            <div id="errorusuario" class="alert alert-danger alert-dismissible fade show" role="alert">
                Formulario no valido.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <div class="col-6">
                <form class="row g-1">
                    <div class="col-md-12">
                        <label for="mail" class="form-label">Correo Electronico</label>
                        <input type="text" class="form-control" id="mail">
                    </div>
                    <div class="col-md-12">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="text" class="form-control" id="password">
                    </div>
                    <div class="col-12">
                        <label for="usuario" class="form-label">Usuario</label>
                        <textarea class="form-control" id="usuario"></textarea>
                    </div>
                    <div class="col-12">
                        <label for="nombre" class="form-label">Nombre</label>
                        <textarea class="form-control" id="nombre"></textarea>
                    </div>
                    <div class="col-12">
                        <label for="direccion" class="form-label">Direccion</label>
                        <textarea class="form-control" id="direccion"></textarea>
                    </div>                  
                    <div class="col-12">
                        <label for="telefono" class="form-label">Telefono</label>
                        <textarea class="form-control" id="telefono"></textarea>
                    </div>                       
     
                    <div class="col-12" style="text-align: center;">
                        <button type="submit" id="insertarusuario" class="btn btn-primary">Insertar</button>
                    </div>
                </form>
            </div>
        </div>
    
    
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <script src="../js/menu.js"></script>   
    <script src="../js/usuarios.js"></script>     -->
</body>
<!-- </html> -->
<?php include('header.php'); ?>

<body>
<section class="vh-100">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6 text-black">
      
              <div class="px-5 ms-xl-4">
                <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                <span class="h1 fw-bold mb-0">Biblioteca del Taller</span>
              </div>

              <br>
              <div id="errorlogin" class="alert alert-danger alert-dismissible fade show" role="alert">
                  Formulario no valido.
                  <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
              </div>

              <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
      
                <form style="width: 23rem;">
      
                  <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Ingreso</h3>
      
                  <div class="form-outline mb-4">
                    <input type="email" id="form2Example17" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Correo Electronico</label>
                  </div>
      
                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example27" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example27">Contraseña</label>
                  </div>
      
                  <div class="pt-1 mb-4">
                    <button type="button" id="EnviarLogin" class="btn btn-info btn-lg btn-block" >Ingreso</button>
                  </div>
      
                  <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Olvido su Constraseña?</a></p>
                  <p>No esta Registrado? <a href="../forms/usuarios.html" class="link-info">Registrese aqui</a></p>
      
                </form>
      
              </div>
      
            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
              <!-- <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/img3.jpg" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;"> -->
              <img src="../image/Login-Biblioteca.jpeg" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
            </div>  
          </div>
        </div>
      </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../js/menu.js"></script>
    <!-- <script src="../js/contacto.js"></script> -->
    <script src="../js/login.js"></script>
</body>



<script>
    document.getElementById('errorlogin').style.display = 'none';

function isValidEmail(email) {
    if (email.length > 0) {
        return true;
    }
    return false;
}

function isValidPassword(password) {
    // console.log(password.length);
    if (password.length > 0) {
        return true;
    }
    return false;
}

var Usuario ;
var Autorizado = 'NO';
//enviar contacto
var enviar = document.getElementById('EnviarLogin');
//let hayerror = 'NO'
enviar.addEventListener('click', function(e) {
    e.preventDefault();
    errorlogin.style.display = 'none'
    let mail = document.getElementById('form2Example17').value;
    let password = document.getElementById('form2Example27').value;

    console.log(mail);
    console.log(password);

    
    if (isValidEmail(mail) && isValidPassword(password)) 
    {
        errorlogin.style.display = 'none';   
        
        //  busco en el array si existe el mail y contraseña
        Autorizado = 'NO';
        console.log(usuarios.length);
        for (let index = 0; index < usuarios.length; index++) {
            let element = usuarios[index];
            console.log(element);
            if (element.mail === mail && element.password === password)
                  { Autorizado = 'SI'
                    Usuario = element.usuario };  
        }

console.log(Autorizado);
        if (Autorizado === 'SI') {
            // grabo variable de Session Autorizado
            sessionStorage.setItem('Usuarioconectado', JSON.stringify({user:Usuario}));


        }  else { 
            //  Mensaje de Error con Alert
               alert("No Existe Mail/Contraseña");   
        }

        // let SeMail = JSON.parse(sessionStorage.getItem('SesionMail')); 
        // let SePass = JSON.parse(sessionStorage.getItem('SesionPass'));
        
        // console.log(SeMail);
        // console.log(SePass);

    }
    else 
    { 
        errorlogin.style.display = 'block';
    }
    // return;
    
});
</script>

<?php include('footer.php'); ?>
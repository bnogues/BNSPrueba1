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



    }
    else 
    { 
        errorlogin.style.display = 'block';
    }
   
    



});
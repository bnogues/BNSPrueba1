document.getElementById('errorcontacto').style.display = 'none';

//MUESTRA USUARIO CONECTADO
//recuperar variable de ssecion
let usuario2 = JSON.parse(sessionStorage.getItem('Usuarioconectado')); 
console.log(usuario2.user);

// let usuarioconectado = document.getElementById("UsuarioConectado");
let DOMusrNode = document.createElement('p');
DOMusrNode.className = 'card-conectado';
//DOMusrNode.innerText = usuario2.user;
if (usuario2.user !== 'NINGUNO' )
    {DOMusrNode.innerText = 'Usuario Conectado: ' + usuario2.user;}
else 
    {  DOMusrNode.style.backgroundColor = "red";  
       DOMusrNode.innerText = 'Usuario Conectado:  ' ; }

UsuarioConectado.appendChild(DOMusrNode);

function isValidCorreo(correo) {
    if (correo.length > 0) {
        return true;
    }
    return false;
}

function isValidMensaje(mensaje) {
    console.log(mensaje.length);
    if (mensaje.length > 0) {
        return true;
    }
    return false;
}


//enviar contacto
var enviar = document.getElementById('enviar');
//let hayerror = 'NO'
enviar.addEventListener('click', function(e) {
    e.preventDefault();
    errorcontacto.style.display = 'none'
    let correo = document.getElementById('correo').value;
    let mensaje = document.getElementById('mensaje').value;


    
    if (isValidCorreo(correo) && isValidMensaje(mensaje)) 
    {
        errorcontacto.style.display = 'none';   
          //  mandon a la console
        console.log(correo);
        console.log(mensaje);
    }
    else 
    { 
        errorcontacto.style.display = 'block';
    }
    // return;
    
});
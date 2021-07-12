
document.getElementById('errorusuario').style.display = 'none';

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


//enviar contacto
var enviar = document.getElementById('insertarusuario');
//let hayerror = 'NO'
enviar.addEventListener('click', function(e) {
    e.preventDefault();
    errorusuario.style.display = 'none'
    let mail = document.getElementById('mail').value;
    let password = document.getElementById('password').value;

console.log(mail);
console.log(usuarios);

    
    if (isValidEmail(mail) && isValidPassword(password)) 
    {
        errorusuario.style.display = 'none';   

        //  inserto registro de usuario en el Array Usuarios
        // usuarios.push(   
        //          ('jose',
        //          'jos',
        //          'Pepe',
        //          'Jose Luis',
        //          'rrrr',
        //          '7896 ' ) );

       usuarios.push(         
           {    mail:     'jose',
                password: 'jojo',
                usuario:  'Pepe',
                nombre:   'Jose Luis',
                direccion: 'rrrrr',
                telefono: '789 '
            } );

console.log(usuarios);
    }
    else 
    { 
        errorusuario.style.display = 'block';
    }
    // return;
    



});
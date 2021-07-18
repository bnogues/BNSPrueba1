
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
// console.log(usuarios);

    
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
                telefono: '789 ',
            } );
// el elemento insertado con el push,  el Console lo muestar antes y despues del push
console.log(usuarios);


//recuperar array 
let usuariosobj = JSON.parse(sessionStorage.getItem('ListaUsuarios')); 
//console.log(usuarios3);

//You can convert its values to an array by doing:  Pagina 136 Manual Javascript
var usuarios3 = Object.keys(usuariosobj)
.map(function(key) { return usuariosobj[key]; });

console.log(usuarios3);

usuarios3.push(         
    {    mail:     'jose',
         password: 'jojo',
         usuario:  'Pepe',
         nombre:   'Jose Luis',
         direccion: 'rrrrr',
         telefono: '789 ',
     } );
console.log(usuarios3);

//volver a grabar el Array
//usuario2 = usuarios;
//console.log(usuarios2);
sessionStorage.setItem('ListaUsuarios', JSON.stringify({usuarios3}));

    }
    else 
    { 
        errorusuario.style.display = 'block';
    }
    // return;
    



});
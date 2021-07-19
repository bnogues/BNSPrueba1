
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
    let v_mail      = document.getElementById('mail').value;
    let v_password  = document.getElementById('password').value;
    let v_usuario   = document.getElementById('usuario').value;
    let v_nombre    = document.getElementById('nombre').value;
    let v_direccion = document.getElementById('direccion').value;
    let v_telefono  = document.getElementById('telefono').value;

console.log(v_mail);
// console.log(usuarios);

    
    if (isValidEmail(v_mail) && isValidPassword(v_password)) 
    {
        errorusuario.style.display = 'none';   

// Inserto Estaticamente Elemento en Arrray "usuarios"   
        // usuarios.push(         
        //    {    mail:     'jose',
        //         password: 'jojo',
        //         usuario:  'Pepe',
        //         nombre:   'Jose Luis',
        //         direccion: 'rrrrr',
        //         telefono: '789 ',
        //     } );

            usuarios.push(         
                {    mail:      v_mail,
                     password:  v_password,
                     usuario:   v_usuario,
                     nombre:    v_nombre,
                     direccion: v_direccion,
                     telefono:  v_telefono,
                 } );
     


// el elemento insertado con el push,  el Console lo muestar antes y despues del push
console.log(usuarios);

sessionStorage.ListaUsuarios4 = usuarios;

// //recuperar array 
// let usuariosobj = JSON.parse(sessionStorage.getItem('ListaUsuarios')); 
// //console.log(usuarios3);

// //You can convert its values to an array by doing:  Pagina 136 Manual Javascript
// var usuarios3 = Object.keys(usuariosobj)
// .map(function(key) { return usuariosobj[key]; });


// Prueba 100
let usuariosobj = JSON.parse(sessionStorage.getItem('ListaUsuarios')); 
usuarios3 = usuariosobj;
console.log(usuarios3);

// Inserto Estaticamente Elemento en Arrray "usuarios3"   
// usuarios3.push(         
//     {    mail:     'jose',
//          password: 'jojo',
//          usuario:  'Pepe',
//          nombre:   'Jose Luis',
//          direccion: 'rrrrr',
//          telefono: '789 ',
//      } );
// console.log(usuarios3);

usuarios3.push(         
    {    mail:      v_mail,
         password:  v_password,
         usuario:   v_usuario,
         nombre:    v_nombre,
         direccion: v_direccion,
         telefono:  v_telefono,
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
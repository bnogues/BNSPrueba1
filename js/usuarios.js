
document.getElementById('errorusuario').style.display = 'none';

function isValidEmail(email) {
    if (email.length > 0) {
        return true;
    }
    return false;
}

function isValidPassword(password) {
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

    
    if (isValidEmail(v_mail) && isValidPassword(v_password)) 
    {
            errorusuario.style.display = 'none';   

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



            //INSERTAR EN ARRAY DE SESSIONSTORAGE
            //*********************************** */
            //RECUPERAR EL ARRAY QUE GUARDE EN SESSIONSTORAGE  'ListaUsuarios'
            let usuariosobj = JSON.parse(sessionStorage.getItem('ListaUsuarios')); 
            console.log(usuariosobj);


            // Inserto Estaticamente Elemento en Arrray "usuariosobj"   
            // usuariosobj.push(         
            //     {    mail:     'jose',
            //          password: 'jojo',
            //          usuario:  'Pepe',
            //          nombre:   'Jose Luis',
            //          direccion: 'rrrrr',
            //          telefono: '789 ',
            //      } );
            // console.log(usuarios3);

            // Inserto Dinamicamente Elemento en Array "usuariosobj"
            // usuariosobj.push(         
            //     {    mail:      v_mail,
            //         password:  v_password,
            //         usuario:   v_usuario,
            //         nombre:    v_nombre,
            //         direccion: v_direccion,
            //         telefono:  v_telefono,
            //     } );
            // console.log(usuariosobj);     


    }
    else 
    { 
        errorusuario.style.display = 'block';
    }
    // return;
    



});
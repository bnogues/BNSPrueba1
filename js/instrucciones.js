//MUESTRA USUARIO CONECTADO
//recuperar variable de ssecion
let usuario2 = JSON.parse(sessionStorage.getItem('Usuarioconectado')); 
console.log(usuario2.user);

// let usuarioconectado = document.getElementById("UsuarioConectado");
let DOMusrNode = document.createElement('p');
DOMusrNode.className = 'card-conectado';
if (usuario2.user !== 'NINGUNO' )
    {DOMusrNode.innerText = 'Usuario Conectado: ' + usuario2.user;}
else 
    {  DOMusrNode.style.backgroundColor = "red";  
       DOMusrNode.innerText = 'Usuario Conectado:  ' ; }

UsuarioConectado.appendChild(DOMusrNode);

// if (usuario2.user === 'NINGUNO' )
// { alert("Para Ingresar un Libro debe conectarse al Sistema"); 
//   window.history.back();
// }
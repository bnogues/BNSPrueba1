
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

if (usuario2.user === 'NINGUNO' )
{ alert("Para Ingresar un Libro debe conectarse al Sistema"); 
  window.history.back();
}


for (let index = 0; index < usuarios.length; index++) {
    let element = usuarios[index];
    // console.log(element);

    let DOMth0Node = document.createElement('th');
    DOMth0Node.className = 'row';
    DOMth0Node.innerText = index+1;

    let DOMtd1Node = document.createElement('td');
    DOMtd1Node.className = 'mail';
    DOMtd1Node.innerText = element.mail;

    let DOMtd2Node = document.createElement('td');
    DOMtd2Node.className = 'password';
    DOMtd2Node.innerText = element.password;

    let DOMtd3Node = document.createElement('td');
    DOMtd3Node.className = 'usuario';
    DOMtd3Node.innerText = element.usuario;

    let DOMtd4Node = document.createElement('td');
    DOMtd4Node.className = 'nombre';
    DOMtd4Node.className = element.nombre;

    let DOMtd5Node = document.createElement('td');
    DOMtd5Node.className = 'direccion';
    DOMtd5Node.className = element.direccion;

    let DOMtd6Node = document.createElement('td');
    DOMtd6Node.className = 'telefono';
    DOMtd6Node.className = element.telefono;

    let DOMtrNode = document.createElement('tr');
    // DOMtrNode.className = element.paginas;
   
    DOMtrNode.appendChild(DOMth0Node);
    DOMtrNode.appendChild(DOMtd1Node);
    DOMtrNode.appendChild(DOMtd2Node);
    DOMtrNode.appendChild(DOMtd3Node);
    DOMtrNode.appendChild(DOMtd4Node);
    DOMtrNode.appendChild(DOMtd5Node);
    DOMtrNode.appendChild(DOMtd6Node);

    cuerpousuarios.appendChild(DOMtrNode);

}
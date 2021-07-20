var menuData = [{
    aLinkName: "Inicio",
    aLinkClass: "nav-link active",
    // aLinkHref: "../index.html",
    aLinkHref: "C:/PHP/Prueba1/BNSPrueba1/index.html",
    liClass: "nav-item"
},
// {
//     aLinkName: "Preguntas Frecuentes",
//     aLinkClass: "nav-link",
//     aLinkHref: "#",
//     liClass: "nav-item"
// },
{
    aLinkName: "Contacto",
    aLinkClass: "nav-link",
    aLinkHref: "C:/PHP/Prueba1/BNSPrueba1/forms/contacto.html",
    liClass: "nav-item"
},
{
    aLinkName: "Libros Nuevos",
    aLinkClass: "nav-link",
    // aLinkHref: "forms/libro.html",
    aLinkHref: "C:/PHP/Prueba1/BNSPrueba1/forms/libro.html",    
    liClass: "nav-item"
},
{
    aLinkName: "Reporte Libros",
    aLinkClass: "nav-link",
    // aLinkHref: "forms/reporte.html",
    aLinkHref: "C:/PHP/Prueba1/BNSPrueba1/forms/reporte.html",
    liClass: "nav-item"
},
{
    aLinkName: "Reporte Usuarios",
    aLinkClass: "nav-link",
    // aLinkHref: "forms/reporteusuarios.html",
    aLinkHref: "C:/PHP/Prueba1/BNSPrueba1/forms/reporteusuarios.html",
    liClass: "nav-item"
},
{
    aLinkName: "Login",
    aLinkClass: "nav-link",
//    aLinkHref: "forms/login.html",
    aLinkHref: "C:/PHP/Prueba1/BNSPrueba1/forms/login.html",
    liClass: "nav-item"
},
{
    aLinkName: "Logout",
    aLinkClass: "nav-link",
    // aLinkHref: "forms/logout.html",
    aLinkHref: "C:/PHP/Prueba1/BNSPrueba1/forms/logout.html",
    liClass: "nav-item"
},
{
    aLinkName: "Instrucciones",
    aLinkClass: "nav-link",
    // aLinkHref: "forms/Instrucciones.html",
    aLinkHref: "C:/PHP/Prueba1/BNSPrueba1/forms/Instrucciones.html",
    liClass: "nav-item"
}
]

function generadorMenu(data, position) {
let contenedorMenu = document.getElementById(position);
for (let index = 0; index < data.length; index++) {
    let DOMaNode = document.createElement('a');
    DOMaNode.className = data[index].aLinkClass;
    DOMaNode.setAttribute('href', data[index].aLinkHref);
    DOMaNode.innerText = data[index].aLinkName;

    let DOMliNode = document.createElement('li');
    DOMliNode.className = data[index].liClass;
    DOMliNode.appendChild(DOMaNode);
    contenedorMenu.appendChild(DOMliNode);
}
}
generadorMenu(menuData, "mainMenu");




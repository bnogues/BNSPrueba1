const libros = [{
    isbn:   001,
    titulo: 'EL OSCURO ADIÓS DE TERESA LANZA',
    autor:  'Toni Hill',
    resena: 'El suicidio de una joven inmigrante altera las vidas de cinco mujeres y sus familias en un idílico y acomodado barrio residencial. Una novela intrigante y turbadora sobre la hipocresía, la amistad, la inmigración y los privilegios, escrita con pulso brillante por uno de los autores más renovadores del genero negro en España. Parece un viernes de invierno cualquiera; uno de tantos. Lourdes Ros, la carismática editora de una prestigiosa editorial, se prepara para recibir a sus mejores amigas, a las que ha invitado a cenar: cuatro mujeres triunfadoras que intentan conjugar su reconocida vida profesional con las preocupaciones derivadas de la edad, la pareja, los hijos o la perdida del estatus social.',
    editorial:  'Hispana',
    idioma:  'Español',
    paginas:  400,
    // imagen: ' '
    imagen:  'data:image/ISBN-001-el-oscuro-adios-de-teresa-lanza.jpeg'
},
{
    isbn:   002,
    titulo: 'ARSENE LUPIN CABALLERO LADRÓN',
    autor:  'LEBLANC, MAURICE',
    resena: 'ARSÈNE LUPIN, CABALLERO LADRÓN. LAS HISTORIAS EN LAS QUE SE BASA LA NUEVA SERIE DE TELEVISIÓN DE NETFLIX. LA SAGA LITERERARIA EN LA QUE SE INSPIRA LUPIN.',
    editorial:  'Hispana',
    idioma:  'Español',
    paginas:  400,
    imagen:   ''
    // imagen:  'data:image/ISBN-002 - ARSENE LUPIN CABALLERO LADRÓN.jpeg'
},
{
    isbn:   003,
    titulo: 'MEAL PREP - SI NOS ORGANIZAMOS COMEMOS TODOS',
    autor:  'Paulina Cocina',
    resena: 'Hace un tiempo decidí filmar videos de cómo preparar comida para guardar y tener a mano cuando no tengo tiempo o ganas de cocinar. Este “arte” de la organización de comidas se llama meal prep y lo practico hace años. Así diseñé “sesiones” de recetas que balancean practicidad, salud y sabor: de carnes, de panes y pizzas, de viandas, de legumbres y hasta cómo “adelantar pasos” para una picada o cumpleaños. Meal prep es un libro práctico, lleno de datos y tips que fui recolectando por años, como guardar pesto en cubeteras o congelar las tartas ya armadas.',
    editorial:  'Hispana',
    idioma:  'Español',
    paginas:  400,
    imagen:   ''
    // imagen:  'data:image/ISBN-003 - MEAL PREP - SI NOS ORGANIZAMOS COMEMOS TODOS.jpeg'
},
{
    isbn:   004,
    titulo: 'SIETE FUEGOS',
    autor:  'Francis Mallmann',
    resena: 'El chef más genial de Argentina comparte la esencia de su cocina de fuegos. Con pasión y autenticidad, despliega las recetas y las historias que recorren su larga trayectoria como cocinero, dueño de restaurantes y estrella de la televisión en toda Latinoamérica. El libro definitivo sobre su cocina argentina. Francis Mallmann es, sin duda, el chef más genial de la Argentina. Es también, desde luego, el más famoso, el más original y el de mayor éxito, tanto por su trayectoria como cocinero y dueño de restaurantes como por los premios que ha recibido. Uno de ellos, el Gran Premio del Arte y la Ciencia de la Cocina (que entrega la Academia Internacional de Gastronomía de París), le fue otorgado en 1996 (por primera vez a un chef no europeo) por un jurado conformado por los mejores cocineros del mundo.',
    editorial:  'Hispana',
    idioma:  'Español',
    paginas:  400,
    imagen:   ''
    // imagen:  'data:image/ISBN-004 - SIETE FUEGOS.jpeg'
},
{
    isbn:   005,
    titulo: 'UNA AVENTURA DE MEDITACION VIPASSANA',
    autor:  'Tato Lopez',
    resena: 'El curso ha finalizado y observo la sala de meditación vacía. Diez días atrás entré aquí sin tener idea de lo que estaba haciendo. Me cuesta creer todo lo que transité sin moverme de este lugar. Meditar no resultó ser una actividad vegetal donde experimentar estados extrasensoriales en un mundo etéreo, y sí una de autodisciplina y autoobservación. La vipassana puede ser un atlas de la mente y la estructura física, una brújula para orientarnos en el caos del mundo interior, un mapa de ruta sobre el cual tomar decisiones',
    editorial:  'Hispana',
    idioma:  'Español',
    paginas:  400,
    imagen:   ''
    // imagen:  'data:image/ISBN-005  - UNA AVENTURA DE MEDITACION VIPASSANA.jpeg'
}
];

var usuarios = [
    {   mail:     'berna',
        password: 'berna',
        usuario:  'Bernardo',
        nombre:   'Bernardo Nogues',
        direccion: 'sssss',
        telefono: '0123456 '
     },
     {  mail:   'luis',
        password: 'luis',
        usuario:  'Luishi',
        nombre: '',
        direccion: '',
        telefono: ' '
     }
    ];

    // const prestamos = [{
    //     isbn:   001,
    //     user:      ,
    //     fechaprestamo:     ,
    //     fechadevolver:   ,  
    // } ];

    // const devoluciones = [{
    //     isbn:   001,
    //     user:      ,
    //     fechadevolucion:   ,  
    // } ];



// var Autorizado = 'NO';

// // grabo variable de Session Autorizado
// sessionStorage.setItem('SesionMail', JSON.stringify('umail'.value));
// sessionStorage.setItem('SesionPass', JSON.stringify('upass'.value));


function generarLibros(data) {
    let soloproductos = data;

    generadorGridCard(soloproductos, "listaLibros")
}

function generadorGridCard(data, position) {
    let productosContainer = document.getElementById(position);

    data.forEach(element => {
        let DOMh5Node = document.createElement('h5');
        DOMh5Node.className = 'card-title';
        DOMh5Node.innerText = element.titulo;

        let DOMpNode = document.createElement('p');
        DOMpNode.className = 'card-text';
        DOMpNode.innerText = element.autor;

        let DOMh3Node = document.createElement('h15');
        DOMh3Node.className = 'card-resena';
        DOMh3Node.innerText = element.resena;

        // let DOMaNode = document.createElement('a');
        // DOMaNode.className = 'btn btn-danger';
        // DOMaNode.innerText = 'Añadir al carrito';
        // DOMaNode.setAttribute('dataset', element.espn);

        // let DOMaAumentarNode = document.createElement('a');
        // DOMaAumentarNode.className = 'btn btn-info btn-sm';
        // DOMaAumentarNode.innerText = '+';

        // let DOMpCantidadNode = document.createElement('p');
        //  //DOMpCantidadNode.className = 'card-text';
        // DOMpCantidadNode.innerText = "1";
        // DOMpCantidadNode.style.padding = '5px';
        // DOMpCantidadNode.style.fontWeight = '700';
        // DOMpCantidadNode.style.margin = '5px';
        
        
        // let DOMaDisminuirNode = document.createElement('a');
        // DOMaDisminuirNode.className = 'btn btn-danger btn-sm';
        // DOMaDisminuirNode.innerText = '-';

        // let DOMdivcantidadNode = document.createElement('div');
        // DOMdivcantidadNode.className = 'cantidad';
        // DOMdivcantidadNode.style.display = 'flex';
        // DOMdivcantidadNode.style.alignItems = 'baseline';
        // DOMdivcantidadNode.style.justifyContent = 'center';
        // DOMdivcantidadNode.appendChild(DOMaDisminuirNode);
        // DOMdivcantidadNode.appendChild(DOMpCantidadNode);
        // DOMdivcantidadNode.appendChild(DOMaAumentarNode);

        let DOMdivNode = document.createElement('div');
        DOMdivNode.className = 'card-body';

        DOMdivNode.appendChild(DOMh5Node);
        DOMdivNode.appendChild(DOMpNode);
        DOMdivNode.appendChild(DOMh3Node);
        // DOMdivNode.appendChild(DOMdivcantidadNode);
        // DOMdivNode.appendChild(DOMaNode);

        let DOMimgNode = document.createElement('img');
        DOMimgNode.className = 'card-img-top';
        DOMimgNode.setAttribute('src', element.imagen);
        DOMimgNode.setAttribute('height', "190px");
        DOMimgNode.setAttribute('width', "150px");

        let DOMcardNode = document.createElement('div');
        DOMcardNode.className = 'card';
        DOMcardNode.style.width = '18rem;';
        DOMcardNode.style.textAlign = 'center';

        DOMcardNode.appendChild(DOMimgNode);
        DOMcardNode.appendChild(DOMdivNode);

        let DOMcolNode = document.createElement('div');
        DOMcolNode.className = "col-4"
        DOMcolNode.style.marginBottom = "8px";
        DOMcolNode.appendChild(DOMcardNode);

        listalibros.appendChild(DOMcolNode);

    });

}

generarLibros(libros);
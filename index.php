<?php
include('header.php');
?>

<!-- <div class="container"> -->

<!-- <td><img style="width:50px;" src="image/'.$row["imagen"].'"></td>    -->

<body>

    <div class="container">
        <div class="row" style="margin: 10px;text-align: center;padding: 19px;background: #458;color: white;">
            <h3>Libros</h3>
        </div>

        <div class="row" id="listalibros">

 <script>

const libros = [{
    isbn:   001,
    titulo: 'EL OSCURO ADIÓS DE TERESA LANZA',
    autor:  'Toni Hill',
    resena: 'El suicidio de una joven inmigrante altera las vidas de cinco mujeres y sus familias en un idílico y acomodado barrio residencial. Una novela intrigante y turbadora sobre la hipocresía, la amistad, la inmigración y los privilegios, escrita con pulso brillante por uno de los autores más renovadores del genero negro en España. Parece un viernes de invierno cualquiera; uno de tantos. Lourdes Ros, la carismática editora de una prestigiosa editorial, se prepara para recibir a sus mejores amigas, a las que ha invitado a cenar: cuatro mujeres triunfadoras que intentan conjugar su reconocida vida profesional con las preocupaciones derivadas de la edad, la pareja, los hijos o la perdida del estatus social.',
    editorial:  'Hispana',
    idioma:  'Español',
    paginas:  400,
    imagen:  '../BNSPrueba1/image/ISBN-001.jpg'
},
{
    isbn:   002,
    titulo: 'ARSENE LUPIN CABALLERO LADRÓN',
    autor:  'LEBLANC, MAURICE',
    resena: 'ARSÈNE LUPIN, CABALLERO LADRÓN. LAS HISTORIAS EN LAS QUE SE BASA LA NUEVA SERIE DE TELEVISIÓN DE NETFLIX. LA SAGA LITERERARIA EN LA QUE SE INSPIRA LUPIN.',
    editorial:  'Ayui',
    idioma:  'Ingles',
    paginas:  300,
    imagen:  '../BNSPrueba1/image/ISBN-002.jpg'
},
{
    isbn:   003,
    titulo: 'MEAL PREP - SI NOS ORGANIZAMOS COMEMOS TODOS',
    autor:  'Paulina Cocina',
    resena: 'Hace un tiempo decidí filmar videos de cómo preparar comida para guardar y tener a mano cuando no tengo tiempo o ganas de cocinar. Este “arte” de la organización de comidas se llama meal prep y lo practico hace años. Así diseñé “sesiones” de recetas que balancean practicidad, salud y sabor: de carnes, de panes y pizzas, de viandas, de legumbres y hasta cómo “adelantar pasos” para una picada o cumpleaños. Meal prep es un libro práctico, lleno de datos y tips que fui recolectando por años, como guardar pesto en cubeteras o congelar las tartas ya armadas.',
    editorial:  'Monteverde',
    idioma:  'Frances',
    paginas:  280,
    imagen:  '../BNSPrueba1/image/ISBN-003.jpg'
},
{
    isbn:   004,
    titulo: 'SIETE FUEGOS',
    autor:  'Francis Mallmann',
    resena: 'El chef más genial de Argentina comparte la esencia de su cocina de fuegos. Con pasión y autenticidad, despliega las recetas y las historias que recorren su larga trayectoria como cocinero, dueño de restaurantes y estrella de la televisión en toda Latinoamérica. El libro definitivo sobre su cocina argentina. Francis Mallmann es, sin duda, el chef más genial de la Argentina. Es también, desde luego, el más famoso, el más original y el de mayor éxito, tanto por su trayectoria como cocinero y dueño de restaurantes como por los premios que ha recibido. Uno de ellos, el Gran Premio del Arte y la Ciencia de la Cocina (que entrega la Academia Internacional de Gastronomía de París), le fue otorgado en 1996 (por primera vez a un chef no europeo) por un jurado conformado por los mejores cocineros del mundo.',
    editorial:  'Oceano',
    idioma:  'Italiano',
    paginas:  630,
    imagen:  '../BNSPrueba1/image/ISBN-004.jpeg'
},
{
    isbn:   005,
    titulo: 'UNA AVENTURA DE MEDITACION VIPASSANA',
    autor:  'Tato Lopez',
    resena: 'El curso ha finalizado y observo la sala de meditación vacía. Diez días atrás entré aquí sin tener idea de lo que estaba haciendo. Me cuesta creer todo lo que transité sin moverme de este lugar. Meditar no resultó ser una actividad vegetal donde experimentar estados extrasensoriales en un mundo etéreo, y sí una de autodisciplina y autoobservación. La vipassana puede ser un atlas de la mente y la estructura física, una brújula para orientarnos en el caos del mundo interior, un mapa de ruta sobre el cual tomar decisiones',
    editorial:  'Atlantica',
    idioma:  'Español',
    paginas:  520,
    imagen:  '../BNSPrueba1/image/ISBN-005.jpeg'
 }
];

// <?php
//     include('db.php'); 
//     $q = "SELECT isbn,titulo,autor,resena,editorial,idioma,paginas,total,imagen FROM libro";
//     $response = $connection->query($q);

//     if ($response->num_rows > 0) {
//         while($row = $response->fetch_assoc()) {
//             unlibro = {
//               isbn:   '.$row["isbn"].',
//               titulo: '.$row["titulo"].',
//               autor:  '.$row["autor"].',
//               resena: '.$row["resena"].',
//               editorial:  '.$row["editorial"].',
//               idioma:  '.$row["idioma"].',
//               paginas:  '.$row["paginas"].',
//               imagen:  '.$row["imagen"].' 
//             } ;
//             // libros = libros + unlibro
//         } 
//       }       
// ?>

function generarLibros(data) {
    let soloproductos = data;

    generadorGridCard(soloproductos, "listaLibros")
}

function generadorGridCard(data, position) {
    let librosContainer = document.getElementById(position);

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

        let DOMdivNode = document.createElement('div');
        DOMdivNode.className = 'card-body';

        DOMdivNode.appendChild(DOMh5Node);
        DOMdivNode.appendChild(DOMpNode);
        DOMdivNode.appendChild(DOMh3Node);


        let DOMimgNode = document.createElement('img');
        DOMimgNode.className = 'card-img-top';
        
        DOMimgNode.setAttribute('src', "../BNSPrueba1/"+element.imagen);

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

 </script>       

        </div>

    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="js/menu.js"></script>
        
</body>


  <!-- Flexbox container for aligning the toasts -->
    <!-- <a href="crear.php" class="btn btn-primary">Crear</a>
    <a id="test" class="btn btn-primary">Sweet</a>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Mail</th>
      <th scope="col">Telefono</th>
      <th scope="col">Usuario</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>

  </tbody>
</table> -->

  <!-- </div> -->

<?php include('footer.php') ?>
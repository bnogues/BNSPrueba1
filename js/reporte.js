{/* <tr id="linea">
<th scope="row">1</th>
<td id="colisbn"></td>
<td id="coltitulo"></td>
<td id="colautor"></td>
<td id="coleditorial"></td>
<td id="colidioma"></td>
<td id="colpaginas"></td>
<td id="colejemplares"></td>
<td id="coldisponible"></td> */}

for (let index = 0; index < libros.length; index++) {
    let element = libros[index];
    // console.log(element);

    let DOMth0Node = document.createElement('th');
    DOMth0Node.className = 'row';
    DOMth0Node.innerText = index+1;

    let DOMtd1Node = document.createElement('td');
    DOMtd1Node.className = 'isbn';
    DOMtd1Node.innerText = element.isbn;

    let DOMtd2Node = document.createElement('td');
    DOMtd2Node.className = 'titulo';
    DOMtd2Node.innerText = element.titulo;

    let DOMtd3Node = document.createElement('td');
    DOMtd3Node.className = 'autor';
    DOMtd3Node.innerText = element.autor;

    let DOMtd4Node = document.createElement('td');
    DOMtd4Node.className = 'editorial';
    DOMtd4Node.className = element.editorial;

    let DOMtd5Node = document.createElement('td');
    DOMtd5Node.className = element.idioma;

    let DOMtd6Node = document.createElement('td');
    DOMtd6Node.className = element.paginas;

    let DOMtrNode = document.createElement('tr');
    // DOMtrNode.className = element.paginas;
   
    DOMtrNode.appendChild(DOMth0Node);
    DOMtrNode.appendChild(DOMtd1Node);
    DOMtrNode.appendChild(DOMtd2Node);
    DOMtrNode.appendChild(DOMtd3Node);
    DOMtrNode.appendChild(DOMtd4Node);
    DOMtrNode.appendChild(DOMtd5Node);
    DOMtrNode.appendChild(DOMtd6Node);

    cuerpo.appendChild(DOMtrNode);

}
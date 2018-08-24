"use strict";


// --- contenedor-componentes
const contenedorComponenetes = document.getElementById('contenedor-componentes');


// --- Eventos

let bannerButton = document.getElementById('banner-button');
bannerButton.addEventListener('click', function(){
    let inputBanner = document.getElementById('banner-input');
    inputBanner.click();
});

function mostarBanner(src, destino) {
    var fr = new FileReader();        
    fr.onload = function(e) {
        destino.src = this.result; 
    };
    src.addEventListener("change", function() {           
      fr.readAsDataURL(src.files[0]);
    });
  }
  
var src = document.getElementById("banner-input");
var destino = document.getElementById("banner-img");
mostarBanner(src, destino);

let agregarEncabezado = document.getElementById('encabezado-click');
agregarEncabezado.addEventListener('click', function(){
    crearContenedores('encabezado');
});

let agregarParrafo = document.getElementById('parrafo-click');
agregarParrafo.addEventListener('click', function(){
    crearContenedores('parrafo');
});

let agregarImagen = document.getElementById('imagen-click');
agregarImagen.addEventListener('click', function(){
    crearContenedores('imagen');
});

let agregarEnlaces = document.getElementById('enlaces-click');
agregarEnlaces.addEventListener('click', function(){
    crearContenedores('enlaces');
});

// --- End Eventos

function crearContenedores(componente){

    let contenedor = document.createElement('div');
    contenedor.classList.add(componente);
    contenedor.classList.add('column');
    contenedor.id = componente;
    contenedorComponenetes.appendChild(contenedor);

    // --- white-space-32
    const firstWhiteSpace = document.createElement('div');
    firstWhiteSpace.classList.add('white-space-32');
    contenedor.appendChild(firstWhiteSpace);

    // --- title-component .div
    const titleComponentDiv = document.createElement('div');
    titleComponentDiv.classList.add('title-component');
    titleComponentDiv.classList.add('align-center');
    contenedor.appendChild(titleComponentDiv);

    // --- title-component h3
    const titleComponent = document.createElement('h3');
    titleComponent.textContent = componente;
    titleComponentDiv.appendChild(titleComponent);

    // --- delete button
    const deleteComponent = document.createElement('a');
    deleteComponent.classList.add('btn');
    deleteComponent.id = 'delete-component'
    deleteComponent.textContent = 'ELIMINAR';
    deleteComponent.onclick = function() {
        const mainNode = this.parentNode.parentNode.parentNode;
        const currentNode = this.parentNode.parentNode;
        mainNode.removeChild(currentNode);
    };
    titleComponentDiv.appendChild(deleteComponent);

    // --- white-space-8
    let whiteSpace = document.createElement('div');
    whiteSpace.classList.add('white-space-8');
    contenedor.appendChild(whiteSpace);

    switch (componente) {
        case 'encabezado':
            crearEncabezado(contenedor);
            break;
        case 'parrafo':
            crearParrafo(contenedor);
            break;
        case 'imagen':
            crearImagen(contenedor);
            break;
        case 'enlaces':
            crearEnlaces(contenedor);
            break;
        default:
    }
}

function crearEncabezado(contenedor){

    // --- sheet-title
    let sheetTitle = document.createElement('div');
    sheetTitle.classList.add('sheet-title');
    contenedor.appendChild(sheetTitle);    

    // --- input
    let input = document.createElement('input');
    input.classList.add('input-ghost');
    input.classList.add('input-ghost-title');
    input.setAttribute('type', 'text');
    input.setAttribute('name', 'encabezado');
    input.setAttribute('maxlength', '60');
    input.setAttribute('placeholder', 'Encabezado de texto (60 carácteres)');
    contenedor.appendChild(input);
}

function crearParrafo(contenedor){

    // --- sheet-title
    let sheetText = document.createElement('div');
    sheetText.classList.add('sheet-text');
    contenedor.appendChild(sheetText);

    // --- textarea
    let textarea = document.createElement('textarea');
    textarea.classList.add('input-ghost');
    textarea.classList.add('input-ghost-parrafo');
    textarea.setAttribute('name', 'parrafo');
    textarea.setAttribute('maxlength', '800');
    textarea.setAttribute('rows', '7');
    textarea.setAttribute('placeholder', 'Parrafo de texto (800 carácteres)');
    contenedor.appendChild(textarea);
}

function crearImagen(contenedor){
    // --- single-img
    let singleImage = document.createElement('div');
    singleImage.classList.add('single-img');
    singleImage.classList.add('bordered-dotted');
    singleImage.classList.add('responsive-img');
    contenedor.appendChild(singleImage);

    // --- Img 
    let imagen = document.createElement('img');
    imagen.id = 'imagenUnica';
    imagen.setAttribute('src','');
    imagen.setAttribute('alt', 'Imagen única');
    singleImage.appendChild(imagen);

    // --- trigger hidden input
    let elegirImagen = document.createElement('p');
    elegirImagen.id = 'elegirImagen';
    elegirImagen.classList.add('text-center');
    elegirImagen.classList.add('info-sheet');    
    elegirImagen.textContent = 'Click para cambiar/elegir imagen';
    contenedor.appendChild(elegirImagen);

    // --- hidden input
    let inputImagen = document.createElement('input');
    inputImagen.id = 'imagenInput';
    inputImagen.setAttribute('type', 'file');
    inputImagen.setAttribute('name','imagenUnica');
    inputImagen.classList.add('hidden');
    contenedor.appendChild(inputImagen);
    elegirImagen.addEventListener('click', function(){
        inputImagen.click();
    });

    function mostrarImagen(src, destino) {
        var fr = new FileReader();        
        fr.onload = function(e) {
            destino.src = this.result; 
        };
        src.addEventListener("change", function() {           
          fr.readAsDataURL(src.files[0]);
        });
      }
      
      var src = document.getElementById("imagenInput");
      var destino = document.getElementById("imagenUnica");
      mostrarImagen(src, destino);
}

function crearEnlaces(contenedor) {    

    for (let index = 1; index <= 3; index++) {

        // --- sheet-title
        let sheetText = document.createElement('div');
        sheetText.classList.add('sheet-text');
        contenedor.appendChild(sheetText);

        let numberEnlaces = document.createElement('p');
        numberEnlaces.textContent = index + '.-';
        numberEnlaces.classList.add('info-shet');
        sheetText.appendChild(numberEnlaces);

        let inputEnlaces = document.createElement('input');
        inputEnlaces.classList.add('input-ghost');
        inputEnlaces.classList.add('input-ghost-list');
        inputEnlaces.setAttribute('type', 'text');
        inputEnlaces.setAttribute('name', 'enlace' + index);
        inputEnlaces.setAttribute('maxlength', '50');
        inputEnlaces.setAttribute('placeholder', 'URL');
        sheetText.appendChild(inputEnlaces);

        let whiteSpace = document.createElement('div');
        whiteSpace.classList.add('white-space-8');
        contenedor.appendChild(whiteSpace);
    }    

}



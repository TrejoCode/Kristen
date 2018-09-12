
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

let agregarVideo = document.getElementById('video-click');
agregarVideo.addEventListener('click', function(){
    crearContenedores('video');
});

let agregarGaleria = document.getElementById('gallery-click');
agregarGaleria.addEventListener('click', function(){
    crearContenedores('galeria');
});

let agregarLista = document.getElementById('lista-click');
agregarLista.addEventListener('click', function(){
    crearContenedores('lista');
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
        case 'video':
            crearVideo(contenedor);
            break;
        case 'galeria':
            crearGaleria(contenedor);
            break;
        case 'lista':
            crearLista(contenedor);
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

        // --- sheet-text
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

function crearVideo(contenedor) {
    
    // --- sheet-text
    let sheetText = document.createElement('div');
    sheetText.classList.add('sheet-text');
    contenedor.appendChild(sheetText);

    // --- input
    let inputVideo = document.createElement('input');
    inputVideo.id = 'inputVideo';
    inputVideo.classList.add('input-ghost');    
    inputVideo.setAttribute('type', 'text');
    inputVideo.setAttribute('name', 'videoURL');    
    inputVideo.setAttribute('placeholder', 'URL del video youtube');
    sheetText.appendChild(inputVideo);

    // --- valid button
    let validButtton = document.createElement('p');
    validButtton.id = 'btn-validar';    
    validButtton.classList.add('btn');
    validButtton.textContent = 'VALIDAR';
    sheetText.appendChild(validButtton);

    validButtton.addEventListener('click', function(){
        if(isYoutube(inputVideo.value) == false || isYoutube(inputVideo.value) == null) {
            alert("URL erróneo");
        } else {
            alert("Video Correcto: " + isYoutube(inputVideo.value));
        }
    });

    function isYoutube(getURL){
        if(typeof getURL!=='string') return false;
        var newA = document.createElement('A');
        newA.href = getURL;
        var host = newA.hostname;
        var srch = newA.search;
        var path = newA.pathname;
        
        if(host.search(/youtube\.com|youtu\.be/)===-1) return false;
        if(host.search(/youtu\.be/)!==-1) return path.slice(1);
        if(path.search(/embed/)!==-1) return /embed\/([A-z0-9]+)(\&|$)/.exec(path)[1];
        var getId = /v=([A-z0-9]+)(\&|$)/.exec(srch);
        if(host.search(/youtube\.com/)!==-1) return !getId ? '':getId[1];        
    }
}

function crearGaleria(contenedor) {

    let imageGalleryColumn = document.createElement('div');
    imageGalleryColumn.classList.add('image-gallery');
    imageGalleryColumn.classList.add('column');
    contenedor.appendChild(imageGalleryColumn);

    for (let i = 0; i < 2; i++) {
        // row
        let row = document.createElement('div');
        row.classList.add('row');   
        imageGalleryColumn.appendChild(row);

        // --- white-space-16
        let whiteSpace16 = document.createElement('div');
        whiteSpace16.classList.add('white-space-16');
        imageGalleryColumn.appendChild(whiteSpace16);

        for (let j = 0; j < 3; j++) {  

            // --- Contenedores de Imágenes          
            let singleImageGalleryDiv = document.createElement('div');
            singleImageGalleryDiv.classList.add('single-image-gallery');
            singleImageGalleryDiv.classList.add('bordered-dotted');
            singleImageGalleryDiv.classList.add('responsive-img');
            row.appendChild(singleImageGalleryDiv);

            // --- Imágenes
            let singleImageGallery = document.createElement('img');
            singleImageGallery.setAttribute('src','');
            singleImageGallery.setAttribute('alt','Imagen');
            singleImageGalleryDiv.appendChild(singleImageGallery);
        }
    }

    // --- trigger hidden input
    let elegirImagenes = document.createElement('p');
    elegirImagenes.id = 'elegirImagenes';
    elegirImagenes.classList.add('text-center');
    elegirImagenes.classList.add('info-sheet');    
    elegirImagenes.textContent = 'Click para cambiar/elegir imágenes';
    contenedor.appendChild(elegirImagenes);

    // --- hidden input
    let inputImagenes = document.createElement('input');
    inputImagenes.id = 'imagenesInput';
    inputImagenes.setAttribute('type', 'file');
    inputImagenes.setAttribute('name','galeria');
    inputImagenes.setAttribute('multiple','');
    inputImagenes.classList.add('hidden');
    contenedor.appendChild(inputImagenes);
    elegirImagenes.addEventListener('click', function(){
        inputImagenes.click();
    });

   // Función para mostrar imágenes

}

function crearLista(contenedor) {

    // --- Input, Añadir, Remover Botones
    let sheetText = document.createElement('div');
    sheetText.classList.add('info-shet');
    contenedor.appendChild(sheetText);
    let inputLista = document.createElement('input');
    inputLista.classList.add('input-ghost');
    inputLista.classList.add('input-ghost-list');
    inputLista.id = 'input-lista';
    inputLista.setAttribute('placeholder', 'Elemento de Lista (50 carácteres)');
    inputLista.setAttribute('maxlength', '50');
    sheetText.appendChild(inputLista);
    let addListButton = document.createElement('a');
    addListButton.classList.add('btn');
    addListButton.textContent = 'AÑADIR';
    addListButton.id = 'agregarLista';    
    sheetText.appendChild(addListButton);    

    let lista = document.createElement('ol');
    lista.id = 'lista';
    contenedor.appendChild(lista);

    addListButton.addEventListener('click', function(){
        let listElement = document.createElement('li');
        listElement.textContent = inputLista.value;
        lista.appendChild(listElement);
        inputLista.value = '';
        for (var i = 0; i <= lista.children.length -1; i++) {
            lista.children[i].addEventListener("click", function(){
                this.parentNode.removeChild(this);
            });
        }
    });
}
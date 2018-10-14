"use strict";

var cont = 0;

// --- contenedor-componentes (ROOT)
const contenedorComponenetes = document.getElementById('contenedor-componentes');


// --- Eventos

// -- "Click para cambiar imagen de portada"
let bannerButton = document.getElementById('banner-button');
bannerButton.addEventListener('click', function () {
    let inputBanner = document.getElementById('banner-input');
    inputBanner.click();
});

function mostrarImagen(src, idDestino, i) {
    var fr = new FileReader();

    fr.onload = function (e) {
        var d = document.getElementById(idDestino).src = this.result;
        //console.log(this.result);
        //return JSON.stringify(this.result);
    };
    src.addEventListener("change", function () {
        fr.readAsDataURL(src.files[i]);
    });
}

var src = document.getElementById("banner-input");
var destino = document.getElementById("banner-img");
mostrarImagen(src, 'banner-img', 0);

// --- Botón "Encabezado"

let agregarEncabezado = document.getElementById('encabezado-click');
agregarEncabezado.addEventListener('click', function () {
    crearContenedores('encabezado');
});

// --- Botón "Párrafo"

let agregarParrafo = document.getElementById('parrafo-click');
agregarParrafo.addEventListener('click', function () {
    crearContenedores('parrafo');
});

// --- Botón "Imagen"

let agregarImagen = document.getElementById('imagen-click');
agregarImagen.addEventListener('click', function () {
    crearContenedores('imagen');
});

// --- Botón "Enlaces"

let agregarEnlaces = document.getElementById('enlaces-click');
agregarEnlaces.addEventListener('click', function () {
    crearContenedores('enlaces');
});

// --- Botón "Video"

let agregarVideo = document.getElementById('video-click');
agregarVideo.addEventListener('click', function () {
    crearContenedores('video');
});

// --- Botón "Galería"

let agregarGaleria = document.getElementById('gallery-click');
agregarGaleria.addEventListener('click', function () {
    crearContenedores('galeria');
});

// --- Botón "Lista"

let agregarLista = document.getElementById('lista-click');
agregarLista.addEventListener('click', function () {
    crearContenedores('lista');
});

// --- End Eventos

function crearContenedores(componente) {

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
    deleteComponent.onclick = function () {
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

function crearEncabezado(contenedor) {

    cont++;
    // --- sheet-title
    let sheetTitle = document.createElement('div');
    sheetTitle.classList.add('sheet-title');
    contenedor.appendChild(sheetTitle);

    // --- input
    let input = document.createElement('input');
    input.classList.add('input-ghost');
    input.classList.add('input-ghost-title');
    input.setAttribute('id', 'contenido' + cont);
    input.setAttribute('type', 'text');
    input.setAttribute('name', 'encabezado');
    input.setAttribute('maxlength', '60');
    input.setAttribute('placeholder', 'Encabezado de texto (60 carácteres)');
    input.setAttribute("onchange", "getEncabezado(this)");
    contenedor.appendChild(input);
}

function crearParrafo(contenedor) {

    // --- sheet-title
    cont++;
    let sheetText = document.createElement('div');
    sheetText.classList.add('sheet-text');
    contenedor.appendChild(sheetText);

    // --- textarea
    let textarea = document.createElement('textarea');
    textarea.classList.add('input-ghost');
    textarea.classList.add('input-ghost-parrafo');
    textarea.setAttribute('id', 'contenido' + cont);
    textarea.setAttribute('name', 'parrafo');
    textarea.setAttribute('maxlength', '800');
    textarea.setAttribute('rows', '7');
    textarea.setAttribute('onchange', 'getParrafo(this)');
    textarea.setAttribute('placeholder', 'Parrafo de texto (800 carácteres)');
    contenedor.appendChild(textarea);
}

var contImg = 0;
function crearImagen(contenedor) {
    // --- single-img
    contImg++;
    cont++;

    let singleImage = document.createElement('div');
    singleImage.classList.add('single-img');
    singleImage.classList.add('bordered-dotted');
    singleImage.classList.add('responsive-img');
    contenedor.appendChild(singleImage);

    // --- Img 
    let imagen = document.createElement('img');
    imagen.id = 'imagenUnica' + contImg.toString();
    imagen.setAttribute('src', '');
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
    inputImagen.id = 'imagenInput' + contImg.toString();
    inputImagen.classList.add('contenido' + cont);
    inputImagen.setAttribute('type', 'file');
    inputImagen.setAttribute('name', 'imagenUnica' + contImg.toString());
    inputImagen.classList.add('hidden');
    inputImagen.setAttribute('onchange', 'getImagen(this)');
    contenedor.appendChild(inputImagen);
    elegirImagen.addEventListener('click', function () {
        inputImagen.click();
    });

    var src = document.getElementById("imagenInput" + contImg.toString());
    mostrarImagen(src, 'imagenUnica' + contImg.toString(), 0);
}

function crearEnlaces(contenedor) {

    for (let index = 1; index <= 3; index++) {

        // --- sheet-text
        cont++;
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
        inputEnlaces.setAttribute('id', 'contenido' + cont);
        inputEnlaces.setAttribute('name', 'enlace' + index);
        inputEnlaces.setAttribute('onchange', "getEnlaces(this,'enlaceName" + index + "')");
        inputEnlaces.setAttribute('placeholder', 'URL');
        sheetText.appendChild(inputEnlaces);

        let inputEnlacesName = document.createElement('input');
        inputEnlacesName.classList.add('input-ghost');
        inputEnlacesName.setAttribute('type', 'text');
        inputEnlacesName.setAttribute('id', 'contenido' + cont);
        inputEnlacesName.setAttribute('name', 'enlaceName' + index);
        inputEnlacesName.setAttribute('maxlength', '50');
        inputEnlacesName.setAttribute('placeholder', 'Nombre del enlace ' + index);
        inputEnlacesName.setAttribute('onchange', "getNameLink(this,'enlace" + index + "')");
        //inputEnlacesName.id = "inputEnlacesName";
        sheetText.appendChild(inputEnlacesName);

        let whiteSpace = document.createElement('div');
        whiteSpace.classList.add('white-space-8');
        contenedor.appendChild(whiteSpace);

    }
}

function crearVideo(contenedor) {

    // --- sheet-text

    cont++;

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
    //inputVideo.setAttribute('onchange','getVideo(this)');
    sheetText.appendChild(inputVideo);

    // --- valid button
    let validButtton = document.createElement('p');
    validButtton.id = 'btn-validar';
    validButtton.classList.add('btn');
    //validButtton.classList.add();
    //validButtton.setAttribute('id','contenido'+cont);
    validButtton.textContent = 'VALIDAR';
    sheetText.appendChild(validButtton);

    validButtton.addEventListener('click', function () {
        if (isYoutube(inputVideo.value) == false || isYoutube(inputVideo.value) == null) {
            alert("URL erróneo");
        } else {
            alert("Video Correcto: " + isYoutube(inputVideo.value));
            getVideo(isYoutube(inputVideo.value), ('contenido' + cont));
        }
    });

    function isYoutube(getURL) {
        if (typeof getURL !== 'string') return false;
        var newA = document.createElement('A');
        newA.href = getURL;
        var host = newA.hostname;
        var srch = newA.search;
        var path = newA.pathname;

        if (host.search(/youtube\.com|youtu\.be/) === -1) return false;
        if (host.search(/youtu\.be/) !== -1) return path.slice(1);
        if (path.search(/embed/) !== -1) return /embed\/([A-z0-9]+)(\&|$)/.exec(path)[1];
        var getId = /v=([A-z0-9]+)(\&|$)/.exec(srch);
        if (host.search(/youtube\.com/) !== -1) return !getId ? '' : getId[1];
    }
}

var contGa = 0;
function crearGaleria(contenedor) {

    contGa++;
    cont++;
    let imageGalleryColumn = document.createElement('div');
    imageGalleryColumn.classList.add('image-gallery');
    imageGalleryColumn.classList.add('column');
    contenedor.appendChild(imageGalleryColumn);

    var conta = 0;

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
            conta++;
            // --- Contenedores de Imágenes          
            let singleImageGalleryDiv = document.createElement('div');
            singleImageGalleryDiv.classList.add('single-image-gallery');
            singleImageGalleryDiv.classList.add('bordered-dotted');
            singleImageGalleryDiv.classList.add('responsive-img');
            row.appendChild(singleImageGalleryDiv);

            // --- Imágenes
            let singleImageGallery = document.createElement('img');
            singleImageGallery.setAttribute('src', '');
            singleImageGallery.setAttribute('alt', 'Imagen');
            singleImageGallery.id = 'galeryImg' + contGa.toString() + conta.toString();
            //singleImageGallery.setAttribute('id','galeryImg'+cont.toString());
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
    inputImagenes.id = 'imagenesInput' + contGa.toString();
    inputImagenes.setAttribute('type', 'file');
    inputImagenes.setAttribute('name', 'galeryImg' + contGa.toString());
    inputImagenes.setAttribute('multiple', '');
    inputImagenes.classList.add('contenido' + cont);
    inputImagenes.classList.add('hidden');
    inputImagenes.setAttribute('onchange', "getGalleria(this)");
    contenedor.appendChild(inputImagenes);
    elegirImagenes.addEventListener('click', function () {
        inputImagenes.click();
    });

    // Función para mostrar imágenes
    for (let i = 0; i < 6; i++) {
        var src = document.getElementById('imagenesInput' + contGa.toString());
        mostrarImagen(src, 'galeryImg' + contGa.toString() + (i + 1), i);
    }

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

    addListButton.addEventListener('click', function () {
        let listElement = document.createElement('li');
        listElement.textContent = inputLista.value;
        lista.appendChild(listElement);
        inputLista.value = '';
        for (var i = 0; i <= lista.children.length - 1; i++) {
            lista.children[i].addEventListener("click", function () {
                this.parentNode.removeChild(this);
            });
        }
    });
}

//Funciones usuarios
function addUsuario() {
    document.getElementById('user-form').style.display = 'block';
    /*var addUser = document.getElementById('add-user');
    addUser.addEventListener('click', function () {
        document.getElementById('user-form').style.display = 'block';
    });*/
}

function checkUserPassword(event) {
    var userPassword = document.getElementById('password').value;
    var userRepassword = document.getElementById('repassword').value;
    if (userPassword !== userRepassword) {
        event.preventDefault();
        alert("Verifica que la contraseña sea correcta");
    }
}

function deleteUser(event) {
    if (confirm("¿Estás seguro de elimar el usuario?")) {
        txt = "Sí, eliminar";
    } else {
        txt = "Cancelar!";
        event.preventDefault();
    }
}

function checkCarrer() {
    var carrerSelected = document.getElementById('role').value;
    if (carrerSelected == 1) {
        document.getElementById('user-role').style.display = 'block';
    }
    else {
        document.getElementById('user-role').style.display = 'none';
    }
}
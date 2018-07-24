
// --- Mostar imagen de portada Admin
/*
var featuredImg = document.getElementById('featured-img-click');

featuredImg.addEventListener("click", function(){
    document.getElementById('featured-img').click();
});


var galleryImg = document.getElementById('gallery-img-click');

galleryImg.addEventListener("click", function(){
    document.getElementById('gallery-img').click();
});

*/
// --- HEADER FUNCTION

var currentNav;

function checkNavItem(currentNav) {
    console.log(currentNav);
}

var navigation = document.getElementsByClassName("nav-item");
navigation.addEventListener("mouseover", function(){
    alert("Hola");
}, false);

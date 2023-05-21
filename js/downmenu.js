let header = document.querySelector("header");
let botonMenu = document.querySelector ("#boton-nav");

window.addEventListener("scroll", function(){
    header.classList.toggle("abajo", this.window.scrollY>1);
})


botonMenu.addEventListener ('click',cambiarColor);

function cambiarColor(){
    header.classList.toggle("fondo");
}
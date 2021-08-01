function navSlide() {
    const burger = document.querySelector(".burger");
    const nav = document.querySelector(".nav-links");
    const navLinks = document.querySelectorAll(".nav-links li");
    
    burger.addEventListener("click", () => {
        //Toggle Nav
        nav.classList.toggle("nav-active");
        
        //Animate Links
        navLinks.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = ""
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
            }
        });

        //Burger Animation
        burger.classList.toggle("toggle");
    });
    
}
navSlide();

//INDEX 
const encabezado={
    titulo:["Programación Hipermedial"],
    parrafo:["Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat magnam labore corrupti commodi. Voluptatum, facilis tempora Minus corrupti consequuntur iste dolorum nobis rerum, iure accusamus possimus"],
    hecho:["Creado por: Rebeca Freire"]
}

const nav={
    n_paginas:6,
    url: ["registrar.php", "visualizar.php", "actualizar.php"],
    name: ["Registrar Productos", "Visualizaciar Productos", "Actualizar Productos"]
};

//funciones 
function cargar(){
    var texto="";
    for(var i=0; i<nav.url.length; i++){
        texto+=` 
        <a href="${nav.url[i]}">${nav.name[i]}</a>`;
    }
    return texto;
};

//Cargar Navbar
document.getElementById("links").innerHTML=cargar();

//Cargar Header
document.getElementById("titulo").innerHTML=encabezado.titulo;
document.getElementById("parrafo").innerHTML=encabezado.parrafo;
document.getElementById("hecho").innerHTML=encabezado.hecho;
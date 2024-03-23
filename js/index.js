"use strict"

// CREAR VARIABLES, CONSTANTES Y DATOS NECESARIOS

const modeChange = document.getElementById("mode"); //BOTÓN PARA CAMBIAR DE MODO
let change = false //VERIFICADOR

const itemsNav = document.querySelectorAll('.lista__item__enlace') //SELECCIONAR ENLACES DE NAVEGACIÓN
const sections = document.querySelectorAll('.section'); //SECCIONES DE LA PÁGINA

const redesSociales = document.querySelectorAll('.footer__social__link') //SELECCIONA LOS ENLACES A MIS REDES SOCIALES

const iconosOptions = document.querySelectorAll('.section-home__option i'); //SELECCIONA LOS ICONOS DE INICIO

const legendOptions = document.querySelectorAll('.section-home__option p') //SELECCIONA EL PARRAFO BAJO LOS ICONOS DE INICIO

const contentOptions = document.querySelectorAll('.section-home__option')

const almacenamiento = localStorage;

// Cambiar de modo claro a modo oscuro y viceversa
modeChange.addEventListener("click", ()=>{
    if(change == false) {
        document.documentElement.style.setProperty("--claro", "#333");
        document.documentElement.style.setProperty("--negro", "#fee");
        document.documentElement.style.setProperty("--blueClaro", "#55f");
        document.documentElement.style.setProperty("--shadow-claro", "0px 0px 5px 1px #444");
        document.documentElement.style.setProperty("--nav","rgba(0, 0, 0, 0.5)")
        modeChange.textContent = "Noche";
        almacenamiento.setItem('preference', 'night')
        change = true
    }else {
        document.documentElement.style.setProperty("--claro", "#fee")
        document.documentElement.style.setProperty("--negro", "#222");
        document.documentElement.style.setProperty("--blueClaro", "#22e");
        document.documentElement.style.setProperty("--shadow-claro", "0px 0px 5px 1px #ddd");
        document.documentElement.style.setProperty("--nav","rgba(255, 255, 255, 0.5)")
        modeChange.textContent = "Día";
        almacenamiento.setItem('preference', 'day')
        change = false
    }
})

// CAMBIAR PESTAÑAS DE NAVEGACIÓN

for(let i = 0; i < itemsNav.length; i++) {
    itemsNav[i].addEventListener('click', e => {
        e.preventDefault()
        for(let j = 0; j < itemsNav.length; j++) {
            sections[j].style.display = 'none';
            itemsNav[j].classList.remove('eyelash-active')
        }
        itemsNav[i].classList.add('eyelash-active')
        sections[i].style.display = 'grid'
    })
}

// EFECTO HOVER SOBRE LOS ENLACES DEL FOOTER

for(let i = 0; i < redesSociales.length; i++) {
    redesSociales[i].addEventListener('mousemove', ()=>{
        for(let j = 0; j < redesSociales.length; j++) {
            redesSociales[j].style.opacity = '0.5'
        }
        redesSociales[i].style.opacity = '1';
        redesSociales[i].addEventListener('mouseout', ()=>{
            for(let j = 0; j < redesSociales.length; j++) {
                redesSociales[j].style.opacity = '1'
            }
        })
    })
}

for(let i = 0; i < iconosOptions.length; i++) {
    iconosOptions[i].addEventListener('mousemove', ()=>{
        legendOptions[i].style.display = 'none';
        iconosOptions[i].addEventListener('mouseout', ()=>{
            legendOptions[i].style.display = 'block'
        })
    })
}
"use strict"

const almacenamiento = localStorage;
const modeChange = document.getElementById("mode");

document.addEventListener("DOMContentLoaded", ()=>{
    if(almacenamiento.getItem('preference') == 'night') {
        document.documentElement.style.setProperty("--claro", "#333");
        document.documentElement.style.setProperty("--negro", "#fee");
        document.documentElement.style.setProperty("--blueClaro", "#55f");
        document.documentElement.style.setProperty("--shadow-claro", "0px 0px 5px 1px #444");
        document.documentElement.style.setProperty("--nav","rgba(0, 0, 0, 0.5)")
    }else {
        document.documentElement.style.setProperty("--claro", "#fee")
        document.documentElement.style.setProperty("--negro", "#222");
        document.documentElement.style.setProperty("--blueClaro", "#22e");
        document.documentElement.style.setProperty("--shadow-claro", "0px 0px 5px 1px #ddd");
        document.documentElement.style.setProperty("--nav","rgba(255, 255, 255, 0.5)")
    }
})
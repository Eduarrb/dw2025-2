/* ⚡⚡ TEMPLATE STRINGS ⚡⚡ */

const nombre = "Tony";
const apellido = "Stark";
const edad = 40;

const datos = "Hola, mi nombre es " + nombre + " " + apellido + " y tengo " + edad + " años.";

let datos2 = "Hola como estas, mi nombre es ";
datos2 += nombre;
// datos2 = datos2 + nombre;

// console.log(datos2);

// console.log(datos);

const datosTS = `Hola soy ${nombre} ${apellido} y tengo ${edad} años`;

// console.log(datosTS);

// console.log(window);
// const datosDOM = document.querySelector("div");
// const datosDOM = document.querySelector("#datos");
// const datosDOM = document.getElementById("datos");

const datosDOM = document.querySelector(".datos");
// console.log(datosDOM);

/* ALERTA VERSION ANTIGUA
const parrafoHtml = document.createElement("p");
parrafoHtml.innerHTML = datosTS;
console.log(parrafoHtml);

datosDOM.appendChild(parrafoHtml);
*/

let plantilla = `
    <h1>
        ${datosTS}
    </h1>
`;

// console.log(plantilla);

datosDOM.innerHTML = plantilla;
// datosDOM.textContent = plantilla;


/* ⚡⚡ FUNCTIONS  ⚡⚡ */
/*
    FUNCIONES DE EXPRESION REGULAR

    -Son tareas o acciones a realizar
    - Las funcines son un algoritmo que se puede reutilizar
    - Se pueden definir parametros o argumentos
    - Pueden retornar un valor
    - Se pueden invocar o llamar
*/

function saludar() {
    console.log('Hola y bienvenidos al curso de desarrollo web');
}

// saludar();

// variables globales
let num1 = 10;
let num2 = 20;

function sumar() {
    console.log(num1 + num2);
}

// sumar();

// 🌟🌟 EL AMBITO, CONTEXTO O SCOPE DE UNA FUNCION

let nombre = "Peter"; // NOTA VARIABLES GLOBALES
//let nombre = 'Carlos';

// function x() {
//     let nombre = 'Marco';
// }

// function y() {
//     let nombre = 'Ana';
// }

function nombrar(){
    // nombre = "Tony";
    console.log(nombre);
}

// nombrar();

// console.log(nombre);


function saludarPersona(){
    console.log('este es otro saludo');
}

saludarPersona();
// console.log(apellido);

// let apellido = "Stark";

// ⚡⚡ parametros y argumentos

function obtenerEdad(fechaNacimiento, ciudad){
    let edad = 2025 - fechaNacimiento;
    let dato = `Tu edad es ${edad} años y tu ciudad es ${ciudad}`;
    console.log(dato);
}

obtenerEdad(1990, 'Arequipa');

function multiplicarDosNumeros(num1, num2) {
    return num1 * num2;
}

let resMulti = multiplicarDosNumeros(2, 4); // 8

console.log(resMulti);
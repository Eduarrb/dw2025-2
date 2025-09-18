/*
    JAVASCRIPT

    - Lenguaje de programación
    - Ejecuta del lado del cliente (navegador)
    - Es Key Sensitive (distingue entre mayúsculas y minúsculas)
    - con respecto al punto y coma (;) es flexible, no es obligatorio pero una buena practica
    - JavaScript es un lenguaje basado en objetos (todo es un objeto)
    - Se basa y manipula el DOM (Document Object Model)
*/

/*
    ⚡ TIPOS DE DATOS ⚡
    - Primitivos (string, number, boolean)
    - No primitivos (OBJETOS, array, function)
*/

// 1️⃣ String o cadena de texto
// Los string son un TIPO de objeto

// ES5 y ES6 ECMAScript

// Variables ES5
// var nombre = 'Eduardo';

// Variables ES6
// let apellido = "Gonzalez";
const ciudad = 'Lima';
// console.log(apellido);

// apellido = 'Perez';
// console.log(apellido);

// apellido = 'Ramirez';

// const ciudad = 'Lima';
// console.log(ciudad);

// ciudad = 'Arequipa';

// ⚡ CONCATENACIÓN = Propiedad del tipo de objeto string⚡

// let nombre = 'John';
// let apellido = 'Doe';

// let nombreCompleto = nombre + " " + apellido;
// console.log(nombreCompleto);

// console.log(nombreCompleto.length); // cantidad de caracteres

// Indices (se basan en litas, arrays, vectores) inician en 0
// J o h n   D o e
// 0 1 2 3 4 5 6 7
// console.log(nombreCompleto[0]);
// console.log(nombreCompleto[7]);

let texto = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nisi eum dolore tempore omnis necessitatibus nesciunt doloremque impedit quam dolorum corrupti qui ratione perferendis debitis velit quae consequatur excepturi obcaecati voluptas earum, eveniet, perspiciatis architecto? Incidunt ut odio iusto, cumque rerum suscipit. Dolorem mollitia reprehenderit ipsum distinctio voluptatem sapiente optio nam dicta sunt magni, aliquam id, adipisci ullam velit repudiandae sed amet.';
let catiC = texto.length;
console.log(texto[catiC - 2]);

let nombre = "Marilu";
let apellido = "Apaza";
let dominio = "continental.edu.pe";

// mapaza@continental.edu.pe

let email = nombre[0] + apellido + '@' + dominio;
console.log(email);

// ⚡ METODOS ⚡

let correoMinusculas = email.toLowerCase();
console.log(correoMinusculas);

let correoMayusculas = email.toUpperCase(); 
console.log(correoMayusculas);

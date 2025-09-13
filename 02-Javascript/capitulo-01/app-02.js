/* 2️⃣ Numbers son un tipo de objeto */

let a = 10;
let b = 56.6;

// console.log(a);
// let c = '10';

// console.log(c);

let suma = a + b;
// console.log(suma);

/*
    OPERADORES ARITMÉTICOS, LOGICOS, RELACIONALES
    = -> Asignación
    == -> Comparación de valor o igualdad simple
    === -> Comparación de valor y tipo o igualdad estricta
    != -> Diferente
    !== -> Diferente estricto
    + -> Suma
    - -> Resta
    * -> Multiplicación
    / -> División
    % -> Módulo o residuo
    ++ -> Incremento
    -- -> Decremento    
    > Mayor que
    < Menor que
    >= Mayor o igual que
    <= Menor o igual que
*/

let res = a % 2; 
// 10 / 2 --> 0
// console.log(res);

// Condicionales
if (13 % 2 === 0) {
    // console.log('Es par');
} else {
    // console.log('Es impar');
}

// ⚡⚡ incremento y decremento (en 1)⚡⚡

let num1 = 1;
// console.log(num1); // 1
// num1 = num1 + 1
num1++; // 2
num1++; // 3
// console.log(num1); // 3

num1--; // 2

/**************************************/
let num2 = 23;
num2 += 5; // 28
//num2 = num2 + 5;
num2 -= 2; // 26
// num2 = num2 - 2;
console.log(num2);

let num3 = 26.358547;

let res2 = num3.toFixed(2); // string
let nombre = true;
console.log(typeof res2);
console.log(typeof num3);
console.log(typeof nombre);

console.log(res2);
console.log(res2 + 2);

// ⚡⚡ Objeto Math ⚡⚡
let aleatorio = Math.random() * 10; // 0 - 0.999999

let entero = Math.floor(aleatorio) + 1;
// console.log(entero);

let num4 = 15.4;
// ceil, round, floor
let res3 = Math.ceil(num4); // 16
console.log(res3);

let res4 = Math.floor(num4); // 15
console.log(res4);

let res5 = Math.round(num4); // toma como referencia el valor del decimal
console.log(res5); // 15
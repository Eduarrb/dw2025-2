/* ES6 ⚡⚡ ARROW FUNCTIONS ⚡⚡ */

saludar();

function saludar(){
    console.log('Hola a todos');
}

const saludar2 = () => {
    console.log('Hola a todos desde una arrow function');
}

saludar2();

const sumar = (num1, num2) => {
    let res = num1 + num2;
    console.log(res);
}

sumar(10, 20);

// No es necesario usar parentesis con un solo parametro
const duplicarNumero = num => {
    let res = num * 2;
    console.log(res);
}

duplicarNumero(5);

// const multiplicar = (num1, num2) => {
//     let res = num1 * num2;
//     return res;
// };

// const multiplicar = (num1, num2) => {
//     return num1 * num2;
// };

const multiplicar = (num1, num2) => num1 * num2; // esto si o si retorna

let res = multiplicar(20, 3);
console.log(res);

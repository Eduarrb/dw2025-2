/* 
    ⚡⚡ARRAYS ⚡⚡ 
    listas, conjunto de datos, es un tipo de objeto dentro de JavaScript 

    Nos ayuda a agrupar datos y manipularlos

    Tienen metodos que ayudan a iterear o cambiar los datos
*/

const fruta = 'papaya';

const frutas = ["Manzana", `${fruta}`, 'Uva', 'Banana', 'Kiwi'];
        //            0          1        2        3       4
const numeros = [10, 20, 30, 40, 50];

const mixto = ["Hola", 100, true, [1,2,3,4,5]];

// console.log(frutas);
// console.log(frutas.length);
// console.log(frutas[1]);

// ciclo o loop
            // 5
for (let contador = 0; contador < 5; contador++){
    console.log(frutas[contador]);
}


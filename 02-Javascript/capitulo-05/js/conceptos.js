// ⚡⚡ EJECUCIONES SINCRONAS Y ASINCRONAS ⚡⚡

// 1️⃣ SINCRONO

// function saludar(){
//     console.log('Hola mundo');
// }

// saludar();

// 2️⃣ ASINCRONO
// setInterval(function(){
//     console.log('Hola');
// }, 1000)

// let nombre = 'Pepito';
// console.log(nombre);

function saludar(){
    console.log('Hola mundo');
}

// saludar();

// if(true) {
//     // action
// } else {
//     // action
// }

// fetch('data/usuarios.json')

// function()
//  .function()
//  .function()

fetch('https://pokeapi.co/api/v2/pokemon/ditto')
    .then(
        async function(res) {
            // console.log(res.json()); // async await
            let data = await res.json();
            // console.log(data);
            console.log(data.abilities);
        }
    ) 
    .catch(
        function(error){
            console.log(error);
        }
    );
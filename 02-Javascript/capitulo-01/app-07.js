/* ⚡⚡ OBJECTS ⚡⚡ */
// key - value pairs

// key: value,
// key: value,
// key: value,
// key: value,

const celular = {
    marca: 'Apple',
    modelo: 'iPhone 15 pro',
    color: 'Gris espacial',
    precio: 1399,
}

// console.log(celular);

// console.log(celular.marca);

celular.pantalla = '6.1 pulgadas';

// console.log(celular);

// Los objetos tienen metodos
const usuario = {
    dni: '12345678',
    correo: 'jaimito@gmail.com',
    habilidades: ['HTML', 'CSS', 'JS'],
    casado: false,
    nombre: 'Jaimito',
    parientes: {
        papa: 'Manuel',
        mama: 'Juana',
        hermano: 'Pedrito'
    },
    saludar: function() { // ---> metodo
        // console.log('Hola, soy jaimito');
        console.log(this.nombre);
    },
    edad: 23,
    caminar: () => {
        // console.log('Estoy caminando');
        console.log(this);
    }
}

// this => hace referencia al objeto actual (global) o al objeto en el cual se esta referenciando
// console.log(this);
usuario.saludar();
// usuario.caminar();
// usuario.parientes.saltar();
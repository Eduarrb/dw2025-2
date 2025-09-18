/* ⚡⚡ OBJECTS ⚡⚡ */
// key - value pairs

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
        console.log(this); // CUIDADO, OJO
    }
}

// this => hace referencia al objeto en el cual se esta definiendo
//console.log(this); // window

// usuario.saludar();
// usuario.caminar();
// usuario.parientes.saltar();

const personaje = {
    nombre: 'Goku',
    poder: 'Kame Hame Ha',
    edad: 30,
    skills: ['Genki Dama', 'Kaioken', 'Ultra Instinto', 'Teletransportacion'],
    listarSkills: function() {
        let plantilla = '';
        for(let i = 0; i < this.skills.length; i++) {
            // console.log(this.skills[i]);
            plantilla += `<h2>${this.skills[i]}</h2>`;
        }
        // console.log(plantilla);
        return plantilla;
    },
    // itemDOM --> un elemento del DOM
    // plantilla --> un string con codigo HTML
    imprimirSkills: (itemDOM, plantilla) => {
        itemDOM.innerHTML = plantilla;
    }
}

// Necesito un metodo que me permita obtener una lista de H2s para imprimir en el DOM

const listaDOM = personaje.listarSkills(); // --> una plantilla
// console.log(listaDOM);

const datosDOM = document.querySelector('.datos');

personaje.imprimirSkills(datosDOM, listaDOM);
// datosDOM.innerHTML = listaDOM;

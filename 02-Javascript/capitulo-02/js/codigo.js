// 1️⃣ manipular el dato del input
const tareaInput = document.querySelector('.tarea');

// 2️⃣ manipular el boton
const btn = document.querySelector('button');

// 5️⃣ Manipular la lista
const lista = document.querySelector('ul');
const alerta = document.querySelector('.alerta');

// 3️⃣ agregar un listener al boton para escuchar el evento click
btn.addEventListener('click', function (){
    // 4️⃣ inserta a la lista
    if(tareaInput.value === '') {
        alerta.textContent = 'Debes agregar una tarea';
    } else {
        const li = `<li>${tareaInput.value}</li>`;
        lista.insertAdjacentHTML('beforeend', li);
        tareaInput.value = '';
        alerta.textContent = '';
    }
});

/* 💥💥 LA FORMA INCORRECTA  💥💥 */
// const tareasInsertadas = document.querySelectorAll('li');
// // console.log(tareasInsertadas);
// for(let i = 0; i < tareasInsertadas.length; i++){
//     tareasInsertadas[i].addEventListener('click', function(){
//         tareasInsertadas[i].remove();
//         // this.remove();
//         // console.log('Diste click en la tarea');
//     });
// }

/* 🌟🌟 LA FORMA CORRECTA 🌟🌟 */

lista.addEventListener('click', function(evento){
    // console.log(evento)
    // console.log(evento.target.tagName);
    if(evento.target.tagName === 'LI') {
        // this.remove();
        evento.target.remove();
    }
});

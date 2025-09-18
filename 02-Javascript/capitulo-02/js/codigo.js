/* 💥💥 LA FORMA INCORRECTA  💥💥 */
// 1️⃣ manipular el dato del input
const tareaInput = document.querySelector('.tarea');

// 2️⃣ manipular el boton
const btn = document.querySelector('button');

// 5️⃣ Manipular la lista
const lista = document.querySelector('ul');
// console.log(lista);

// 3️⃣ agregar un listener al boton para escuchar el evento click
btn.addEventListener('click', function (){
    // console.log(tareaInput.value);
    // 4️⃣ inserta a la lista
    const li = `<li>${tareaInput.value}</li>`;
    // lista.innerHTML += li;
    lista.insertAdjacentHTML('beforeend', li);
    tareaInput.value = '';
});


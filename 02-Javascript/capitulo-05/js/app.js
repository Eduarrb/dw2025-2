// const obtenerJson = async () => {
//     try {
//         const res = await axios.get('https://pokeapi.co/api/v2/pokemon/ditto');
//         console.log(res.data);
//     } catch (error) {
//         console.log(error);
//     }
// }

// obtenerJson();

/*
    http => protocolo 80 -> http://www.google.com
    https => protocolo seguro 443 -> https://www.google.com
*/

const obtenerPokemon = async (pokemonNombre) => {
    try {
        const res = await axios.get(`https://pokeapi.co/api/v2/pokemon/${pokemonNombre}`);
        // console.log(res.data);
        return res.data;
    } catch (error) {
        console.log(error);
    }
}

/*
    👀👀👀
    cuando tu funcion ejecute o devuelva una promesa
    siempre debes usar async | await

*/


const form = document.querySelector('form');
const pokemonInput = document.querySelector('input[type="text"]');
const pokeData = document.querySelector('.pokeData');
const pokeImagen = document.querySelector('.pokeImagen');
const pokeNombre = document.querySelector('h2');

form.addEventListener('submit', async e => {
    e.preventDefault();
    const nombre = pokemonInput.value;
    const pokemon = await obtenerPokemon(nombre);

    const plantilla = `
        <ul>
            <li><strong>HP:</strong> ${pokemon.stats[0].base_stat} </li>
            <li><strong>Attack:</strong> ${pokemon.abilities[0].ability.name}</li>
            <li><strong>Height:</strong> ${pokemon.height}</li>
            <li><strong>Special-Attack:</strong> ${pokemon.moves[0].move.name}</li>
            <li><strong>Type:</strong> ${pokemon.types[0].type.name}</li>
        </ul>
    `;

    pokeData.innerHTML = plantilla;
    pokeImagen.innerHTML = `<img width="200" src="${pokemon.sprites.front_default}" alt="${pokemon.name}">`;
    pokeNombre.textContent = pokemon.name;
    pokemonInput.value = '';
});

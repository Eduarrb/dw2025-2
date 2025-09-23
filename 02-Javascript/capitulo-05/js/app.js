// const obtenerJson = async () => {
//     try {
//         const res = await axios.get('https://pokeapi.co/api/v2/pokemon/ditto');
//         console.log(res.data);
//     } catch (error) {
//         console.log(error);
//     }
// }

// obtenerJson();

const obtenerPokemon = async (pokemonNombre) => {
    try {
        const res = await axios.get(`https://pokeapi.co/api/v2/pokemon/${pokemonNombre}`);
        console.log(res.data);
    } catch (error) {
        console.log(error);
    }
}

const form = document.querySelector('form');
const pokemonInput = document.querySelector('input[type="text"]');

form.addEventListener('submit', e => {
    e.preventDefault();

    const nombre = pokemonInput.value;
    // console.log(nombre);
    obtenerPokemon(nombre);
});

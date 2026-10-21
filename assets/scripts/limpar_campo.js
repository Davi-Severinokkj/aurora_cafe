// FUNÇÃO PARA LIMPAR O CAMPO DE PESQUISA

let button_off_search = document.querySelector(".off_search");
let search = document.querySelector(".input_pesquisa");
let categoria = document.getElementById("categoria")

console.log(button_off_search);
console.log(search);
console.log(categoria);

button_off_search.addEventListener("click", () => {
    search.value = "";
    categoria.value = "";
})
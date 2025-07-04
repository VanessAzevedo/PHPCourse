doces = ['brigadeiro', 'canjica', 'bolo de milho', 'paçoca', 'pamonha', 'cuscuz', 'cocada'] //a vírgula separa elementos
//índice = posição dos elementos.
console.log(doces[0], doces[4]) //colchete mostra a posição específica.

console.log(doces) //imprime toda a lista inteira, a té mesmo os colchetes.


for(i = 0; i < 6; i++){
    console.log(doces[i])
} //impressão de toda a lista



for(i = 0; i < doces.length; i++){
    console.log(doces[i])
} //chamada de toda a lista atual sempre que houver atualização. Ele sempre obedece o tamanho máximo da lista.



doces.forEach(guloseima => {
    console.log(guloseima)
}); //forEach significa para cada. Ele serve para mexer na lista, não criá-la.
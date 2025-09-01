lista = ['Brigadeiro', 'cocada', 'quindim']

notasDoce = [10, 7.5, 5]

brigadeiro = ['Brigadeiro', 10]

doces = [['brigadeiro', 10], ['cocada', 7.5], ['quindim', 5]] //Listas da lista.

console.table(doces) //a configuração table é recomendada somente para imprimir lista de lista inteira.


console.log(doces[2][0]) //a posição 2 refere-se ao quindim da primeira lista. E a posição 0 o primeiro intem da lista número 2.


doces.push(['paçoca', 8]) //Add novo intem (lista) a lista principal.
console.table(doces)


doces.pop() //Sempre remove o ultimo elemento posto na lista. 
console.table(doces)
qualDoce = doces.pop() //essa é basicamente uma memória pois, apesar de o item ter sido retirado da lista, ainda é possível usá-lo, se eu quiser.
                       //Fora isso, o item deixa de existir.




saldo = 1500

deposito = 100

function depositar(deposito, saldo){
    saldo = saldo + deposito  //ou pode ser escrito = saldo += deposito
    console.log(saldo)
    return saldo
} //a função foi definida, agora precisa ser chamada.

saldo = depositar (10000, saldo)
console.log(saldo)

//exemplo de função com retorno.
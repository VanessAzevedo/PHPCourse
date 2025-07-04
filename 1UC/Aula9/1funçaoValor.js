saldo = 1500

deposito = 100

function depositar(deposito, saldo){
    saldo = saldo + deposito  //ou pode ser escrito = saldo += deposito
    console.log(saldo)
} //a função foi definida, agora precisa ser chamada.

depositar(deposito, saldo) //agora eçla está sendo chamada
console.log(saldo)

//exemplo de função sem retorno.
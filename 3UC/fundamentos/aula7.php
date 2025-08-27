<?php
//CRIANDO A FUNÇÃO:
function apresentar()
{
    $data = date('d,m,Y', strtotime($_GET["nascimento"]));
    echo '<p>Olá,' . $_GET["nome"] . '!</p>'; //o .(ponto) é um operador de concatenação.
    echo '<p>Data de Nascimento: ' . $data . '</p>';
}

//USANDO A FUNÇÃO:
apresentar();
echo "Só para reforçar!! <br>";
apresentar();
?>
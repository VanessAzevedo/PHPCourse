<?php
//CONEXÃO COM O BANCO DE DADOS:
$servidor = "localhost";
$user_banco = "root";
$senha_banco = "";
$banco = "senac";

$conexão = new mysqli($servidor, $user_banco, $senha_banco, $banco);

//EXECUTAR O COMANDO PARA LISTAR:
$listar = "SELECT * FROM alunos";
$listarexec = $conexão->query($listar);
if ($listarexec->num_rows > 0){
    while($linha = $listarexec->fetch_assoc()){ //fetch_assoc é uma busca associativa
        echo "<br>" . $linha['nome'] . " | " . $linha['curso'];                                                                                                                                                                                                                                                                                                                                  
    }
} else {
    echo "<br>Dados não encontrados.";
}








?>
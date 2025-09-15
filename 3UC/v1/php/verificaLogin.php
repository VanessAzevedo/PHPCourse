<?php
// Iniciando a sessão
session_start();

// Conexão com o banco
require('conexao.php'); // "vai requerer" o arquivo conexao.php

// Os dados abaixo vieram do form html
$usuario = $_POST['nome'];
$senha = $_POST['senha'];

$_SESSION['nome'] = $usuario; //ASSOCIO O NOME DE USUÁRIO NA SEÇÃO


// procurando no banco os dados
$sql = "SELECT * FROM login WHERE usuario = '$usuario' AND senha = '$senha' ";
$procurar = $conexao->query($sql); // ele executa o "select" de $sql

// verificando se existe
if ($procurar->num_rows > 0){
    // caso o usuário esteja correto
    // Ele vai redirecionar para a página 'admin.html'
    header('Location: admin.php'); //VAI REDIRECIONAR A PÁG. P/O admin.php

} else {
    // caso o usuário não exista
    // Ele vai informar que o usuário não existe
    echo "Usuário e Senha incorretos ";
    echo "<a href='../index.html'>Voltar</a>";
}



?>
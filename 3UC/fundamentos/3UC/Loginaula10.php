<?php
//CONEXÃO COM O BANCO DE DADOS:
    $servidor = "localhost";
    $user_banco = "root";
    $senha_banco = "";
    $banco = "senac";
    $conexão = new mysqli($servidor, $user_banco, $senha_banco, $banco);

    //CAPTANDO OS DADOS DO FORMULÁRIO DE LOGIN:
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];


    //EXECUTANDO A SQL (QUERY:)
    $consulta = "SELECT * FROM login WHERE usuario = '$usuario' AND senha = '$senha'";
    $executa = $conexão->query($consulta); //variável consulta chamando conexão usando o métdodo query.


    //TESTANDO PARA VER SE TEM NO BANCO:
    if ($executa->num_rows > 0){ //num_rows = número de linhas
        echo "<br>Usuário logado no sistema";
    } else{
        echo "<br>Usuário ou senha incorreta.";
    }




?>
<?php
    //CONEXÃO COM O BANDO DE DADOS
    $servidor = "localhost";
    $user_banco = "root";
    $senha_banco = "";
    $banco = "senac";
    $conexão = new mysqli($servidor, $user_banco, $senha_banco, $banco);

    //CONEXÃO DEU CERTO?
    if ($conexão->connect_error){
        echo "Erro";
    } else{
        echo "Conexão feita.";
    }

    //INSERÇÃO DOS DADOS NO BANCO:
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $inserir = "INSERT INTO login VALUES (DEFAULT, '$usuario', '$senha')";

    $conexão->query($inserir);

    echo "<br>Dados inseridos com sucesso!";



?>
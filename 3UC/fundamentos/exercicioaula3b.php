<?php
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $cidade = $_POST["cidade"];

    echo "Nome digitado: $nome";
    echo "<br>Idade: $idade";
     if ($cidade == "cidade"){
        echo "<br>Cidade não informada";
    } else {
        echo "<br>Cidade: $cidade";
    }

    if ($idade >= 18){
        echo "<br>Vai entrar no Rio Innovation Week.";
    } else {
        echo "<br>Barrado(a) por ser menor de idade.";
    }
   
?>
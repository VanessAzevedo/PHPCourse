<?php
include("aula8b.php"); //importei a class cachorro
include("aula8.php"); //importei a garrafa

    $cachorro = new Cachorro("Macelo", "Vira-lata");

    echo "<br>Nome: ";
    echo $cachorro->nome;
    echo "<br>Raça: ";
    echo $cachorro->raca;
    echo "<br>";
    $cachorro->latir();

    $cachorro1 = new Cachorro("Tupy", "Boiadeiro Autraliano");
    echo "Nome: ";
    echo $cachorro1-> nome;
    $cachorro1->latir();

?>
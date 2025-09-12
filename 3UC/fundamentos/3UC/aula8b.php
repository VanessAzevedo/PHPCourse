<?php
    class Cachorro{
        public $nome;
        public $raca;

        function __construct($nome, $raca){
            $this->nome = $nome;
            $this->raca = $raca;
        }
        function latir(){
            echo "Au, au!";
        }

    }

    $cachorro = new Cachorro("Macelo", "Vira-lata");

    echo "<br>Nome: ";
    echo $cachorro->nome;
    echo "<br>Raça: ";
    echo $cachorro->raca;
    echo "<br>";
    $cachorro->latir();


    


?>
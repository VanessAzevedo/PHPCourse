<?php
//PRORAMAÇÃO ORIENTADA OBJETO:

    //CLASS É O MODELO DA PESSOA
    class Pessoa{
        //ATRIBUTOS = CARACTERÍSTICAS
        public $cabelo;
        public $cor_olhos;
        public $altura;
        public $cor_pele;
        public $nome;

        //MÉTODOS = ACÕES
        function __construct($cabelo, $olhos, $altura, $pele, $nome)
        {
            $this->cabelo = $cabelo; //O $this chama o atributo e o = o parâmetro.
            $this->cor_olhos = $olhos;
            $this->altura = $altura;
            $this->cor_pele = $pele;
            $this->nome = $nome;
        }

        function apresentar_pessoa(){
            echo "
            <br><br>Dados da Pessoa:
            <br>Nome:$this->nome
            <br>Altura: $this->altura
            <br>Tipo de Cabelo: $this->cabelo
            <br>Cor da Pele: $this->cor_pele
            <br>Cor dos Olhos: $this->cor_olhos
            ";
        }
    }
//CRIAR O OBJETO = INSTACIAR OBJETO:
    $pessoa = new Pessoa("Castanhos", "Verde", 1.67, "Marrom Bombom", "Flávia"); //RECEBE A VARIÁVEL DO TIPO OBJETO

    $pessoa1 = new Pessoa("Cacheado", "Castanho", 1.55, "Marrom bombom", "Rayane");

    //USANDO OS MÉTODOS DA CLASS PESSOA:
    $pessoa->apresentar_pessoa();
    $pessoa1->apresentar_pessoa();

    echo "<br><br> "

?>
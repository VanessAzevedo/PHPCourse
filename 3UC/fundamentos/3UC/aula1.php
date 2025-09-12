<?php
    //primeiro programa 
    echo"Olá, mundo!"; //echo é um comando de saída

    //declaração de variáveis
    $idade = 27; //inteira
    $altura = 1.72; //float
    $nome = "Vanessa"; //string
    $trabalho = true; //bolenado

    //Concatenação:
    echo "<br>Meu nome é " . $nome . " tenho " . $idade . "anos, minha altura é de " . $altura . ". Se eu trabalho? " . $trabalho . ".<br>";

    //echo "<br>Meu nome é $nome, tenho $idade anos, minha altura é de $altura. Se eu trabalho? $trabalho.";

    //Operações Aritméticas:
    $x = 10;
    $y = 15;
    $soma = $x + $y;
    $subtração = $x - $y;
    $multiplicação = $x * $y;
    $divisão = $x / $y;
    $resto = $x % $y;

    echo "<br>Soma de " . $x . " e " . $y . ":" . $soma;
    echo "<br>Subtração de " . $x . "e" . $y . ":" . $subtração;
    echo "<br>Multiplicação de $x e $y: $multiplicação";
    echo "<br>Divisão de $x e $y: $divisão";
    echo "<br>Resto da divisão: $resto";

    //Transformação do tipo da variável:
        $div_inteiro = intval($divisão);
        echo "<br>Divisão entre $x e $y: $div_inteiro";

        $num1 = 4;
        $num2 = 2;
        $div = $num1 / $num2;
        $div_float = floatval($div); //trans para float
        echo  "<br>Resultado: $div_float";
?>
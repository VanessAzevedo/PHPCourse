<?php
//TIPOS DE VARIÁVEIS
$nome = "Marcio"; //STRING
$idade = 40; //INT
$altura = 1.72; //FL0AT
$vivo = true; //bool

//ARRAYS
$frutas = ["Uva", "Banana", "Maçã"];
$casas = [102, 104, 106];
$cadastro1 = ["Marcio", 40, 1.72];
$cadastro_pessoa = [
    ["Marcio", 40, 1.72],
    ["Ana", 35, 1.70],
    ["Caren", 34, 1.58]
];

//MODO CHAVE VALOR:
$cadastro_pessoa0 = array(
    "Nome" => "Marcio",
    "idade" => 40,
    "Altura" => 1.72
);
echo $cadastro_pessoa0["Nome"] . "<br>";
echo $cadastro_pessoa0["idade"];

//ARRAY MULTIDIMENSIONAL:
$cadastro_pessoa1 = array(
    array(
        "Nome" =>"Ana",
        "Idade" => 35,
        "Altura" => 1.70
    ),
     array(
        "Nome" => "Caren",
        "Idade" => 34,
        "Altura" => 1.58
    )
     );
echo $cadastro_pessoa1 [1] ["Nome"];
?>
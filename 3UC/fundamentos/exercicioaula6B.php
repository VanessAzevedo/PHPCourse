<?php
//FUNÇÕES:
//FUNÇÃO SEM PARÂMETRO (fixa):
function somar(){
    $x = 5;
    $y = 10;
    $resultado = $x + $y;
    return $resultado;
}
echo somar() . "<br>";

//FUNÇÃO COM PARÂMETRO:
function somar1($x, $y){
    $resultado = $x + $y;
    return $resultado;
}
echo somar1(20, 5) . "<br>";
echo somar1(2, 7) . "<br>";
echo somar1(0, 71) + somar(0, 8);


?>
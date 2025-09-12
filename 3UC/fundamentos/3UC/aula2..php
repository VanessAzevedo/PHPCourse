<?php
//UNIFICANDO O OPERADOR:
echo "Jogo de Perguntas<br>";

$pontuacao = 0;
$resposta = [];
echo "<br>Qual era o nome do 'descobridor' do Brasil? 
  <br>a. Cabral
  <br>b. Cabril
  <br>c. Cabrol
  ";
$resposta[0] = "a";
echo "<br>Resposta: " . $resposta[0];
if ($resposta[0] == "a") {
    echo " Resposta correta!<br>";
    $pontuacao++; //É o mesmo que eu $pontuacao = $pontuacao + 1;
} else {
    echo "Voce errou<br>";
}

//2° QUESTÃO
echo "<br>Qual era a cor do cavalo Branco de Napoleão
  <br>a. Branco
  <br>b. Marrom
  <br>c. Preto
  ";
$resposta[1] = "b";
echo "<br>Resposta: " . $resposta[1];
if ($resposta[1] == "a"){
    echo "Errou! Branco era o nome do cavlo de Napoleão, a cor dele era marrom";
} else if ($resposta[1] == "b"){
    echo "Acertou, parabéns!<br>";
    $pontuacao++;
} else if ($resposta[1] == "c"){
    echo "Misericódia, vai estudar!<br>";
} else {
    echo "Voce escolheu uma opcção inválida.<br>";
}
//QUESTÃO 3
echo "<br>Qual é a capital do Brasil?
  <br>a. Pavuna
  <br>b. Maricá
  <br>c. Brasilia
";
$resposta[2] = "c";
switch ($resposta[2]){
    case "a":
        echo "<br>Pavuna é um bairro do Rio de Janeiro.";
        break;
    case "b":
        echo "<br>Maricá é um município do Estado do Rio.";
        break;
    case "c":
        echo "<br>Parabéns, voce acertou!";
        $pontuacao++;
        break;
    default:
        echo "<br>Opção inválida.";
        break;
}
//echo"<br>Voce tirou $pontuacao pontos.";
echo "<br>Voce tirou, deixa-me ver...";
$x = 1;
while($x <= $pontuacao){
    echo "<br>$x";
    $x++;
}
echo " pontos.";

echo "<br>Vou contar novamente.";
for ($x = 1; $x <= $pontuacao; $x++){
    echo "<br>$x";
}
echo " pontos.";
?>

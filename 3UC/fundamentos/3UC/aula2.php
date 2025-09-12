<?php
echo "Jogo de Perguntas<br>";

$pontuacao = 0;
echo "<br>Qual era o nome do 'descobridor' do Brasil? 
  <br>a. Cabral
  <br>b. Cabril
  <br>c. Cabrol
  ";
$resposta1 = "a";
echo "<br>Resposta: " . $resposta1;
if ($resposta1 == "a") {
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
$resposta2 = "b";
echo "<br>Resposta: " . $resposta2;
if ($resposta2 == "a"){
    echo "Errou! Branco era o nome do cavlo de Napoleão, a cor dele era marrom";
} else if ($resposta2 == "b"){
    echo "Acertou, parabéns!<br>";
    $pontuacao++;
} else if ($resposta2 == "c"){
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
$resposta3 = "c";
switch ($resposta3){
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

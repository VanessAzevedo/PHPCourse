<?php
 include("aula8c.php");

 $pessoa = new Pessoa("Castanho", "Castanhos", 1.72, 84, "Marcio", "Branco", "PHP.");

 $pessoa->apresentar_pessoa();
 $pessoa->estudar();

 //CRIANDO OUTRA PESSOA:
 echo "<br><br>";

 $pessoa1 = new Pessoa("Preto", "Azuis", 1.69, 60, "Karen", "Preto", "Python");
 $pessoa1->apresentar_pessoa();
 $pessoa1->estudar();

 if ($pessoa->nome == "Bianca"){
    echo "<br><br>Esta pessoa não fooi criada ainda.";
 } else if($pessoa->nome == "Marcio"){
    echo "<br><br>Marcio já foi criado.";
 } else{
    echo "<br><br>Voçe não informou um nome válido.";
 }

?>
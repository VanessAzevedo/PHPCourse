<?php
$idade = 16;
$responsável = true;

//cadeia de If e Else:
if ($idade >= 18){
    echo "Entra na festa!";
} else{
    if ($responsável == true){
        echo "Entra na festa, apesar de ser menor.";
    } else{
        echo "Barrado, pois é menor de idade.";
    }
}
?>
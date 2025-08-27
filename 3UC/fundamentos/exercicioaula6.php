<?php
//BANCO DE DADOS
$produtos = array(
    array(
        "Nome" => "Shampoo",
        "Marca" => "L'Oreal",
        "Preço" => 18.00
    ),
    array(
        "Nome" => "Condicionador",
        "Marca" => "L'Oreal",
        "Preço" => 51.50
    ),
    array(
        "Nome" => "Creme para pentear",
        "Marca" => "Salonline",
        "Preço" => 34.50
    )
    );
    echo $produtos[0] ["Nome"] . "<br>";
    echo $produtos[0] ["Marca"] . "<br>";
    echo $produtos[0] ["Preço"] . "<br>";
    echo $produtos[1] ["Nome"] . "<br>";
    echo $produtos[1] ["Marca"] . "<br>";
    echo $produtos[1] ["Preço"] . "<br>";

    foreach ($produtos as $rodutos){
        echo $rodutos["Nome"] . "<br>";
        echo $rodutos["Preço"] . "<br>";
        echo $rodutos["Marca"] . "<br>";
    }


?>
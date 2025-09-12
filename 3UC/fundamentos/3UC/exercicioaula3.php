<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>

<body>
    <h1>
        Apenas um excercício
    </h1>
    <?php
    $nome = ["Rayane", "Vanessa"];
    $nome_procurado = "Vanessa";
    echo "<h2>Dados Cadastrais</h2>";
    for ($x = 0; $x < count($nome); $x++) {
        echo "<p>Nome: $nome[$x]</p>";
        if ($nome[$x] == $nome_procurado) {
            echo "<span> (Já tem experiência) </span>";
        }
    }
    ?>


</body>

</html>
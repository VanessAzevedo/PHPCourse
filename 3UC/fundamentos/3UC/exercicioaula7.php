<?php
//RECEBER AS VARIÁVEIS:
$nome = $_GET["nome"];
$tel = $_GET["tel"];
$email = $_GET["email"];
$nascimento = $_GET["nascimento"];
$endereco = $_GET["endereco"];

//APRESENTAR OS DADOS:
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apresentação dos Dados</title>
</head>
<body>
    <h1>Apresentação dos Dados</h1>
    <p>Nome: <?php echo $nome; ?> </p>
    <p>Telefone: <?php echo $tel; ?> </p>
    <p>E-mail: <?php echo $email; ?> </p>
    <p>Nascimento: <?php echo $nascimento; ?> </p>
</body>
</html>
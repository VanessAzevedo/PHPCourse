<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h3>Adicionar Produtos</h3>
    <form method="POST" action="inserirProduto.php">
        <p>Nome do Produto: <input type="text" name="nome"></p><br>
        <p>Quantidade em Estoque: <input type="number" name="estoque"></p><br>
        <p>Preço Unitário: <input type="number"  step="0.1" name="preco"></p><br>
        <p>Tamanho: <input type="text" name="tamanho"></p><br>
        <p>Nome da Imagem: <input type="text" name="imagem"></p><br>
        <input type="submit" value="Enviar" name="Enviar">
</body>
</html>
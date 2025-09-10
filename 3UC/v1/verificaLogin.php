<?php
$usuario = $_POST['nome'];
$senha = $_POST['senha'];

//CONEXÃO COM O BANCO:
$servidor = 'localhost';
$user_banco = 'root';
$senha_banco = '';
$banco = 'projetoloja';

$conexão = new mysqli($servidor, $user_banco, $senha_banco, $banco);

// **** VERIFICANDO LOGIN ****



?>
<?php
//CONEXÃO COM O BANCO DE DADOS:
$servidor = "localhost";
$user_banco = "root";
$senha_banco = "";
$banco = "senac";

$conexão = new mysqli($servidor, $user_banco, $senha_banco, $banco);

//EXECUTAR O COMANDO PARA LISTAR:
$listar = "SELECT * FROM alunos";
$listarexec = $conexão->query($listar);
if ($listarexec->num_rows > 0){
    echo "<table>";
        echo "
        <tr>
            <th>Nome</th>
            <th>Curso</th>
        </tr>"; //"<br>" . $linha['nome'] . " | " . $linha['curso'];
        while($linha = $listarexec->fetch_assoc()){ //fetch_assoc é uma busca associativa
            echo "<tr><td>" . $linha['nome'] . "</td>";
            echo "<td>" . $linha['curso'] . "<td><tr>";                                                                                                                                                                                                                                                                                                                                  
    }
    echo "</table>";
} else {
    echo "<br>Dados não encontrados.";
}








?>
<?php
    //ABRINDO UMA SESSÃO:
    session_start();

    $_SESSION['nome'] = "Vanessa"; //DIFERENTE DE GET E POST, O SESSION É TEMPORÁRIO

    echo $_SESSION['nome'];

    //FECHANDO A SESSÃO:
    session_destroy(); //A SESSÃO FOI DESTRUÍDA


?>
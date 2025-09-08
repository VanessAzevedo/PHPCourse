<?php
    class Login{
        public $usuario;
        public $senha;

        function __construct($usuario, $senha)
        {
            $this->usuario = $usuario;
            $this->senha = $senha;
        }

        function verifica_login($user, $pwd){
            if($this->usuario == $user && $this->senha == $pwd){
                echo "Logado no sistema.";
            } else{
                echo "Usuário ou senha incorreta.";
            }
        }
    }

    $x = "Marcio";
    $y = "senha123";

    $login = new Login("Marcio", "senha123");
    $login->verifica_login($x, $y);

?>

<?php
    $usuarios = ['user' => 'admin', 'pass' => 'admin'];

    function logar($user, $pass) {
        global $usuarios;

        foreach ($usuarios as [$usuario, $password]) {
            if($usuario === 'admin') {
                echo "Usuário encontrado!";
            } else {
                echo "Nada foi encontrado!";
            }
            // echo $usuario;
        }
    };

?>
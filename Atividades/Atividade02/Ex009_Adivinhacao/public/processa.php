<?php

session_start();

if ($_POST['numero']) {
    $_SESSION['numero'] = $_POST['numero'];
}

$numeroAleatorio = rand(0, 3);

function adivinhar($numero) {

    $tentativas = 0;
    
    global $numeroAleatorio;

    if($numero == $numeroAleatorio) {
        echo "Você digitou: $numero e  acertou o número aleatório: $numeroAleatorio! <br>
        O número de tentativas foi de: $tentativas.";
        exit();
    } else {
        echo "Você errou! Tente novamente!";
        $tentativas++;
    }
}

?>
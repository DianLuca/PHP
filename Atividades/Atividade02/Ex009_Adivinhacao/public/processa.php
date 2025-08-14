<?php
function adivinhar($numero) {
    $numeroAleatorio = rand(0, 100);
    $tentativas = 0;

    echo $numeroAleatorio;

    while (true){
        

        if ($numero == $numeroAleatorio) {

            echo "Você acertou!";
            break;
        }
        break;
        // if ($numero == $numeroAleatorio){
        // } else {
            
        // }
    }
}

?>
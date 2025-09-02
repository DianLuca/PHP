<?php

function adivinhar($numero, $numeroAleatorio, $tentativas) {
    

    if($numero == $numeroAleatorio) {
        return "Você digitou: $numero e  acertou o número aleatório: $numeroAleatorio! 
        <br> O número de tentativas foi de: $tentativas";
    } 
    
    elseif($numero < $numeroAleatorio) {
        return "Tente um número maior.";
    } 
    
    elseif ($numero > $numeroAleatorio){
        return "Tente um número menor.";
    }
    
}

?>
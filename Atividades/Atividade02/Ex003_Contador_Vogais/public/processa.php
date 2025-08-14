<?php

function contadorVogais($texto) {

    $textoMinusculo = strtolower($texto);
    
    $numeroVogais = 0;
    // Recebe o elementos de $texto fatia a string com count_chars 
    // retornando $i -> cada elemento e $numero -> ocorrências
    foreach(count_chars($textoMinusculo, 1) as $i => $numero){
        

        if(chr($i) == "a"){
            $numeroVogais += $numero;
        }

        if(chr($i) == 'e'){
            $numeroVogais += $numero;
        }

        if(chr($i) == "i"){
            $numeroVogais += $numero;
        }

        if(chr($i) == 'o'){
            $numeroVogais += $numero;
        }

        if(chr($i) == 'u'){
            $numeroVogais += $numero;
        }

    };

    echo "No texto '<strong>$texto</strong>' existem $numeroVogais vogal(is).";

}


?>
<?php

function contadorVogais($texto) {

    $textoMinusculo = trim(strtolower($texto));
    
    $numeroVogais = 0;
    // Recebe o elementos de $textoMinusculo e fatia a string com count_chars 
    // retornando $i -> cada elemento e $numero -> ocorrências
    foreach(count_chars($textoMinusculo, 1) as $i => $numero){
        

        if(chr($i) == "a"){
            $numeroVogais += $numero;
            echo "A letra '" . chr($i) . "' aparece " . $numero . "<br>";
        }
        
        if(chr($i) == 'e'){
            $numeroVogais += $numero;
            echo "A letra '" . chr($i) . "' aparece " . $numero . "<br>";
        }

        if(chr($i) == "i"){
            $numeroVogais += $numero;
            echo "A letra '" . chr($i) . "' aparece " . $numero . "<br>";
        }

        if(chr($i) == 'o'){
            $numeroVogais += $numero;
            echo "A letra '" . chr($i) . "' aparece " . $numero . "<br>";
        }

        if(chr($i) == 'u'){
            $numeroVogais += $numero;
            echo "A letra '" . chr($i) . "' aparece " . $numero . "<br>";
        }

    };

    echo "No texto '<strong>$texto</strong>' existem $numeroVogais vogal(is).";

}


?>
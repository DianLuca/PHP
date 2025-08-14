<?php

function listarNumeroPrimos($numero){
    if($numero > 1){
        for ($num = 2; $num <= $numero; $num++){
            $primo = true;

            for($i = 2; $i <= sqrt($num); $i++) {
                if($num % $i == 0) {
                    $primo = false;
                    break;
                }
            }

            if ($primo) {
                echo $num . ", ";
            }
        }

    } else {
        echo "Não há números primos menores que 2.";
    }
}

?>
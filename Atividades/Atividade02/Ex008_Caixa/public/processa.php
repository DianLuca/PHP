<?php

function sacar($valor){

    $resto = 0;

    if ($valor > 100) {
        $numNotas = intdiv($valor, 100);
        $resto = $valor % 100;
        echo "Foi sacado $numNotas nota de 100;<br>";
    }

    if ($resto >= 50) {
        $numNotas = intdiv($resto, 50);
        $resto = $resto % 50;
        echo "Foi sacado $numNotas nota de 50;<br>";
    }

    if ($resto >= 20) {
        $numNotas = intdiv($resto, 20);
        $resto = $resto % 20;
        echo "Foi sacado $numNotas nota de 20;<br>";
    }

    if ($resto >= 10) {
        $numNotas = intdiv($resto, 10);
        $resto = $resto % 10;
        echo "Foi sacado $numNotas nota de 10;<br>";
    }

    if ($resto >= 5) {
        $numNotas = intdiv($resto, 5);
        $resto = $resto % 5;
        echo "Foi sacado $numNotas nota de 5;<br>";
    }

    echo "Não foi possuí sacar o valor total de R$" . number_format($valor, 2, ',', '.') . " devido a falta de cédulas compativeís.
    <br>O valor restante: R$". number_format($resto, 2, ',', '.');

}


?>
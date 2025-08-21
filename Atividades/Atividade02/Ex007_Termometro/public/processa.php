<?php


function conversor($numero, $temperatura) {
    $temperaturaCelsius = 0;
    $temperaturaFahrenheit = 0;
    $temperaturaKelvin = 0;
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        switch($temperatura) {
            case 'Celsius' :
                $temperaturaFahrenheit = $numero * 1.8 + 32;
                $temperaturaKelvin = $numero + 273.15;
                echo $numero . "°C equivalente a " . number_format($temperaturaFahrenheit, 2, ',', '.') . "°F<br>";
                echo $numero . "°C equivalente a  " . number_format($temperaturaKelvin, 2, ',', '.') . "K<br>";
                break;
            case 'Fahrenheit' :
                $temperaturaCelsius = ($numero - 32) * (5/9);
                $temperaturaKelvin = ($numero - 32) * (5/9) + 273.15;
                echo $numero . "°F equivalente a " . number_format($temperaturaCelsius, 2, ',', '.') . "°C<br>";
                echo $numero . "°F equivalente a  " .number_format($temperaturaKelvin, 2, ',', '.') . "K<br>";
                break;
            case 'Kelvin' :
                $temperaturaFahrenheit = ($numero - 273.15) * 1.8 + 32;
                $temperaturaCelsius = $numero - 273.15;
                echo $numero . "K equivalente a " . number_format($temperaturaCelsius, 2, ',', '.') . "°C<br>";
                echo $numero . "K equivalente a " . number_format($temperaturaFahrenheit, 2, ',', '.') . "°F<br>";
                break;
            default:
                echo 'Selecione alguma das opções!';
                break;
        };
    }
}


?>
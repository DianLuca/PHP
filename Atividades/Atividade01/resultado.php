<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercício de Operadores Aritméticos</title>
</head>
<body>
    <header>
        <h1>Resultado da Operação</h1>
    </header>

    <div class="">
        <p>
            <?php

                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $operadores = htmlspecialchars($_POST['operadores']);
                    $numero = htmlspecialchars($_POST['numero']);
                    $numero1 = htmlspecialchars($_POST['numero1']);
                    
                    if(isset($operadores) && isset($numero) && isset($numero1)){

                        switch($operadores) {
                            case 'soma':
                                $soma = $numero + $numero1;
                                echo "O resultado de <strong>$numero + $numero1 = $soma</strong>";
                                break;
                            case 'subtracao':
                                $subtracao = $numero - $numero1;
                                echo "O resultado de <strong>$numero - $numero1 = $subtracao</strong>";
                                break;
                            case 'multiplicacao':
                                $multiplicacao = $numero * $numero1;
                                echo "O resultado de <strong>$numero x $numero1 = $multiplicacao</strong>";
                                break;
                            case 'divisao':
                                if($numero1 == 0) {
                                    echo "Não é possível realizar divisão por 0;";
                                } else {
                                    $divisao = $numero / $numero1;
                                    echo "O resultado de <strong>$numero &divide; $numero1 = $divisao</strong>";
                                }
                                break;
                            default:
                                echo 'Nenhuma operação foi selecionada, tente novamente!';
                                break;
                        };

                    } else {

                        echo 'Impossível de realizar as operações! Nada foi enviado.';

                    }

                }
            ?>
        </p>

        <a href="index.php">Voltar</a>
    </div>

    <script src="js/script.js"></script>
</body>
</html>
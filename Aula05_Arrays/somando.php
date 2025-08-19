<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Somando Notas</h1>
    </header>

    <main>
        <?php
            echo '<hr>';
            
            echo '<h2>7 - Somando</h2>';
            
            // Array associativo com nome e quatro notas
            $alunos = [
                'aluno' => 'Maria', 'Nota1' => 10, 'Nota2' => 10, 'Nota3' => 10, 'Nota4' => 10
            ];
            
            // Exibe a array completo
            echo '<pre>';
            print_r($alunos);
            echo '</pre>';
            
            // Inicializa a variável que armazenará a soma das notas
            $soma_notas = 0;
            // Loop que percorre o array inteiro
            foreach ($alunos as $chave => $valor) {
                // Verifica se o valor atual é númerico (para somar apenas as notas)
                if (is_numeric($valor)) {
                    $soma_notas += $valor;
                }
            }

            echo '<hr>';
            print_r("Soma de Notas: " . $soma_notas);
            echo '<hr>';
        ?>  
    </main>

</body>
</html>
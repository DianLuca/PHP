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
        <h1>Extraíndo para criar um array: compact()</h1>
    </header>

    <main>
        <?php
            echo '<hr>';
            
            echo '<h2>2 - Compact()</h2>';
            
            // Declaração de variáveis individuais
            $nome = 'Maria'; 
            $idade = 40; 
            $peso = 50.5;
            
            // A função compact() cria um array associativo com base nas variáveis informadas
            // As chaves do array serão os nomes das variáveis ('nome', 'idade' e 'peso') 
            // E os valores serão os valores dessas variáveis
            $array = compact('nome', 'idade', 'peso');
            
            // Exibe o array resultante no navegador, formatado para melhor visualização
            echo '<pre>';
            print_r($array); // Mostra o array: Array( [nome] => Maria [idade] => 40 [peso] => 50.5 )
            echo '</pre>';
        ?>
    </main>

</body>
</html>
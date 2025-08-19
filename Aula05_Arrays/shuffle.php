<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- 
        A função shuffle() só funciona corretamente com arrays indexados (numéricos).
        Quando você usa shuffle() em um array associativo, o PHP:
        Descarta as chaves e Reorganiza apenas os valores, convertendo o array em um array
        indexado (com índices numéricos de ) em diante).
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Embaralhando um array: shuffle()</h1>
    </header>

    <main>
        <?php
            echo '<hr>';
            
            echo '<h2>6 - Shuffle</h2>';
            
            $array = [
                'nome' => 'Maria', 'idade' => 40, 'peso' => 50.5
            ];
            
            // Exibe a array 
            echo '<pre>';
            print_r($array);
            echo '</pre>';
            
            // Aplica a função shuffle() para embaralhamento os elementos do array
            shuffle($array); // IMPORTANTE: isso reomve as chaves associativas!
            
            echo '<hr>';
            
            // Exibe o array após embaralhamento
            echo "<pre>";
            print_r($array);
            echo "</pre>";
            
            echo '<hr>';
        ?>
    </main>

</body>
</html>
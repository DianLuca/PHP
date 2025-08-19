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
        <h1>Busca Aleatória: array_rand()</h1>
    </header>

    <main>
        <?php
            echo '<hr>';
            
            echo '<h2>5 - Array_rand()</h2>';
            
            $array = [
                'nome' => 'Maria', 'idade' => 40, 'peso' => 50.5
            ];
            
            // Exibe a array original
            echo '<pre>';
            print_r($array);
            echo '</pre>';
            
            // array_rand($array) retorna uma chave aleatória do array 
            // Em seguida, usamos essa chave para acessar o valor correspondente
            $busca_aleatoria = $array[array_rand($array)];
            
            echo '<hr>';
            
            // Exibe o valor aleatório escolhido do array
            echo '<pre>';
            print_r($busca_aleatoria);
            echo '</pre>';
            
            echo '<hr>';
        ?>
    </main>

</body>
</html>
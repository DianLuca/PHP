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
        <h1>Concatenando o array com Implode()</h1>
    </header>

    <main>
        <?php
            echo '<hr>';
            
            echo '<h2>3 - Implode()</h2>';
            
            // Cria um array associativo com três elementos
            $array = [
                'nome' => 'Maria', 'idade' => 40, 'peso' => 50.5
            ];
            
            // Exibe o conteúdo array original de forma formatada
            echo '<pre>';
            print_r($array);
            echo '</pre>';
            
            // array_filter() remove qualquer valor "falso" (como null, 0, string vazia, etc.)
            // Implode(' ', ...) junta os valores do array resultante em uma única string, separada por espaço
            $registro = implode(' ', array_filter($array));
            
            echo '<hr>';
            
            // Exibe a  string concatenada
            print_r("Valor extraído: " . $registro);
            
            echo '<hr>';
        ?>
    </main>

</body>
</html>
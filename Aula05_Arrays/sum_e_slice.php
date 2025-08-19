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
        <h1>Somando Notas com sum() e slice()</h1>
    </header>

    <main>
        <?php
            echo '<hr>';
            
            echo '<h2>8 - Dois alunos com 4 notas</h2>';
            
            // Array associativo com nome e quatro notas
            $alunos = [
                ['aluno' => 'Maria', 'Nota1' => 10, 'Nota2' => 9, 'Nota3' => 8, 'Nota4' => 10],
                ['aluno' => 'João', 'Nota1' => 7, 'Nota2' => 8, 'Nota3' => 6, 'Nota4' => 9]
            ];
            
            // Loop que percorre cada aluno do array
            foreach ($alunos as $aluno) {
                // Captura o nome do aluno
                $nome = $aluno['aluno'];

                // Extrai apenas as notas (ignorando a primeira chave, neste caso o nome do aluno)
                $notas = array_slice($aluno, 1); // retorna um array com 4 notas

                $soma_notas = array_sum($notas);

                $media = $soma_notas / count($notas);

                echo "<h3>Aluno: $nome</h3>";
                echo "Notas: " . implode(', ', $notas) . "<br>";
                echo "Soma: $soma_notas<br>";
            }

            echo "Média: ". number_format($media, 2, ',', '.')."<hr>"
        ?>  
    </main>

</body>
</html>
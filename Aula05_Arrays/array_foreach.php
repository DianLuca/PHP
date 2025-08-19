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
        <h1>Somando Notas com foreach()</h1>
    </header>

    <main>
        <?php
            echo '<hr>';
            
            echo '<h2>9 - Dois alunos com 4 notas (usando foreach)</h2>';
            
            // Array associativo com nome e quatro notas
            $alunos = [
                ['aluno' => 'Maria', 'Nota1' => 10, 'Nota2' => 9, 'Nota3' => 8, 'Nota4' => 10],
                ['aluno' => 'João', 'Nota1' => 7, 'Nota2' => 8, 'Nota3' => 6, 'Nota4' => 9]
            ];
            
            // Loop que percorre cada aluno do array
            foreach ($alunos as $aluno) {
                // Captura o nome do aluno
                $nome = $aluno['aluno'];

                // Inicializa variáveis para soma das notas e contagem
                $soma_notas = 0;
                $qtd_notas = 0;

                // Prcorre os dados de caa aluno (chaves e valores)
                foreach ($aluno as $chave => $valor) {
                    // Ignora a chave 'nome' e soma apenas valores númericos
                    if ($chave !== 'nome' && is_numeric($valor)) {
                        $soma_notas += $valor; // soma das notas
                        $qtd_notas++; // conta quantas notas foram somadas
                    }
                }

                // Calcula a média das notas
                $media = $soma_notas / $qtd_notas;

                // Exibe os dados do aluno
                echo "<h3>Aluno: $nome</h3>";
                echo "Soma: $soma_notas<br>";

                // Exibe a média de 2 casa decimais, vírgula como separador decimal e ponto como separador de milhar
                echo "Média: ". number_format($media, 2, ',', '.')."<hr>";
            }

        ?>  
    </main>

</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
</head>
<body>
    <h1>Cadastro de Aluno</h1>

    <!-- Formulário que envia os dados para esta mesma página via método POST -->
    <form action="" method="post">
        <label for="name">Nome do Aluno:</label><br>
        <!-- Campo para digitar o nome, obrigatório (required) -->
        <input type="text" name="nome" id="name" required><br>

        <label for="nota">Nota 1:</label><br>
        <!-- Campo para digitar nota 1, aceita números decimais, obrigatório -->
        <input type="number" name="nota1" step="0.01" id="nota" required><br>
        
        <label for="nota_1">Nota 2:</label><br>
        <input type="number" name="nota2" step="0.01" id="nota_1" required><br>

        <label for="nota_2">Nota 3:</label><br>
        <input type="number" name="nota3" step="0.01" id="nota_2" required><br>

        <label for="nota_3">Nota 4:</label><br>
        <input type="number" name="nota4" step="0.01" id="nota_3" required><br>

        <!-- Botão para enviar o formulário -->
        <input type="submit" value="Cadastrar">
    </form>

    <?php
    // Verifica s o formulário foi enviado via método POST
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Cria um array associativo $aluno com os dados recebidos do formulário
        $aluno = [
            'nome' => $_POST['nome'], // Pega o nome digitando pelo usuário
            'nota1' => (float) $_POST['nota1'], // Converte a nota 1 para número decimal
            'nota2' => (float) $_POST['nota2'], // Converte a nota 2 para número decimal
            'nota3' => (float) $_POST['nota3'], // Converte a nota 3 para número decimal
            'nota4' => (float) $_POST['nota4'] // Converte a nota 4 para número decimal
        ];

        echo "<hr>"; // Linha horizontal para separar visualmente o resultado

        echo "<h2>Resultado: </h2>"; // Título da seção de resultado

        // Exibe o nome do aluno, usado htmlspecialchars para evitar problemas de segurança
        echo "<h3> Aluno: " . htmlspecialchars($aluno['nome']) . "</h3>";

        // Inicializa as variáveis
        $soma_notas = 0;
        $qtd_notas = 0;

        // Loop que percorre cada elemento do array $aluno
        foreach ($aluno as $chave => $valor) {
            // Verifica se a chave NÃO é 'nome' e se o valor é númerico (nota)
            if ($chave !== "nome" && is_numeric($valor)) {
                // Exibe o nome da nota e valor digitado
                echo "$chave: $valor<br>";
                
                // Soma a variável $soma_notas
                $soma_notas += $valor;

                // Icrementa a quantidade de notas
                $qtd_notas++;
            }
        }

        // Calcula a média
        $media = $soma_notas / $qtd_notas;

        // Exibe a soma das notas
        echo "<br><strong>Soma das Notas: </strong> $soma_notas<br>";

        // Exibe a média de 2 casa decimais, vírgula como separador decimal e ponto como separador de milhar
        echo "Média: ". number_format($media, 2, ',', '.')."<hr>";
    }
    ?>  
</body>
</html>
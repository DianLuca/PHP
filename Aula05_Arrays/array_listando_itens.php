<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
</head>
<body>
    <?php
    session_start();

    // inicializa o array de alunos na sessão, se ainda não existir
    if(!isset($_SESSION['alunos'])) {
        $_SESSION['alunos'] = [];
    }

    // Verifica s o formulário foi enviado via método POST
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Cria um novo aluno com os dados enviados
        $novo_aluno = [
            'nome' => $_POST['nome'], // Pega o nome digitando pelo usuário
            'nota1' => (float) $_POST['nota1'], // Converte a nota 1 para número decimal
            'nota2' => (float) $_POST['nota2'], // Converte a nota 2 para número decimal
            'nota3' => (float) $_POST['nota3'], // Converte a nota 3 para número decimal
            'nota4' => (float) $_POST['nota4'] // Converte a nota 4 para número decimal
        ];

        // Adiciona à lista na sessão
        $_SESSION['alunos'][] = $novo_aluno;
    };

    // Se desejar limpar
    // session_destroy();
    // $_SESSION['alunos'][] = [];

    ?>

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

    <?php if (!empty($_SESSION['alunos'])): ?>
        <hr>
        <?php foreach($_SESSION['alunos'] as $aluno): ?>
            <h3><?= htmlspecialchars($aluno['nome']) ?></h3>
            <ul>
                <li>Nota 1: <?= $aluno['nota1'] ?></li>
                <li>Nota 2: <?= $aluno['nota2'] ?></li>
                <li>Nota 3: <?= $aluno['nota3'] ?></li>
                <li>Nota 4: <?= $aluno['nota4'] ?></li>
                <?php
                $soma = $aluno['nota1'] + $aluno['nota2'] + $aluno['nota3'] + $aluno['nota4'];
                $media = $soma / 4;
                ?>
                <li><strong>Soma:</strong><?= $soma ?></li>
                <li><strong>Média:</strong><?= number_format($media, 2, ',', '.') ?></li>
            </ul>
            <hr>
        <?php endforeach; ?>
    <?php endif; ?>  
</body>
</html>
<!-- 2. Sistema de Notas de Alunos
Crie um programa que leia o nome de um aluno e quatro notas.

Crie uma função que calcule a média e retorne se o aluno está Aprovado, em Recuperação ou Reprovado.
Use estruturas condicionais para determinar o resultado.
Permita que o programa cadastre vários alunos, mostrando o resultado individual de cada um.
 -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas de Alunos</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <header>
        <h1>Sistema de Notas</h1>
    </header>

    <main>
        <section>
            <form action="" method="post">
                <label for="nome">Insira o nome:</label>
                <input type="text" name="nome" id="nome" placeholder="João Silva">
                <label for="nota1">Digite a nota:</label>
                <input type="number" name="nota1" id="valor" placeholder="Ex.: 7">
                <label for="nota2">Digite a nota:</label>
                <input type="number" name="nota2" id="valor1" placeholder="Ex.: 7">
                <label for="nota3">Digite a nota:</label>
                <input type="number" name="nota3" id="valor2" placeholder="Ex.: 7">
                <label for="nota4">Digite a nota:</label>
                <input type="number" name="nota4" id="valor3" placeholder="Ex.: 7">
                <button type="submit">Adicionar Aluno</button>
            </form>
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Média</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    

                        <?php
                            include "public/processa.php";

                            $nome = htmlspecialchars($_POST['nome'] ?? "");
                            $nota1 = htmlspecialchars($_POST['nota1'] ?? 0);
                            $nota2 = htmlspecialchars($_POST['nota2'] ?? 0);
                            $nota3 = htmlspecialchars($_POST['nota3'] ?? 0);
                            $nota4 = htmlspecialchars($_POST['nota4'] ?? 0);

                            adicionarAluno($nome, $nota1, $nota2, $nota3, $nota4);
                        ?>

                </tbody>
            </table>
        </section>
    </main>

    <footer>
        <p>Atividade 02: Funções em PHP</p>
    </footer>
</body>
</html>
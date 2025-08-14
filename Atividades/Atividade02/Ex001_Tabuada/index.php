<!-- 1. Tabela de Tabuada
Desenvolva um programa em PHP que exiba a tabuada completa de 1 a 10.

Crie uma função que receba um número e exiba a tabuada desse número.
Use um laço de repetição externo para percorrer os números de 1 a 10, chamando a função para cada número.
Utilize estruturas de repetição aninhadas. -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Tabuada</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <header>
        <h1>Tabuada</h1>
    </header>

    <main>
        <section>
            <form action="" method="post">
                <label for="numero">Digite um número:</label>
                <input type="number" name="numero" id="valor" placeholder="Ex.: 1, 2,...">
                <button type="submit">CALCULAR</button>
            </form>
            <p>
                <?php
                    include "public/processa.php";
                    $numero = htmlspecialchars($_POST['numero'] ?? 0);

                    if((int)$numero){
                        tabuada($numero);
                    } else {
                        echo "Digite um número para começar.";
                    }
                ?>
            </p>
        </section>
    </main>

    <footer>
        <p>Atividade 02: Funções em PHP</p>
    </footer>
</body>
</html>
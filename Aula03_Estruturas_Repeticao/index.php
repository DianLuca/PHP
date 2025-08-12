<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Estrutura de Repeticação em PHP</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <header>
        <h1>Exemplo de Estruturas de Repetição em PHP</h1>
    </header>

    <main>
        <!-- Seção que exibe o loop FOR -->
        <section>
            <h2>Estrutura FOR</h2>
            <div class="caixa">
                <?php
                    // Inclui o arquivo PHP que contém as funções 
                    // Em seguida, executa a função que exibe o loop FOR
                    include "public/processa.php";
                    exibirFor();
                ?>
            </div>
        </section>

        <!-- Seção que exibe o loop WHILE -->
        <section>
            <h2>Estrutura WHILE</h2>
            <div class="caixa">
                <?php
                    // Chama a função que exibe o loop While
                    exibirWhile();
                ?>
            </div>
        </section>

        <!-- Seção que exibe o loop FOREACH -->
        <section>
            <h2>Estrutura FOREACH</h2>
            <div class="caixa">
                <?php
                    // Chama a função que exibe o loop FOREACH
                    exibirForeach();
                ?>
            </div>
        </section>
    </main>

    <footer>
        <p>Exemplo didático de PHP &copy; 2025</p>
    </footer>
</body>
</html>
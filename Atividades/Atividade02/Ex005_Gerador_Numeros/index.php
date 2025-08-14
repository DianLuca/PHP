<!-- 5. Gerador de Números Primos
Crie um programa que gere todos os números primos de 1 até um número informado pelo usuário.

Crie uma função que verifique se um número é primo.
Use um laço de repetição para percorrer todos os números e exiba apenas os primos.
O programa deve perguntar se o usuário deseja gerar novamente ou sair.
 -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Números Primos</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <header>
        <h1>Números Primos</h1>
    </header>

    <main>
        <section>
            <form action="" method="post">
                <label for="numero">Digite um número:</label>
                <input type="number" name="numero" id="valor" placeholder="Ex.: 21">
                <button type="submit">CALCULAR</button>
            </form>
            <p>
                <?php
                    include "public/processa.php";
                    $numero = htmlspecialchars($_POST['numero'] ?? 0);

                    if((int)$numero){
                        listarNumeroPrimos($numero);
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
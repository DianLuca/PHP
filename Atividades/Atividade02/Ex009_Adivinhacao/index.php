<!-- 9. Jogo de Adivinhação
Crie um jogo onde o computador gera um número aleatório de 1 a 100 e o usuário deve adivinhar.

Crie uma função que valide o palpite e retorne se o número é maior, menor ou correto.
Use laços de repetição para permitir várias tentativas.
Mostre ao final quantas tentativas o jogador precisou para acertar.
 -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de Adivinhação</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <header>
        <h1>Jogo de Adivinhação</h1>
    </header>

    <main>
        <section>
            <form action="" method="post">
                <label for="num">Digite um número entre 0 e 100:</label>
                <input type="number" name="numero" id="num" placeholder="Ex.: 10">
                <button type="submit">Adivinhar</button>
            </form>
            <p>
                <?php
                    include "public/processa.php";
                    $numero = htmlspecialchars($_POST['numero'] ?? 0);

                    if((int)$numero){
                        adivinhar($numero);
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
<!-- 3. Contador de Vogais em uma Frase
Desenvolva um programa que conte quantas vogais existem em uma frase digitada pelo usuário.

Crie uma função que receba a string e retorne a contagem de cada vogal.
Use laços de repetição para percorrer a string.
Exiba ao final quantas vezes cada vogal aparece.
 -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Vogais em uma Frase</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <header>
        <h1>Contador de Vogais</h1>
    </header>

    <main>
        <section>
            <form action="" method="post">
                <label for="texto">Digite um texto:</label>
                <input type="text" name="texto" id="valor" placeholder="Ex.: Teste">
                <button type="submit">Verificar</button>
            </form>
            <p>
                <?php
                    include "public/processa.php";
                    $texto = htmlspecialchars($_POST['texto'] ?? '');

                    if($texto){
                        contadorVogais($texto);
                    } else {
                        echo "Digite algo para começar.";
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
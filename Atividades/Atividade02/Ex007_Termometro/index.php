<!-- 7. Conversor de Temperaturas
Crie um programa que converta temperaturas entre Celsius, Fahrenheit e Kelvin.

Crie funções separadas para cada tipo de conversão.
Peça ao usuário qual conversão deseja fazer e qual valor deseja converter.
Utilize condicionais para escolher a função correta.
Permita que o usuário repita quantas conversões quiser.
 -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Temperaturas</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <header>
        <h1>Conversor de Temperaturas</h1>
    </header>

    <main>
        <section>
            <form action="" method="post">
                <label for="numero">Digite um número:</label>
                <input type="number" name="numero" id="valor" placeholder="Ex.: 1, 2,...">
                <button type="submit">Converter</button>
            </form>
            <p>
                <?php
                    include "public/processa.php";
                    $numero = htmlspecialchars($_POST['numero'] ?? 0);

                    if((int)$numero){
                        conversor($numero);
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
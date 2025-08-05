<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Primeiro PHP</title>
    <style>
        /* Estilizando a página */
        body {
            font-family: Arial;
            background-color: #f0f0f0;
            text-align: center;
        }
        input, button {
            padding: 8px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <h1>Bem-vindo ao PHP</h1>
    
    <!-- 
        Formulário HTML
        - method='GET': envia os dados pela URL (ex: ?mensagem=texto)
        - action='': significa qu o formulário será enviado para a própria página
    -->

    <form action="" method="get">
        <label for="mensagem">Digite sua mensagem:</label><br>

        <input type="text" name="mensagem" id="mensagem" required>

        <button type="submit">Enviar</button>
    </form>
    <p>

        <?php
            // Início do código PHP

            // Verifica se existe uma mensagem enviada pelo formulário 
            // A variável $_GET['mensagem'] page o valor enviado na URL
            if (isset($_GET['mensagem'])) {
                // Armazena o que foi digitado na variável $mensagem 
                // A função htmlspecialchars() serve para proteger contra códigos
                // maliciosos (evita que alguém envie HTML ou JS)
                $mensagem = htmlspecialchars($_GET['mensagem']);

                // Exibe na tela a mensagem digitada pelo usuário
                echo "Você digitou: <strong>$mensagem</strong>";
            } else {
                // Se nenhuma mensagem foi enviada ainda, mostra essa frase padrão
                echo "<h1>Olá, mundo! Este é meu primeiro código em PHP.</h1>";

            }

            // Fim do código PHP
        ?>
    </p>
</body>
</html>
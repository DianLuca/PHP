<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <!-- Link para o CSS externo -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Envie sua mensagem</h1>

    <div class="caixa">
        <form action="processa.php" id="meuFormulario" method='POST'>
            <label for="mensagem">Digite sua mensagem</label>
            <input type="text" name="mensagem" id="mensagem" placeholder='Ex.: Olá Mundo!'><br>
            <span></span><br>
            <button type="submit">Enviar</button>
        </form>
    </div>

    <!-- Link para o JS externo -->
    <script src='js/script.js' defer></script>
</body>
</html>
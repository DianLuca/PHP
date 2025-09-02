<!-- 9. Jogo de Adivinhação
Crie um jogo onde o computador gera um número aleatório de 1 a 100 e o usuário deve adivinhar.

Crie uma função que valide o palpite e retorne se o número é maior, menor ou correto.
Use laços de repetição para permitir várias tentativas.
Mostre ao final quantas tentativas o jogador precisou para acertar.
 -->
<?php

session_start();
include "public/processa.php";

$resultado = '';

// Para gerar o número aleatório e salvar
if (!isset($_SESSION['numeroAleatorio'])) {
    $_SESSION['numeroAleatorio'] = rand(1, 100);
}

// Para salvar o número de tentativas e enviar o valor salvo junto da função
if(!isset($_SESSION['tentativas'])) {
    $_SESSION['tentativas'] = 0;
}

// Iniciando as variáveis necessárias
$numeroAleatorio = $_SESSION['numeroAleatorio'];
$tentativas = $_SESSION['tentativas']++;


if($_SERVER['METHOD_REQUEST'] = 'POST') {
    if(isset($_POST['numero'])) {
        $numero = htmlspecialchars($_POST['numero']);

        if((int)$numero){
            $resultado = adivinhar($numero, $numeroAleatorio, $tentativas);
        } else {
            $resultado = "Digite um número para começar.";
        }
    }

    // Encerrando a sessão e gerando um npvp número
    if(isset($_POST['resetar'])){
        unset($_SESSION['numeroAleatorio']);
        unset($_SESSION['tentativas']);
        header("Location:index.php");
        exit;
    }
}

?>

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
                <label for="num">Digite um número entre 1 e 100:</label>
                <input type="number" name="numero" id="num" min='1' max='100' placeholder="Ex.: 10">
                <button type="submit">Adivinhar</button>
            </form>
            <form action="" method="post">
                <input type="hidden" name="resetar">
                <button type="submit">Resetar</button>
            </form>

            <?php if ($resultado): ?>
                <p><strong><?php echo $resultado; ?></strong></p>
            <?php endif; ?>
        </section>
    </main>

    <footer>
        <p>Atividade 02: Funções em PHP</p>
    </footer>
</body>
</html>
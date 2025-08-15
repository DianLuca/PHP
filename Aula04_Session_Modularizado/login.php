<?php
// Inicia sessão para verificar se já está logado
session_start();

// Se já estiver logado, redireciona para área restrita
if(isset($_SESSION['usuario'])) {
    header("Location: restrita.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login com Sessão</title>
</head>
<body>
    <h1>Login</h1>

    <!-- Exibe mensagem de erro se existir -->
    <?php if (isset($_SESSION['erro'])):?>
    <p style='color=red;'><?php echo $_SESSION['erro']; unset($_SESSION['erro']); ?></p>
    <?php endif; ?>

    <!-- Formulário envia para valida.php -->
    <form action="valida.php" method="post">
        <label for="user">Usuário:</label><br>
        <input type="text" name="usuario" id="user" required><br><br>

        <label for="pass">Senha:</label><br>
        <input type="text" name="senha" id="pass" required><br><br>

        <button type="submit">Entrar</button>
    </form>
</body>
</html>
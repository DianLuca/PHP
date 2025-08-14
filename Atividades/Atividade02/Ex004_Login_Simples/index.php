<!-- 4. Sistema de Login Simples
Implemente um programa de login em PHP.

Armazene um pequeno array com usuários e senhas.
Crie uma função para verificar se o login e a senha estão corretos.
Use estruturas condicionais para validar o acesso.
Permita três tentativas de login antes de encerrar o programa.
 -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login Simples</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <header>
        <h1>Login</h1>
    </header>

    <main>
        <section>
            <form action="" method="post">
                <label for="login">Digite o login:</label>
                <input type="text" name="usuario" id="login" placeholder="Ex.: Ze_Pequeno">
                <label for="senha">Digite a senha:</label>
                <input type="password" name="pass" id="senha" placeholder="Ex.: PegaAGalinhaLá">
                <button type="submit">ENTRAR</button>
            </form>
            <p>
                <?php
                    include "public/processa.php";
                    $user = htmlspecialchars($_POST['usuario'] ?? '');
                    $pass = htmlspecialchars($_POST['pass'] ?? '');

                    if($user && $pass){
                        logar($user, $pass);
                    } else {
                        echo "Usuário e senha incorretos!";
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
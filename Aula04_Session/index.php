<?php
// Inicia a sessão (sempre deve estar no topo da página antes de qualquer HTML)
session_start();

// Verifica se o nome já foi enviado pelo formulário 
if (isset($_POST['nome'])) {
    $_SESSION['nome'] = $_POST['nome'];
}

?> 

<!-- Formulário simples para o usuário digitar o nome -->
<form method="post">
    <label>Digite seu nome:</label>
    <input type="text" name="nome" id="" placeholder="Ex.: João">
    <button type="submit">Enviar</button>
</form>



<?php
// Verifica se já existe um nome armazenado
if (isset($_SESSION['nome'])) {
    // Exibe uma mensagem com o nome armazenado
    echo "<p>Olá, ". $_SESSION['nome'] ."! Seja bem-vindo de volta!</p>";
}

?>
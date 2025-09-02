<?php
// Configurações de conexão
$host = "localhost"; // Servidor do banco
$user = "root";      // Usuário (padrão do XAMPP)
$pass = "";          // Senha
$db = "tarefas_db";  // NNome do banco

// Cria conexão
$conn = new mysqli($host, $user, $pass, $db);

// Verifica se ocorreu algum erro
if ($conn->connect_error){
    die("Erro na conexão:" . $conn->connect_error);
}

?>
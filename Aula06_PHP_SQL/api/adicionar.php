<?php

// Define que a resposta do servidor será enviada em formato JSON
// para que o JS saiba interpretar os dados.
header("Content-Type: application/json");

// Importando a conexão
include("../conexao/conexao.php");

/**
 * Lê o corpo da requisição HTTP (enviado via fetch no JS)
 * e converte de JSON para array associativo em PHP.
 */
$dados = json_decode(file_get_contents("php://input"), true);

/**
 * Extrai o campo "titulo" do array recebido e aplica uma
 * proteção contra SQL Injection, escapando caracteres perigosos.
 */
$titulo = $conn->real_escape_string($dados["titulo"]);

// Monta o comando SQL para inserir o novo título na tabela tarefas.
$sql = "INSERT INTO tarefas (titulo) VALUES ('$titulo')";
// Executa o comando SQL no banco de dados.
$conn->query($sql);

/**
 * Retorna para o JS um objeto JSON com os dados da
 * tarefa recém-criada: o ID gerado automaticamente (insert_id),
 * o título salvo e o status "concluida", inicialmente 0 (falso).
 */

echo json_encode(["id" => $conn->insert_id, "titulo" => $titulo, "concluida" => 0]);
?>
<!-- 6. Cadastro e Pesquisa de Produtos
Desenvolva um sistema simples para cadastrar produtos (nome e preço).

Use arrays para armazenar os produtos.
Crie funções para:
• Adicionar novo produto
• Listar todos os produtos
• Pesquisar produto por nome
• Utilize laços e condicionais para navegação em um menu de opções.
 -->
<?php
session_start();
include "public/processa.php";

$resposta;

if(!isset($_SESSION['produtos'])){
    $_SESSION['produtos'] = [];
}

$produtoNome = $_POST['nomeProduto'] ?? "";
$produtoPreco = $_POST['precoProduto'] ?? "";
$buscaProduto = $_GET['buscaProduto'] ?? "";


if($_SERVER['METHOD_REQUEST'] = 'POST') {
    if($produtoNome !== '' && $produtoPreco !== '') {
        $_SESSION['produtos'][] = cadastrarProduto($produtoNome, $produtoPreco); 
    } else {
        $resposta = "Não foi possível cadastrar o produto, todos os campos devem ser inseridos.";
    }
}

if($_SERVER['METHOD_REQUEST'] = 'GET') {
    if($buscaProduto !== "") {
        $respostaBusca = buscar($buscaProduto);   
    } else {
        $respostaBusca = "Produto não encontrado!";
    }
}

// session_destroy();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro e Pesquisa de Produtos</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <header>
        <h1>Cadastro e Pesquisa de Produtos</h1>
    </header>

    <main>
        <section>
            <form action="" method="post">
                <label for="nome">Digite o nome do Produto:</label>
                <input type="text" name="nomeProduto" id="nome" placeholder="Ex.: Goiaba">
                <label for="valor">Digite o valor:</label>
                <input type="number" name="precoProduto" step='0.01' id="valor" placeholder="Ex.: 1,30">
                <button type="submit">Cadastrar Produto</button>
            </form>
            <form action="" method="get">
                <label for="busca">Buscar Produto:</label>
                <input type="text" name="buscaProduto" id="busca" placeholder="Ex.: Maçã">
                <button type="submit">Buscar</button>
            </form>
            <div>
                <?php if (!empty($_SESSION['produtos'])): ?>
                    <?php apresentarProdutos(); ?>
                    <?php echo $resposta; ?>
                <?php endif;?>
            </div>
            <div>
                <?php if (!empty($_SESSION['produtos'])): ?>
                    <?php echo $respostaBusca ?>
                <?php //else: ?>
                    <?php //echo $resposta; ?>
                <?php endif;?>
            </div>
        </section>
    </main>

    <footer>
        <p>Atividade 02: Funções em PHP</p>
    </footer>
</body>
</html>
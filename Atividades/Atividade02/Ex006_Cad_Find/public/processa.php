<?php
require "produtos.php";

function cadastrarProduto($nome, $preco){

    if ($nome !== '' || $preco !== '') {
        $novo_produto = [
            'nome' => $nome,
            'preco' => (float) $preco
        ];
        return $novo_produto;
    } else {
        return "Não foi possível cadastrar!";
    }

};


function apresentarProdutos(){
    $produtos = $_SESSION['produtos'];
    // global $produtos;
    
    foreach ($produtos as $produto) {
        echo "<div class='produto'>
            <p>". $produto['nome'] . "</p>
            <p>". number_format($produto['preco'], 2, ',', '.')."</p>
        </div>";
    }
};

function buscar($nome) {
    $produtos = $_SESSION['produtos'];
    foreach($produtos as $produto) {
        if ($produto['nome'] === $nome ) {
            return "<div class='produto'>
                <p>". $produto['nome'] . "</p>
                <p>". number_format($produto['preco'], 2, ',', '.')."</p>
            </div>";
            break;
        };
    }
};

?>
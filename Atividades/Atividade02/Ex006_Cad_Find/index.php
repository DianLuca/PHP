<!-- 6. Cadastro e Pesquisa de Produtos
Desenvolva um sistema simples para cadastrar produtos (nome e preço).

Use arrays para armazenar os produtos.
Crie funções para:
• Adicionar novo produto
• Listar todos os produtos
• Pesquisar produto por nome
• Utilize laços e condicionais para navegação em um menu de opções.
 -->

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
                <label for="numero">Digite um número:</label>
                <input type="number" name="numero" id="valor" placeholder="Ex.: 1, 2,...">
                <button type="submit">CALCULAR</button>
            </form>
            <p>
                <?php
                    include "public/processa.php";
                    $numero = htmlspecialchars($_POST['numero'] ?? 0);

                    if((int)$numero){
                        tabuada($numero);
                    } else {
                        echo "Digite um número para começar.";
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
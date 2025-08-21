<!-- 8. Simulador de Caixa Eletrônico
Faça um programa que simule um caixa eletrônico, onde o usuário informa um valor para saque.

Crie uma função que calcule a quantidade de cada cédula (100, 50, 20, 10 e 5).
Use estruturas condicionais para decidir como entregar o menor número de cédulas.
Permita vários saques até o usuário encerrar o programa.
 -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador de Caixa Eletrônico</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <header>
        <h1>Caixa Eletrônico</h1>
    </header>

    <main>
        <section>
            <form action="" method="post">
                <label for="numero">Digite um número:</label>
                <input type="number" name="numero" id="valor" placeholder="Ex.: 1, 2,...">
                <button type="submit">Sacar</button>
            </form>
            <p>
                <?php
                    include "public/processa.php";
                    $numero = htmlspecialchars($_POST['numero'] ?? 0);

                    if((int)$numero){
                        sacar($numero);
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
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercício de Operadores Aritméticos</title>
</head>
<body>
    <header>
        <h1>Calculadora: Operadores Aritméticos</h1>
    </header>

    <div class="">
        <form action="resultado.php" method="post">
            <label for="valor">Digite o primeiro número:</label>
            <input type="number" name="numero" id="valor">
            <label for="valor1">Digite o segundo número:</label>
            <input type="number" name="numero1" id="valor1">
            <label for="operacoes">Escolha a operação:</label>
            <select name="operadores" id="operacoes">
                <option value="">--Selecione--</option>
                <option value="soma">Soma (+)</option>
                <option value="subtracao">Subtração (-)</option>
                <option value="multiplicacao">Multiplicação (&times;)</option>
                <option value="divisao">Divisão (&divide;)</option>
            </select>
            <button type="submit">Calcular</button>
        </form>
    </div>

    <script src="js/script.js" defer></script>
</body>
</html>
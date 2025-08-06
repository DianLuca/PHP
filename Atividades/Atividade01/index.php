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
            <label for="valor1">Digite o primeiro número:</label>
            <input type="number" name="valor1" id="valor1">
            <label for="valor2">Digite o segundo número:</label>
            <input type="number" name="valor2" id="valor2">
            <label for="operacoes">Escolha a operação:</label>
            <select name="operacoes" id="operacoes">
                <option value="">--Selecione--</option>
                <option value="+">Soma (+)</option>
                <option value="-">Subtração (-)</option>
                <option value="x">Multiplicação (&times;)</option>
                <option value="/">Divisão (&divide;)</option>
            </select>
            <button type="submit">Calcular</button>
        </form>
    </div>

    <script src="js/scrpit.js"></script>
</body>
</html>
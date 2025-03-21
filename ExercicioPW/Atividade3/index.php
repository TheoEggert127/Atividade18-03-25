<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento</title>
</head>
<body>
    <h1>Calculadora de Pagamento</h1>
    <form action="calcular.php" method="post">
        <p>Informe o total gasto na compra:</p>
        <input type="number" name="totalGasto" step="0.01" required><br><br>

        <p>Escolha a forma de pagamento:</p>
        <select name="formaPagamento" required>
            <option value="">Selecione uma forma de pagamento</option>
            <option value="avista">À vista (10% de desconto)</option>
            <option value="aprazo">A prazo</option>
        </select><br><br>

            <p>Informe o número de parcelas:</p>
            <input type="number" name="numeroParcelas" min="1" value="1"><br><br>
       
        <input type="submit" value="Calcular">
    </form>

</body>
</html>
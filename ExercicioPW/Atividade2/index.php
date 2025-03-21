<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Peças de Carros</title>
</head>
<body>
    <h1>Bem-vindo à Loja de Peças de Carros!</h1>
    <form action="calcular.php" method="post">
        <p>Informe seu nome:</p>
        <input type="text" name="nome" required><br>
        
        <p>Escolha uma peça:</p>
        <select name="peca" required>
            <option value="">Selecione uma peça</option>
            <option value="1">Filtro de Óleo - R$ 250,00</option>
            <option value="2">Bateria - R$ 400,00</option>
            <option value="3">Pastilha de Freio - R$ 150,00</option>
            <option value="4">Amortecedor - R$ 300,00</option>
            <option value="5">Radiador - R$ 500,00</option>
        </select><br><br>

        <p>Quantas peças você deseja comprar?</p>
        <input type="number" name="quantidadePeca" min="1" value="1" required><br><br>

        <p>Escolha um acessório de carro:</p>
        <select name="acessorioCarro" required>
            <option value="">Selecione um acessório</option>
            <option value="1">Tapete Automotivo - R$ 120,00</option>
            <option value="2">Capa de Banco - R$ 200,00</option>
            <option value="3">Retrovisor - R$ 180,00</option>
            <option value="4">Farol de Milha - R$ 250,00</option>
            <option value="5">Antena - R$ 90,00</option>
        </select><br><br>

        <input type="submit" value="Fazer Pedido">
    </form>
</body>
</html>

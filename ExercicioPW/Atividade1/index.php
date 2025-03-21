<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanchonete</title>
</head>
<body>
    <h1>Bem-vindo à Lanchonete!</h1>
    <form action="calcular.php" method="post">
        <p>Informe seu nome:</p>
        <input type="text" name="nome" required><br>
        
        <p>Escolha um lanche:</p>
        <select name="lanche" required>
            <option value="">Selecione um lanche</option>
            <option value="1">X Burguer - R$ 6,00</option>
            <option value="2">X Salada - R$ 8,00</option>
            <option value="3">X Bacon - R$ 10,00</option>
            <option value="4">X Tudo - R$ 12,00</option>
            <option value="5">X Duplo - R$ 15,00</option>
        </select><br><br>

        <p>Quantos lanches você deseja comprar?</p>
        <input type="number" name="quantidadeLanches" min="1" value="1" required><br><br>

        <p>Escolha uma bebida:</p>
        <select name="bebida" required>
            <option value="">Selecione uma bebida</option>
            <option value="1">Água - R$ 2,00</option>
            <option value="2">Suco - R$ 5,00</option>
            <option value="3">Lata - R$ 3,00</option>
            <option value="4">600 ml - R$ 5,00</option>
            <option value="5">2 Litros - R$ 8,00</option>
        </select><br><br>

        <input type="submit" value="Fazer Pedido">
    </form>
</body>
</html>
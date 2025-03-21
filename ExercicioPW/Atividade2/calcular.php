<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Pedido</title>
</head>
<body>
    <h1>Resultado do Pedido</h1>
    <?php
        $nome = $_POST['nome'];  
        $peca = $_POST['peca'];
        $quantidadePeca = $_POST['quantidadePeca'];
        $acessorioCarro = $_POST['acessorioCarro'];

        switch ($peca) {
            case 1:
                $precoPeca = 250.00;
                $nomePeca = "Filtro de Óleo";
                break;
            case 2:
                $precoPeca = 400.00;
                $nomePeca = "Bateria";
                break;
            case 3:
                $precoPeca = 150.00;
                $nomePeca = "Pastilha de Freio";
                break;
            case 4:
                $precoPeca = 300.00;
                $nomePeca = "Amortecedor";
                break;
            case 5:
                $precoPeca = 500.00;
                $nomePeca = "Radiador";
                break;
            default:
                $precoPeca = 0;
                $nomePeca = "Peça inválida";
                break;
        }

        switch ($acessorioCarro) {
            case 1:
                $precoAcessorio = 120.00;
                $nomeAcessorio = "Tapete Automotivo";
                break;
            case 2:
                $precoAcessorio = 200.00;
                $nomeAcessorio = "Capa de Banco";
                break;
            case 3:
                $precoAcessorio = 180.00;
                $nomeAcessorio = "Retrovisor";
                break;
            case 4:
                $precoAcessorio = 250.00;
                $nomeAcessorio = "Farol de Milha";
                break;
            case 5:
                $precoAcessorio = 90.00;
                $nomeAcessorio = "Antena";
                break;
            default:
                $precoAcessorio = 0;
                $nomeAcessorio = "Acessório inválido";
                break;
        }
    
        $totalPecas = $precoPeca * $quantidadePeca;
        $totalAcessorio = $precoAcessorio;
        $total = $totalPecas + $totalAcessorio;
    
        echo "$nome, você escolheu:<br>";
        echo "$quantidadePeca x $nomePeca - R$ " . number_format($totalPecas, 2, ',', '.') . "<br>";
        echo "1 x $nomeAcessorio - R$ " . number_format($totalAcessorio, 2, ',', '.') . "<br>";
        echo "Total consumido: R$ " . number_format($total, 2, ',', '.') . ".";
        
    ?>
    <br><br>
    <a href="index.php">Voltar</a>
</body>
</html>

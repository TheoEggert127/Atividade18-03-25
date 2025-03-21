<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Pagamento</title>
</head>
<body>
    <h1>Resultado do Pagamento</h1>
    <?php
        $totalGasto = $_POST['totalGasto'];
        $formaPagamento = $_POST['formaPagamento'];
        $numeroParcelas = $_POST['numeroParcelas'];

        if ($formaPagamento == 'avista') {
            $desconto = 0.10; 
            $valorFinal = $totalGasto * (1 - $desconto);
            echo "Total a pagar à vista: R$ " . number_format($valorFinal, 2, ',', '.') . ".";
        } elseif ($formaPagamento == 'aprazo') {
            if ($numeroParcelas <= 3) {
                $valorFinal = $totalGasto; 
            } elseif ($numeroParcelas <= 6) {
                $juros = 0.10; 
                $valorFinal = $totalGasto * (1 + $juros);
            } else {
                $juros = 0.20;
                $valorFinal = $totalGasto * (1 + $juros);
            }

            $valorParcela = $valorFinal / $numeroParcelas;
            echo "Total a pagar a prazo: R$ " . number_format($valorFinal, 2, ',', '.') . ".<br>";
            echo "Valor de cada parcela: R$ " . number_format($valorParcela, 2, ',', '.') . ".";
        } else {
            echo "Forma de pagamento inválida.";
        }
    ?>
    <br><br>
    <a href="index.php">Voltar</a>
</body>
</html>
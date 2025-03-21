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
        $lanche = $_POST['lanche'];
        $quantidadeLanches = $_POST['quantidadeLanches'];
        $bebida = $_POST['bebida'];

        switch ($lanche) {
            case 1:
                $precoLanche = 6.00;
                $nomeLanche = "X Burguer";
                break;
            case 2:
                $precoLanche = 8.00;
                $nomeLanche = "X Salada";
                break;
            case 3:
                $precoLanche = 10.00;
                $nomeLanche = "X Bacon";
                break;
            case 4:
                $precoLanche = 12.00;
                $nomeLanche = "X Tudo";
                break;
            case 5:
                $precoLanche = 15.00;
                $nomeLanche = "X Duplo";
                break;
            default:
                $precoLanche = 0;
                $nomeLanche = "Lanche inválido";
                break;
        }

        switch ($bebida) {
            case 1:
                $precoBebida = 2.00;
                $nomeBebida = "Água";
                break;
            case 2:
                $precoBebida = 5.00;
                $nomeBebida = "Suco";
                break;
            case 3:
                $precoBebida = 3.00;
                $nomeBebida = "Lata";
                break;
            case 4:
                $precoBebida = 5.00;
                 $nomeBebida = "600 ml";
                 break;
            case 5:
                 $precoBebida = 8.00;
                $nomeBebida = "2 Litros";
                break;
            default:
                $precoBebida = 0;
                $nomeBebida = "Bebida inválida";
                break;
            }
    
            $totalLanches = $precoLanche * $quantidadeLanches;
            $totalBebida = $precoBebida;
            $total = $totalLanches + $totalBebida;
    
            echo "$nome, você escolheu:<br>";
            echo "$quantidadeLanches x $nomeLanche - R$ " . number_format($totalLanches, 2, ',', '.') . "<br>";
            echo "1 x $nomeBebida - R$ " . number_format($totalBebida, 2, ',', '.') . "<br>";
            echo "Total consumido: R$ " . number_format($total, 2, ',', '.') . ".";
        ?>
        <br><br>
        <a href="index.php">Voltar</a>
    </body>
    </html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 3</title>
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
            $valor = $_GET["din"] ?? 0;
            $cota = 5.83;
            $dolar = $valor / $cota ;
            //echo "Seus R$" . number_format ($valor,2,",",".") . " equivalem a <strong> US$" . number_format($dolar,2,",",".") . "</strong>";

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "<p>Seus " . numfmt_format_currency($padrao,$valor,"BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao,$dolar,"USD"). "</strong></p>";

            echo "<br>Cotação fixa de <strong>". numfmt_format_currency($padrao,$cota,"BRL") . "</strong> informado diretamente no código";
        ?>

    </main>
</body>
</html>
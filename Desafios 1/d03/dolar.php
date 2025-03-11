<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 4</title>
</head>
<body>
    <main>
        <h1>Conversor de Moedas v2.0</h1>
        <?php 
            include 'teste.php';
            $valor = $_GET["din"] ?? 0;
            $cota = $cotacao;
            $dolar = $valor / $cota ;
           
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "<p>Seus " . numfmt_format_currency($padrao,$valor,"BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao,$dolar,"USD"). "</strong></p>";

            echo "<br>Cotação de <strong>". numfmt_format_currency($padrao,$cota,"BRL") . "</strong> informado pelo banco central";
        ?>

    </main>
</body>
</html>
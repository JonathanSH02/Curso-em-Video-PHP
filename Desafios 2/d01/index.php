<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio 2</title>
</head>
<body>
    <?php 
        $salario = $_GET['sal'] ?? 0;
        $min = 1518.00;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    ?>
    <main>
        <h1>Informe seu Salário</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="sal">Salário (R$)</label>
            <input type="number" name="sal" id="sal" step="0.01" value="<?=$salario?>">
            <p>Considerando o salário mínimo de <strong><?=numfmt_format_currency($padrao,$min,"BRL")?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            $salmin = intdiv($salario, $min);
            $rest = $salario - ($min * $salmin);

            echo "Quem recebe um salário de" . numfmt_format_currency($padrao,$salario,"BRL") . " ganha <strong> $salmin salários mínimos + ". numfmt_format_currency($padrao,$rest,"BRL") . "</strong>"
        ?>
    </section>
</body>
</html>
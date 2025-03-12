<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio 4</title>
</head>
<body>
    <?php 
        $nota1 = $_GET['not1'] ?? 0;
        $peso1 = $_GET['pes1'] ?? 1;
        $nota2 = $_GET['not2'] ?? 0;
        $peso2 = $_GET['pes2'] ?? 1;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="not1">1°Nota</label>
            <input type="number" name="not1" id="not1" value="<?=$nota1?>">
            <label for="pes1">1°Peso</label>
            <input type="number" name="pes1" id="pes1" value="<?=$peso1?>">
            <label for="not2">2°Nota</label>
            <input type="number" name="not2" id="not2" value="<?=$nota2?>">
            <label for="pes2">2°Peso</label>
            <input type="number" name="pes2" id="pes2" value="<?=$peso2?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <?php 
            $meds = ($nota1 + $nota2)/2;
            $meda = (($nota1*$peso1)+($nota2*$peso2))/($peso1 + $peso2);
            $simples = number_format($meds,2,",",".");
            $pon= number_format($meda,2,",",".");

            echo "Analisando os valores $nota1 e $nota2:"
        ?>
        <ul>
            <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?=$simples?></li>
            <li>A <strong>Média Aritmética Ponderada</strong> com os pesos <?=$peso1?> e <?=$peso2?> é igual a <?=$pon?></li>
        </ul>
    </section>
</body>
</html>
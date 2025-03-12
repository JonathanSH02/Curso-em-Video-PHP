<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio 3</title>
</head>
<body>
    <?php 
        $numero = $_GET['num'] ?? 0;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?=$numero?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            $quad = $numero ** (1/2);
            $cub = $numero ** (1/3);
            $num1 = number_format($quad,3,",",".");
            $num2 = number_format($cub,3,",",".");
        ?>
        <p>Analisando o número <strong><?=$numero?></strong>,temos:</p>
        <ul>
            <li>A sua raiz quadrada é <strong><?=$num1?></strong></li>
            <li>A sua raiz cúbica é <strong><?=$num2?></strong></li>
        </ul>
    </section>
</body>
</html>
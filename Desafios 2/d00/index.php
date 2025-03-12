<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio 1</title>
</head>
<body>
    <?php 
        $num1 = $_GET['divid'] ?? 0;
        $num2 = $_GET['divis'] ?? 0;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="divid">Dividendo</label>
            <input type="number" name="divid" id="divid" value="<?=$num1?>">
            <label for="divis">Divisor</label>
            <input type="number" name="divis" id="divis" value="<?=$num2?>">
            <input type="submit" value="analisar">
        </form>
    </main>
    <section>
        <h2>Estrutura da Divisão</h2>
        <?php 
            $div = (int) ($num1 / $num2);
            $sob = $num1 % $num2;
        ?>
        <table class="divisao">
            <tr>
                <td><?=$num1?></td>
                <td><?=$num2?></td>
            </tr>
            <tr>
                <td><?=$sob?></td>
                <td><?=$div?></td>
            </tr>
        </table>
        
    </section>
</body>
</html>
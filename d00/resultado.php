<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <main>
        <p>
        <?php 
            $n = $_GET["numero"];
            $a = $n - 1;
            $s = $n + 1;
            echo "O número escolhido foi <strong>$n</strong>";
            echo "<br>O seu antecessor é $a";
            echo "<br>O seu sucessor é $s";
        ?>
        </p>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
</body>
</html>
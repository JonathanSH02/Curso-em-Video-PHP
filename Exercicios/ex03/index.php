<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tuois orunutuvis</h1>
    <?php 
        $num = 0x1A;
        echo "O valor da variável é $num";
    
        $v =300;
        var_dump($v);

        $num1 = 3e2;
        var_dump($num1);

        $num2 = (float) "950";
        var_dump($num2);

        $num2 = "950";
        var_dump($num2);
       
        $casado = true;
        echo "ele é $casado";

        $vet = [6, 2,5, "maria", 3, false];
        var_dump($vet);

        class Pessoa {
            private string $nome8;
        }
        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>
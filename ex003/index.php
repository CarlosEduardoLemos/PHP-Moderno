<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <?php 
    // OX = Hexadecimal 0B = Binário 0 = Octal
        $num = 0x1A; // Hexadecimal
        echo "O valor da variável é $num <br>";
        $num = 010; // Octal
        echo "O valor da variável é $num <br>";
        $v = 45.2;
        var_dump($v);
        $num = (int) "950";
        var_dump($num);
    ?>
</body>
</html>
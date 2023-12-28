<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
</head>
<body>

<h1>Resultados</h1>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
    
        // Soma
        $soma = $num1 + $num2;
    
        echo "O resultado da soma $num1 + $num2 é igual a $soma.";
    }
  
    ?>
</body>
</html>
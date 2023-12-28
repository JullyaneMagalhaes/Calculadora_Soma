<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora para somar</h1>

    <form method="post" action="op_arit.php">
        
    <table>
        <tr>
           <td> <label for="num1">Número 1:</label></td>
            <td><input type="text" name="num1" id="num1" required></td>
        </tr>
        
       <tr>
            <td><label for="num2">Número 2:</label></td>
            <td><input type="text" name="num2" id="num2" required></td>
       </tr>
    </table>    

    <input type="submit" value="Calcular">
</form>

</body>
</html>
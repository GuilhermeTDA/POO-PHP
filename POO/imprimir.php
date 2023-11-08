<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir saldo</title>
</head>
<body>
    <?php
    include("./conta.php");
    $obj-> new Conta();
    echo"<h1>saldo do cliente<?h1>";
    $obj->imprimirSaldo();
    ?>
</body>
</html>
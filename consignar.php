<?php
    require_once './db/connect.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Consignar</title>
</head>

<body>
    <main>
        <select name="cliente">
            <?php $cliente = getCliente(); ?>
            <?php foreach($cliente as $cli): ?>
                <option><?= $cli->clinombre ?></option>
            <?php endforeach; ?>
        </select><br>
        <select name="producto">
            <?php $producto = getProducto(); ?>
            <?php foreach($producto as $prod): ?>
                <option><?= $prod->prodnombre ?></option>
            <?php endforeach; ?>
        </select><br>
        <input type="number" name="salida"><br>
        <a href="./inventario.php">Enviar</a>
    </main>
</body>

</html>
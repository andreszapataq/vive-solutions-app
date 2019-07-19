<?php
    require_once 'db/connect.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Inventario</title>
</head>
<body>
    <?php
        $sql = 'SELECT Producto.prodnombre, Stock.stock FROM Producto INNER JOIN Stock ON Producto.prodcodigo = Stock.prodcodigo;';
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $inventario = $stmt->fetchAll();

        foreach($inventario as $inv){
            echo $inv->prodnombre . ' ' . $inv->stock . '<br>';
        }
    ?>

    <!-- <ul>
        <li></li>
        <li></li>
        <li></li>
    </ul> -->
</body>
</html>
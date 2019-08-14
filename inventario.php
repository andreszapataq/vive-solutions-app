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
    <title>Inventario</title>
</head>

<body>
    <header class="header-inventario">
        <nav>
            <ul>
                <li>
                    <a href="dashboard.html">Inicio</a>
                </li>
                <li>
                    <a href="inventario.php">Inventario</a>
                </li>
                <li>
                    <a href="consignar.php">Consignar</a>
                </li>
                <li>
                    <a href="bodegas.php">Bodegas</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="inv-buscar">
            <input type="text" class="inv-form" name="buscar" placeholder="Buscar">
        </div>
        <?php $inventario = getInventario(); ?>
        <!-- Es bueno que la variable se llame igual que en la función? -->
        <?php foreach($inventario as $inv): ?>
            <div class="inventario">
                <div class="invItem1"><?= $inv->prodnombre ?></div>
                <div class="invItem2"><?= $inv->stock ?></div>
            </div>
            <hr>
        <?php endforeach; ?>
    </main>
</body>

</html>
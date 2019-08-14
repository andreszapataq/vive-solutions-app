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
    <header class="header-consignar">
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
        <div class="consignar">
            <form name="consignarForm" action="./salida.php" onsubmit="return validarForm()" method="POST">
                <p>
                    <!-- <input type="text" name="cliente"> -->
                    <select name="cliente" class="consig-form">
                        <?php $cliente = getCliente(); ?>
                        <?php foreach($cliente as $cli): ?>
                            <option><?= $cli->clinombre; ?></option>
                        <?php endforeach; ?>
                    </select>
                </p>
                <p>
                    <!-- <input type="text" name="producto"> -->
                    <select name="producto" class="consig-form">
                        <?php $producto = getProducto(); ?>
                        <?php foreach($producto as $prod): ?>
                            <option><?= $prod->prodnombre; ?></option>
                        <?php endforeach; ?>
                    </select>
                </p>
                <p>
                    <input type="text" name="cantidad" class="consig-form">
                </p>
                <p>
                    <input type="submit" class="consig-submit" value="Consignar">
                </p>                
            </form>
        </div>
    </main>
    <script src="js/main.js"></script>
</body>

</html>
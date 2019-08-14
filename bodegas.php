<?php
require './db/connect.php';
if(isset($_POST['cliente'])){
    $cliente = $_POST['cliente'];
    $sql = 'SELECT producto AS Producto,
    SUM(cantidad) AS Total
    FROM salida
    WHERE cliente = :cliente
    GROUP BY producto
    ORDER BY Total DESC';
    $pdo = getConnection();
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':cliente' => $cliente]);
    $bodega = $stmt->fetchAll();
}
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
    <header class="header-bodegas">
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
        <form method="POST">
            <p>
                <select name="cliente" class="bodg-form">
                    <?php $cliente = getCliente(); ?>
                    <?php foreach($cliente as $cli): ?>
                        <option><?= $cli->clinombre; ?></option>
                    <?php endforeach; ?>
                </select>
            </p>
            <p>
                <input type="submit" class="bodg-submit" value="Consultar">
            </p>
        </form>
        <?php if(isset($bodega)): ?>
            <table class="bodega">
                <tr>
                    <th>Producto</th>
                    <th>Total</th>
                </tr>
            <?php foreach($bodega as $bod): ?>
                <tr>
                    <td class="bodProducto"><?= $bod->Producto; ?></td>
                    <td><?= $bod->Total; ?></td>
                </tr>
            <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </main>
</body>

</html>
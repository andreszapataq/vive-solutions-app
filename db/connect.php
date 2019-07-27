<?php
    function getConnection(){
        $host = 'localhost';
        $user = 'tecnologico';
        $password = 'CoolerMaster22!';
        $dbname = 'tecnologico_vivesolutionsapp';

        $dsn = 'mysql:host='. $host .';dbname='. $dbname;

        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        
        return $pdo;
    }

    function checkLogin($usuario, $contrasena){
        $sql = 'SELECT * FROM Usuario WHERE usuario = :usuario AND contrasena = :contrasena';
        $pdo = getConnection();
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['usuario' => $usuario, 'contrasena' => $contrasena]);
        if($stmt->rowCount() > 0){
            $conectado = $stmt->fetchAll();
            return true;
        }
        return false;
    }

    function getInventario(){
        $sql = 'SELECT Producto.prodnombre, Stock.stock FROM Producto INNER JOIN Stock ON Producto.prodcodigo = Stock.prodcodigo';
        $pdo = getConnection();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $inventario = $stmt->fetchAll();

        foreach($inventario as $inv){
            echo $inv->prodnombre . ' ' . $inv->stock . '<br>';
        }

        return $inv;
    }
<?php
    function getConnection(){
        /* $host = 'localhost';
        $user = 'tecnologico';
        $password = 'CoolerMaster22!';
        $dbname = 'tecnologico_vivesolutionsapp'; */

        $host = 'localhost';
        $user = 'root';
        $password = 'Master2233*';
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

        return $inventario;
    }

    function getCliente(){
        $sql = 'SELECT * FROM Cliente';
        $pdo = getConnection();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $cliente = $stmt->fetchAll();

        return $cliente;
    }

    function getProducto(){
        $sql = 'SELECT * FROM Producto';
        $pdo = getConnection();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $producto = $stmt->fetchAll();

        return $producto;
    }

    function consigProducto(){
        $sql = 'UPDATE Stock SET stock = stock - salida = :salida WHERE prodcodigo = :prodcodigo';
        $pdo = getConnection();
        $stmt = $pdo->prepare($sql);
        $stmt = execute();
        
        echo 'Consignado';
    }
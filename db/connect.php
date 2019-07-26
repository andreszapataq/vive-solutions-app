<?php
    $host = 'localhost';
    $user = 'tecnologico';
    $password = 'CoolerMaster22!';
    $dbname = 'tecnologico_vivesolutionsapp';

    $dsn = 'mysql:host='. $host .';dbname='. $dbname;

    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    function checkLogin($usuario, $contrasena){
        $sql = 'SELECT * FROM Usuario WHERE usuario = :usuario AND contrasena = :contrasena';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['usuario' => $usuario, 'contrasena' => $contrasena]);
        if($stmt->rowCount() > 0){
            $conectado = $stmt->fetchAll();
            return true;
        }
        return false;
    }

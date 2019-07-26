<?php
    // $host = 'localhost';
    // $user = 'tecnologico';
    // $password = 'CoolerMaster22!';
    // $dbname = 'tecnologico_vivesolutionsapp';

    // $dsn = 'mysql:host='. $host .';dbname='. $dbname;

    // $pdo = new PDO($dsn, $user, $password);
    // $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    //tavo
    function getConnection(){
        $host = 'localhost';
        $dbname = "fundyetb_muchat";
        $user = "root";
        $password = "";
        $dsn = 'mysql:host='. $host .';dbname='. $dbname;

        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        return $pdo;
    }
    //tavo

    function checkLogin($usuario, $contrasena){
        $sql = 'SELECT * FROM Usuario WHERE usuario = :usuario AND contrasena = :contrasena';

        //tavo
        $pdo = getConnection();
        // $sql = "SELECT * FROM users WHERE username = :username AND password = :password";
        //tavo

        $stmt = $pdo->prepare($sql);

        //tavo
        // $stmt->execute(['username' => $usuario, 'password' => $contrasena]);
        //tavo

        $stmt->execute(['usuario' => $usuario, 'contrasena' => $contrasena]);
        if($stmt->rowCount() > 0){
            $conectado = $stmt->fetchAll();
            return true;
        }
        return false;
    }

<?php
    $host = 'localhost';
    $user = 'tecnologico';
    $password = 'CoolerMaster22!';
    $dbname = 'tecnologico_vivesolutionsapp';

    $dsn = 'mysql:host='. $host .';dbname='. $dbname;

    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
?>

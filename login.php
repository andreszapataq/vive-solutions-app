<?php
    require_once './db/connect.php';

    $sql = 'SELECT * FROM Usuario WHERE usuario = :usuario AND contrasena = :contrasena';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([]);
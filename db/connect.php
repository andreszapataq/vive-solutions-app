<?php

    $server = "localhost:3306";
    $username = "root";
    $password = "";
    $db = "tecnologico_vivesolutionsapp";

    try{
        $handle = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");
        $handle->setAttribute(PDO::ATTR_ERRMODE, PDO::ATTR_ERRMODE_EXCEPTION);
        echo "CONNECTED";
    }
    catch(PDOException $e){
        die("Oops! Something went wrong  in the database.");
    }
?>

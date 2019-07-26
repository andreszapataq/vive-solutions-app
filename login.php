<?php

    session_start();

    require_once './db/connect.php';

    if(isset($_POST['usuario'])){
        $usuario = $_REQUEST['usuario'];
        $contrasena = $_REQUEST['contrasena'];
        if(checkLogin($usuario, $contrasena)){
            $_SESSION['usuario'] = $usuario;
            require_once 'dashboard.html';
        } else{
            require_once 'index.html';
        }
    }
<?php

    session_start();

    require_once './db/connect.php';

    if(isset($_POST['cliente'])){
        $cliente = $_REQUEST['cliente'];
        $producto = $_REQUEST['producto'];
        $salida = $_REQUEST['salida'];
        if(consigProducto($cliente, $producto, $salida)){
            $_SESSION['cliente'] = $cliente;
            require_once 'dashboard.html';
        } else{
            require_once 'consignar.php';
        }
    }
<?php

// session_start();

require './db/connect.php';

if(isset($_POST['cliente']) && isset($_POST['producto']) && isset($_POST['cantidad'])){
    $cliente = $_POST['cliente'];
    $producto = $_POST['producto'];
    $cantidad = $_POST['cantidad'];
    consigProducto($cliente, $producto, $cantidad);
    require_once 'consignar.php';
}

/* if(isset($_POST['cliente'])){
    $cliente = $_REQUEST['cliente'];
    $producto = $_REQUEST['producto'];
    $cantidad = $_REQUEST['cantidad'];
    if(consigProducto($cliente, $producto, $cantidad)){
        $_SESSION['cliente'] = $cliente;
        require_once 'consignar.php';
    } else{
        require_once 'dashboard.html';
    }
} */
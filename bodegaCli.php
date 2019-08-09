<?php

require './db/connect.php';

if(isset($_POST['cliente'])){
    $cliente = $_POST['cliente'];
    consulBodega($cliente);
    require_once 'bodegas.php';
}
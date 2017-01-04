<?php 
error_reporting(E_ERROR);
include "Carrito.php";
$id = $_GET['id'];
$carrito = new Carrito();
$carrito->remove_producto($id);
header("location:shopcart.php");
?>
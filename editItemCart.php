<?php
error_reporting(E_ERROR);
ob_start();
include "Carrito.php"; 
include "connect.php";
//$desc = $_POST['nomProd'];
$id = $_GET['id'];
$uid = $_GET['uid'];
$cant = $_GET['cantProd'];
$productos = "SELECT * FROM productos WHERE id_pro = '$id'";
$sqlProductos =  mysql_query($productos) or die(mysql_error());
$producto = mysql_fetch_assoc($sqlProductos);
$carrito = new Carrito();
$carrito->remove_producto($uid);
$articulo = array(
"id" => $producto['id_pro'],
"cantidad" => $cant,
"precio" => $producto['precio_cliente'],
"imagen" => $producto['imagen'],    
"nombre" => $producto['nombreProducto']
);
$carrito->add($articulo);
header("location:shopcart.php");
ob_end_flush();
?>
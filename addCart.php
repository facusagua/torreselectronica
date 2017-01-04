<?php
ob_start();
error_reporting(E_ERROR);
include "connect.php";
include "Carrito.php"; 

$id = $_GET['id_pro'];
$cant = $_GET['cantProd'];
$productos = "SELECT * FROM productos WHERE id_pro = '$id'";
$sqlProductos =  mysql_query($productos) or die(mysql_error());
$producto = mysql_fetch_assoc($sqlProductos);
if($_SESSION['tipoUsuario'] == 1){
    $precio = $producto['precio_cliente'];
}
if($_SESSION['tipoUsuario'] == 2){
    $precio = $producto['precio_gremio'];
}
$carrito = new Carrito();
$articulo = array(
"id" => $producto['id_pro'],
"cantidad" => $cant,
"precio" => $precio,
"imagen" => $producto['imagen'],    
"nombre" => $producto['nombreProducto']
);
$carrito->add($articulo);
header("location:shopcart.php");
ob_end_flush();
?>
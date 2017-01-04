<?php
include "connect.php";
include "Carrito.php"; 
session_start();
echo $totalCompra = $_GET['totalCompra'];
echo $metodoPago = $_GET['metodoPago'];

echo $idUser = $_SESSION['idUsuario'];
echo $nomUser = $_SESSION['nomUsuario'];

echo $productos = "INSERT INTO ventas (id_cli,metodo,totalCompra) VALUES ('$idUser','$metodoPago','$totalCompra')";
$sqlProductos =  mysql_query($productos) or die(mysql_error());
echo $uid=mysql_insert_id();

$carrito = new Carrito();
$carro = $carrito->get_content();
foreach($carro as $producto){
    echo $idPro = $producto['id'];
    echo $cantidad = $producto['cantidad'];
    echo $precioU = $producto['precio'];
    echo $precioT = $producto['precio']*$producto['cantidad'];
    
    echo $productos = "INSERT INTO ventas_items (id_venta,id_pro,cantidad,precioUnitario,precioTotal) VALUES ('$uid','$idPro','$cantidad','$precioU','$precioT')";
    $sqlProductos =  mysql_query($productos) or die(mysql_error());
}
if($metodoPago == "local"){
    $carrito->destroy();
    header("location:shopcheckoutfinal.php?nombre=".$nomUser);
}
if($metodoPago == "mercadopago"){
   $carrito->destroy();
    header("location:http://www.mercadopago.com.ar");
}
?>
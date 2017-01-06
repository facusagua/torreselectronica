<?php
include "connect.php";
include "Carrito.php";
require_once('lib/mercadopago.php');
session_start();
$totalCompra = $_GET['totalCompra'];
$metodoPago = $_GET['metodoPago'];
$coment = $_GET['coment'];

$idUser = $_SESSION['idUsuario'];
$nomUser = $_SESSION['nomUsuario'];

$productos = "INSERT INTO ventas (id_cli,metodo,totalCompra,observaciones) VALUES ('$idUser','$metodoPago','$totalCompra','$coment')";
$sqlProductos =  mysql_query($productos) or die(mysql_error());
$uid=mysql_insert_id();

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
    $monto = (real) $totalCompra;
    $title = "Compra Web Torres Electronica - ID Venta:".$uid;
    
$mp = new MP('4558579727573235', 'zPdxvQRJk4HClx8bZfGoeDiomg6cIqyn');
$preference_data = array(
	"items" => array(
		array(
            "id" => $uid,
			"title" => $title,
			"quantity" => 1,
			"currency_id" => "ARS", // Available currencies at: https://api.mercadopago.com/currencies
			"unit_price" => $monto
		)
	)
);
    
$preference = $mp->create_preference($preference_data);
   
    header("location:".$preference['response']['init_point']);
    $carrito->destroy(); 
}
?>
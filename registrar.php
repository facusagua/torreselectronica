<?php
include "connect.php";

$nombre = $_GET['nombre'];
$domicilio = $_GET['domicilio'];
$ciudad = $_GET['ciudad'];
$provincia = $_GET['provincia'];
$cp = $_GET['cp'];
$tel = $_GET['tel'];
$tipo = $_GET['tipo'];
$email = $_GET['email'];
$pass = $_GET['pass'];

if(isset($_GET['cuit'])){
    $cuit = $_GET['cuit'];
}
else{
    $cuit = "";
}

$productos = "INSERT INTO clientes (cuit,nomyap,localidad,tel,email,domicilio,provincia,cp,tipo,pass) VALUES ('$cuit','$nombre','$ciudad','$tel','$email','$domicilio','$provincia','$cp','$tipo','$pass')";
$sqlProductos =  mysql_query($productos) or die(mysql_error());

header("location:confregistro.php?nombre=".$nombre);
?>
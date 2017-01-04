<?php
include "connect.php";

$email = $_POST['email'];
$pass = $_POST['pass'];

$productos = "SELECT * FROM clientes WHERE email = '$email' AND pass='$pass'";
$sqlProductos =  mysql_query($productos) or die(mysql_error());
$num = mysql_num_rows($sqlProductos);
$row = mysql_fetch_array($sqlProductos);
if($num > 0){
    session_start();
    $_SESSION['nomUsuario'] = $row['nomyap'];
    $_SESSION['idUsuario'] = $row['id_cli'];
    $_SESSION['emailUsuario'] = $row['email'];
    $_SESSION['tipoUsuario'] = $row['tipo'];
    $_SESSION['autenUsuario'] = "SI";
    echo 1;
}
else{
    echo 0;
}
?>
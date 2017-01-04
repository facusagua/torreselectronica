<?php
include "connect.php";

$email = $_POST['email'];
$pass = $_POST['pass'];

$productos = "SELECT * FROM usuarios WHERE user = '$email' AND pass='$pass'";
$sqlProductos =  mysql_query($productos) or die(mysql_error());
$num = mysql_num_rows($sqlProductos);
$row = mysql_fetch_array($sqlProductos);
if($num > 0){
    session_start();
    $_SESSION['panelUser'] = $row['user'];
    $_SESSION['panelRol'] = $row['rol'];
    $_SESSION['autenPanel'] = "SI";
    echo 1;
}
else{
    echo 0;
}
?>
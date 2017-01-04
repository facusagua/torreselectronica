<?php

$servidor = "localhost";
$usuario = "torresweb_base";	
$pass = "Abc123";
$base_de_datos = "torresweb_base";

$conect = mysql_connect($servidor, $usuario, $pass) or die("Error al Seleccionar la BD");
mysql_select_db($base_de_datos, $conect) or die("Error al seleccionar la BD");

?>		
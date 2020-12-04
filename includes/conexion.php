<?php

$host = 'localhost';
$user= 'root';
$password = '';
$database = 'php_mysql_blog_basic';

$conexion = mysqli_connect($host, $user, $password, $database);

/* Consulta para configurar la codificacion de caracteres, Si la base de datos devulve una tilde o ñ, 
 que se devueva correctamente con esta consulta*/
mysqli_query($conexion, "SET NAMES 'utf8' ");

// Si no existe la session que se inicie
if(!isset($_SESSION)){
    session_start();
}

?>
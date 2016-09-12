<?php
$server="localhost";
$user="root";
$pass="";
$database="bd";

//creamos una conexion, utilizamos mysqli   (ver documentacion)
$conexion=new mysqli($server, $user, $pass, $database); 
//parametros: servidor, usuario, contraseña, base de datos

if ($conexion->connect_errno) { //si es que hay algun problema
    echo "Hay problemas con la conexion: ".$conexion->connect_error;
    exit;
}

?>

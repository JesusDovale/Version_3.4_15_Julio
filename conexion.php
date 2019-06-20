<?php

$basedato = "admin";
$usuario = "root";
$direccion = "127.0.0.1";
$password = "";

$conexion = mysqli_connect($direccion,$usuario,$password,$basedato)or die ("no se pudo connectaer");

?>
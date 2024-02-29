<?php
$host = "localhost";
$user = "root";
$contrasena = "";
$bd = "Proyecto_U5";

$conectar =mysqli_connect($host, $user, $contrasena, $bd);

if (!$conectar) {
    echo "No funciona la base de datos";
}

?>
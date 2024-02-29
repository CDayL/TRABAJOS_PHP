<?php
$host = "localhost";
$user = "root";
$contrasena = "";
$bd = "ExamenU4";

$conectar =mysqli_connect($host, $user, $contrasena, $bd);

if (!$conectar) {
    echo "No funciona la base de datos";
}

?>
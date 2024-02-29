<?php

require "conexion.php";

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$celular = $_POST["celular"];
$compania = $_POST["compania"];
$parentesco = $_POST["parentesco"];

//echo $carreras."<br>";
//echo $ingreso."<br>";
//echo $materias."<br>";

$insertar = "INSERT INTO agenda_contacto(nombre, apellido, email, celular, compania, parentesco) VALUES ('$nombre', '$apellido', '$email', '$celular', '$compania', '$parentesco')";

$query = mysqli_query($conectar, $insertar);

if ($query) {
    echo "<script>
    alert('Todo se a guardado bien');
    location.href='nuevo_contacto_administrador.php';
    </script>";
} else {
    echo "<script>
    alert('Todo se a salido de control');
    location.href='nuevo_contacto_administrador.php';
    </script>";
}

?>
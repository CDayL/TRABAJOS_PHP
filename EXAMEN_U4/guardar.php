<?php

require "conexion.php";

$nombre = $_POST["nombre"];
$matricula = $_POST["matricula"];
$repetidor = $_POST["repetidor"];
$lunes = $_POST["lunes"];
$martes = $_POST["martes"];
$miercoles = $_POST["miercoles"];
$jueves = $_POST["jueves"];
$viernes = $_POST["viernes"];
$sabado = $_POST["sabado"];
$horario = $_POST["horario"];
$carrera = $_POST["carrera"];
$semestre = $_POST["semestre"];
$observaciones = $_POST["observaciones"];

// echo $nombre."<br>";
// // echo $ingreso."<br>";
// // echo $materias."<br>";

$insertar = "INSERT INTO Registro(nombre, matricula, repetidor, lunes, martes, miercoles, jueves, viernes, sabado, horario, carrera, semestre, observaciones) VALUES ('$nombre', '$matricula', '$repetidor', '$lunes', '$martes', '$miercoles', '$jueves', '$viernes', '$sabado', '$horario', '$carrera', '$semestre', '$observaciones')";

$query = mysqli_query($conectar, $insertar);

if ($query) {
    echo "<script>
    alert('Todo se a guardado bien');
    location.href='formulario.php';
    </script>";
} else {
    echo "<script>
    alert('Todo se a salido de control');
    location.href='formulario.php';
    </script>";
}

?>
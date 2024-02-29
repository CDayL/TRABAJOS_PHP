<?php

require "conexion.php";

$nombre = $_POST["nombre"];
$telefono = $_POST["apellido"];
$correo = $_POST["correo"];
$mensaje = $_POST["mensaje"];

// $rutaTemporal = $_FILES ['imagen']['tmp_name'];
// $nombreImagen = $_FILES ['imagen']['name'];

// $rutaCarpeta = 'Imagenes_contactos';
// $rutaServidor = $rutaCarpeta . '/' . $nombreImagen;

// move_uploaded_file($rutaTemporal, $rutaServidor);

//Checando si se conecta
//echo $carreras."<br>";
//echo $ingreso."<br>";
//echo $materias."<br>";

$insertar = "INSERT INTO Contactanos(nombre, telefono, correo, mensaje) VALUES ('$nombre','$telefono','$correo' ,'$mensaje')";

$query = mysqli_query($conectar, $insertar);

if ($query) {
    echo "<script>
    alert('Todo se a guardado bien');
    location.href='contactanos.php';
    </script>";
} else {
    echo "<script>
    alert('Todo se a salido de control');
    location.href='contactanos.php';
    </script>";
}

?>
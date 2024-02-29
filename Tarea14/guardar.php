<?php

require "conexion.php";

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$celular = $_POST["celular"];
$compania = $_POST["compania"];
$parentesco = $_POST["parentesco"];

$rutaTemporal = $_FILES ['imagen']['tmp_name'];
$nombreImagen = $_FILES ['imagen']['name'];

$rutaCarpeta = 'Imagenes_contactos';
$rutaServidor = $rutaCarpeta . '/' . $nombreImagen;

move_uploaded_file($rutaTemporal, $rutaServidor);

//Checando si se conecta
//echo $carreras."<br>";
//echo $ingreso."<br>";
//echo $materias."<br>";

$insertar = "INSERT INTO agenda_contacto(nombre, apellido, email, celular, compania, parentesco, imagen) VALUES ('$nombre', '$apellido', '$email', '$celular', '$compania', '$parentesco', '$rutaServidor')";

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
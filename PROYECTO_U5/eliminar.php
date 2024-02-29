<?php

    include "conexion.php";

    $id = $_GET['id'];

    $consulta = " DELETE FROM Contactanos WHERE id = '$id' ";
    $resultado = mysqli_query($conectar, $consulta);
    if ($resultado) {
        echo '
            <script>
                alert("El contacto ha sido eliminado correctamente.");
                location.href= "contactanos_administrador.php";
            </script>
        ';
    }
?>


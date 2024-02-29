<?php

    include("conexion.php");

    $id = $_GET['id'];

    $eliminar = "DELETE FROM Registro WHERE id = '$id' ";
    $resultado = mysqli_query($conectar, $eliminar);
    if ($resultado) {
        echo '
            <script>
                alert("El contacto ha sido eliminado correctamente.");
                location.href = "ver_lista_administrador.php";
            </script>
        ';
    }
?>
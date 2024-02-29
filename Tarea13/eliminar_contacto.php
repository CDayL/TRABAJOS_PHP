<?php

    include("conexion.php");

    $id = $_GET['id'];

    $eliminar = "DELETE FROM agenda_contacto WHERE id = '$id' ";
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
<?php
    include "seguridad.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PROYECTO U5</title>
</head>
<body>
    <?php
        include "header_administrador.php";
    ?>
    <main>
        <div>
            <br>
            <h3>
                ¡Ponte en Contacto con Nosotros!
            </h3>
            <br>
        <div>
            <a class="negro" href="desconectar.php">
                CERRAR SESIÓN
            </a>
            <br><br>
            <table class="centrotabla">
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        NOMBRE
                    </th>
                    <th>
                        TELEFONO
                    </th>
                    <th>
                        CORREO
                    </th>
                    <th>
                        MENSAJE
                    </th>
                    <th>

                    </th>
                </tr>
                
                <?php
                include "conexion.php";
                $todos_datos ="SELECT * FROM Contactanos ORDER BY id ASC";
                $resultado = mysqli_query($conectar, $todos_datos);

                while ($fila = mysqli_fetch_assoc($resultado)) {
                ?>
                <tr>
                    <td>
                        <?php echo $fila["id"]; ?>
                    </td>
                    <td>
                        <?php echo $fila["nombre"]; ?>
                    </td>
                    <td>
                        <?php echo $fila["telefono"]; ?>
                    </td>
                    <td>
                        <?php echo $fila["correo"]; ?>
                    </td>
                    <td>
                        <?php echo $fila["mensaje"]; ?>
                    </td>
                    <td>
                        <a onClick="validar('eliminar.php?id=<?php echo $fila["id"]; ?>')" href="">
                            Eliminar
                        </a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
        <br>
    </main>
    <?php
        include "footer.php";
    ?>

    <script>
        function validar(url) {
            var eliminar = confirm("¿Desea eliminar el contacto?");
            if(eliminar == true) {
                window.location = url;
            }
        }
    </script>
</body>
</html>
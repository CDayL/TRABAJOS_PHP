<?php
    include "seguridad.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <?php
        include "php_statico/header.php";
    ?>
    <main>
        <a class="cerrar_sesion" href="desconectar.php">
            CERRAR SESIÓN
        </a>
        <h2 class="titulonaranja">
            VER LISTA
        </h2>
        <div class="EspacioBoton">
            <a class="botoninicio" href="principal_administrador.php">
                Inicio
            </a>
        </div>
        <div class="centro ">
            <table>
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        NOMBRE
                    </th>
                    <th>
                        APELLIDO
                    </th>
                    <th>
                        CORREO
                    </th>
                    <th>
                        CELULAR
                    </th>
                    <th>
                        COMPAÑIA
                    </th>
                    <th>
                        PARENTESCO
                    </th>
                    <th>
                        
                    </th>
                </tr>
                
                <?php
                include "conexion.php";
                $todos_datos ="SELECT * FROM agenda_contacto ORDER BY id ASC";
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
                        <?php echo $fila["apellido"]; ?>
                    </td>
                    <td>
                        <?php echo $fila["email"]; ?>
                    </td>
                    <td>
                        <?php echo $fila["celular"]; ?>
                    </td>
                    <td>
                        <?php echo $fila["compania"]; ?>
                    </td>
                    <td>
                        <?php echo $fila["parentesco"]; ?>
                    </td>
                    <td>
                        <a href="">
                            Eliminar
                        </a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </main>
    <?php
        include "php_statico/footer.php";
    ?>
</body>
</html>
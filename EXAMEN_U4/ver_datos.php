<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>ExamenU4</title>
</head>
<body>
    <?php
        include "header.php";
    ?>
    <main class="fondomain">
        <!-- Titulo -->
        <div class="espaciotitulo">
            <img class="junto1 tamanoengrane" src="imagenes/engrane.png" alt="">
            <h2 class="titulodatos junto1">
                CONSULTA DE DATOS
            </h2>
        </div>
        <!-- Mostrar datos -->
        <?php
            include "conexion.php";
            $todos ="SELECT * FROM Registro ORDER BY id ASC";
            $resultado = mysqli_query($conectar, $todos);

            while ($fila = mysqli_fetch_assoc($resultado)) {
        ?>
        <div class="bordedatos fondoformulario">
            <div class="bordeeliminar">
                <a href="#" onClick="validar('eliminar_contacto.php?id=<?php echo $fila["id"]; ?>')">
                    Eliminar
                </a>
                <img class="tamanoeliminar" src="imagenes/icono_cerrar.jpg" alt="">
            </div>
            <div>
                <?php echo $fila["nombre"]; ?>
            </div>
            <div>
                <p class="junto1">
                    MATRICULA:
                </p>
                <?php echo $fila["matricula"]; ?>
            </div>
            <div>
                <p class="junto1">
                    Turno:
                </p>
                <?php echo $fila["horario"]; ?>
            </div>
            <div>
                <?php echo $fila["carrera"]; ?>
            </div>
            <div>
                <?php echo $fila["semestre"]; ?>
            </div>
            <div>
                <p class="junto1">
                    Repetidor:
                </p>
                <?php echo $fila["repetidor"]; ?>
            </div>
            <div>
                <p class="junto1">
                    Dias:
                </p>
                <?php echo $fila["lunes"]; ?>
                <?php echo $fila["martes"]; ?>
                <?php echo $fila["miercoles"]; ?>
                <?php echo $fila["jueves"]; ?>
                <?php echo $fila["viernes"]; ?>
                <?php echo $fila["sabado"]; ?>
            </div>
            <div>
                <p class="junto1">
                    Observaciones:
                </p>
                <?php echo $fila["observaciones"]; ?>
            </div>
        </div>
        <?php
        }
        ?>
        <div>
        </div>
    </main>
    <?php
        include "footer.php";
    ?>

    <script>
        function validar(url) {
            var eliminar = confirm("¿Desea eliminar el contacto seleccionado?");
            if (eliminar == true) {
                window.location = url;
            }
        }
    </script>
</body>
</html>
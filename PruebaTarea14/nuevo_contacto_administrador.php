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
        <h2 class="titulonaranja">
            NUEVO CONTACTO
        </h2>
        <div class="EspacioBoton">
            <a class="botoninicio" href="principal_administrador.php">
                Inicio
            </a>
        </div>
        <div>
            <form class="Justificado" action="guardar.php" method="post" method="post" name="nuevocontacto" enctype="multipart/form-data">
                <div class="Alado">
                    <div class="fondo-formulario-gris">
                        <label class="negrita" for="">
                            Nombre:
                        </label>
                    </div>
                    <div class="fondo-formulario-gris">
                        <label class="negrita" for="">
                            Apellido:
                        </label>
                    </div>
                    <div class="fondo-formulario-gris">
                        <label class="negrita" for="">
                            Imagen:
                        </label>
                    </div>
                    <div class="fondo-formulario-gris">
                        <label class="negrita" for="">
                            Email:
                        </label>
                    </div>
                    <div class="fondo-formulario-gris">
                        <label class="negrita" for="">
                            Celular:
                        </label>
                    </div>
                    <div class="fondo-formulario-gris">
                        <label class="negrita" for="">
                            Compañia:
                        </label>
                    </div>
                    <div class="fondo-formulario-gris">
                        <label class="negrita" for="">
                            Parentezco:
                        </label>
                    </div>
                </div>
                <div class="Alado">
                    <div class="espacio-formulario-contenido">
                        <input class="cajitaformulario" type="text" placeholder="" name="nombre">
                    </div>
                    <div class="espacio-formulario-contenido">
                        <input class="cajitaformulario" type="text" placeholder="" name="apellido">
                    </div>
                    <div class="espacio-formulario-contenido">
                        <input class="cajitaformulario" type="file" placeholder="" name="imagen">
                    </div>
                    <div class="espacio-formulario-contenido">
                        <input class="cajitaformulario" type="email" placeholder="" name="email">
                    </div>
                    <div class="espacio-formulario-contenido">
                        <input class="cajitaformulario" type="number" placeholder="" name="celular">
                    </div>
                    <div>
                        <div class="Junto2 espacio-formulario-opciones">
                            <input type="radio" name="compania" value="Telcel">
                            <label for="">
                                Telcel
                            </label>
                            <input type="radio" name="compania" value="ATT">
                            <label for="">
                                AT&T
                            </label>
                            <input type="radio" name="compania" value="Movistar">
                            <label for="">
                                Movistar
                            </label>
                        </div>
                    </div>
                    <div class="espacio-formulario-contenido">
                        <select class="cajitaformulario" name="parentesco" id="">
                            <option value="" hidden>
                                Escoge una opcion:
                            </option>
                            <option value="Escuela">
                                Escuela
                            </option>
                            <option value="Familia">
                                Familia
                            </option>
                            <option value="Amigo">
                                Amigo
                            </option>
                            <option value="Conocido">
                                Conocido
                            </option>
                        </select>
                    </div>
                </div>
                <div class="espacio-formulario-botones">
                        <button class="espacio-botones" type="submit">
                            Guardar Contacto
                        </button>
                        <button class="espacio-botones" type="reset">
                            Borrar datos
                        </button>
                    </div>
            </form>
        </div>
        <br>
    </main>
    <?php
        include "php_statico/footer.php";
    ?>
</body>
</html>
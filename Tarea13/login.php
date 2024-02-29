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
            LOGIN PANEL ADMINISTRATIVO
        </h2>
        <div class="EspacioBoton">
            <a class="botoninicio" href="index.php">
                Inicio
            </a>
        </div>
        <div>
            <form class="Justificado" action="autentificar.php" method="post">
                <div class="Alado">
                    <div class="fondo-formulario-gris">
                        <label class="negrita" for="">
                            Usuario:
                        </label>
                    </div>
                    <div class="fondo-formulario-gris">
                        <label class="negrita" for="">
                            Contraseña:
                        </label>
                    </div>
                    </div>
                </div>
                <div class="Alado">
                    <div class="espacio-formulario-contenido">
                        <input class="cajitaformulario" type="text" placeholder="" name="usuario">
                    </div>
                    <div class="espacio-formulario-contenido">
                        <input class="cajitaformulario" type="password" placeholder="" name="contrasena">
                    </div>
                </div>
                <div>
                    <button class="espacio-botones" type="submit">
                        Acceder contacto
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
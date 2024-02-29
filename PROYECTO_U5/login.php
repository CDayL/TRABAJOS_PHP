<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PROYECTO U5</title>
</head>
<body>
    <header>
        <div class="fondoimagen">
        </div>
        <nav class="navegador">
            <a class="botones_navegador" href="index.php">
                Inicio
            </a>
        </nav>
    </header>
    <main>
        <br>
        <h2>
            INICIO DE SESION
        </h2>
        <br>
        <div>
            <form action="autentificar.php" method="post">
                <div>
                    <div>
                        <label for="">
                            Usuario:
                        </label>
                        <div>
                        <input type="text" placeholder="Usuario" name="usuario">
                        </div>
                    </div>
                    <div>
                        <label for="">
                            Contraseña:
                        </label>
                        <div>
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        </div>
                    </div>
                    <div>
                    <button type="submit">
                        Iniciar
                    </button>
                    </div>
                </div>
            </form>
        </div>
        <br>
    </main>
    <?php
        include "footer.php";
    ?>
</body>
</html>
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
        include "header.php";
    ?>
    <main>
        <h2 class="titulonaranja">
            NUEVO CONTACTO
        </h2>
        <div class="EspacioBoton">
            <a class="botoninicio" href="index.php">
                Inicio
            </a>
        </div>
        <div>
            <form class="Justificado" action="guardar.php" method="post">
                <div>
                    <label for="">
                        Nombre:
                    </label>
                    <input class="cajitaformulario" type="text" placeholder="" name="nombre">
                </div>
                <div>
                    <label for="">
                        Apellido:
                    </label>
                    <input class="cajitaformulario" type="text" placeholder="" name="apellido">
                </div>
                <div>
                    <label for="">
                        Email:
                    </label>
                    <input class="cajitaformulario" type="email" placeholder="" name="email">
                </div>
                <div>
                    <label for="">
                        Celular:
                    </label>
                    <input class="cajitaformulario" type="number" placeholder="" name="celular">
                </div>
                <div>
                    <label class="Alado" for="">
                        Compañia:
                    </label>
                    <div class="Alado2">
                        <input type="radio" name="compania" value="Telcel">
                        <label class="cajitaformulariomultiple" for="">Telcel</label>
                        <input type="radio" name="compania" value="ATT">
                        <label for="">AT&T</label>
                        <input type="radio" name="compania" value="Movistar">
                        <label for="">Movistar</label>
                    </div>
                </div>
                <div>
                    <label for="">
                        Parentezco:
                    </label>
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
                <div class="Alado">
                </div>
                <div>
                    <button class="cajitaformulario" type="submit">
                        Guardar Contacto
                    </button>
                    <button class="cajitaformulario" type="reset">
                        Borrar datos
                    </button>
                </div>
            </form>
        </div>
    </main>
    <?php
        include "footer.php";
    ?>
</body>
</html>
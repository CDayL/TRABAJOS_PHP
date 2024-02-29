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
        include "header.php";
    ?>
    <main>
        <div>
            <h3>
                ¡Ponte en Contacto con Nosotros!
            </h3>
            <br>
        <div>
            <form action="agendar.php" method="post">
                <div>
                    <div>
                        <label for="">
                            Nombre Completo:
                        </label>
                        <div>
                            <input type="text" placeholder="" name="nombre">
                        </div>
                    </div>
                    <div>
                        <label for="">
                            Telefono:
                        </label>
                        <div>
                            <input type="number" placeholder="" name="telefono">
                        </div>
                    </div>
                    <div>
                        <label for="">
                            Correo Electronico:
                        </label>
                        <div>
                            <input type="email" placeholder="" name="correo">
                        </div>
                    </div>
                    <div>
                        <label for="">
                            Mensaje:
                        </label>
                        <div>
                            <textarea name="mensaje" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div>
                        <button type="submit">
                            Enviar
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
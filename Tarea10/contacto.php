<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style-main.css">
    <title>Document</title>
</head>
<body>
    <?php
        include "header.php";
    ?>
    <main class="borde">
        <!-- Texto con fondo -->
        <div class="FondoV Centro Juntos">
            <h2 class="TituloBC">
                Request now
            </h2>
        </div>
        <div class="Distancia">
            <!-- Contenido de textos -->
            <div class="Centro">
                <h4 class="SubTituloV">
                    Beautifully designed, print-ready massage gift certificate
                </h4>
                    <br>
                    <p class="TextoPV">
                        Leave your personal data, phone, select the desirable service
                        <br>
                        and suitable time. Leave a request and check the email.
                    </p>
                    <br><br>
            </div>
            <!-- Contenedores de formulario -->
            <div class="BordeR DistanciaF FondoVF Centro">
                <form action="">
                    <div>
                        <!-- Correo -->
                        <input class="Alado FondoVCB" id="Email" type="email" placeholder="Enter your email:">
                        <!-- Telefono -->
                        <input class="Alado FondoVCB" type="number" placeholder="Enter your phone:">
                    </div>
                    <div>
                        <!-- Servicios -->
                        <select class="Alado FondoVCB" name="" id="">
                            <option value="" hidden>
                                Select services:
                            </option>
                        </select>
                        <!-- Tiempo -->
                        <select class="Alado FondoVCB" name="Seguros" id="">
                            <option value="" hidden>
                                Select time:
                            </option>
                        </select>
                    </div>
                    <br><br>
                    <div>
                        <!-- Boton -->
                        <button class="BotonVBB" type="button">
                            Leave a Request
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php
        include "footer.php";
    ?>
</body>
</html>
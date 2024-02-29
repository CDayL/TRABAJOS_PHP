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
        <div>
            <form action="guardar.php" method="post">
                <!-- Titulo del formulario -->
                <p>
                    REGISTRO PARA PRACTICAS EN EL CENTRO DE COMPUTO
                </p>
                <div>
                    <!-- Nombre -->
                    <div>
                        <label for="">
                            NOMBRE:
                        </label>
                        <input type="text" placeholder="" name="nombre">
                    </div>
                    <!-- Apellido -->
                    <div>
                        <label for="">
                            MATRICULA:
                        </label>
                        <input type="text" placeholder="" name="matricula">
                    </div>
                    <!-- Repetidor -->
                    <div>
                        <label for="">
                            ¿Eres repetidor?:
                        </label>
                        <div>
                        <input type="radio" name="repetidor" value="SI">
                        <label for="">
                            SI
                        </label>
                        <input type="radio" name="repetidor" value="NO">
                        <label for="">
                            NO
                        </label>
                        </div>
                    </div>
                    <!-- Dias de practicas -->
                    <div>
                        <label for="">
                            Dia de practicas que prefieres:
                        </label>
                        <!-- Dias de la semana -->
                        <div>
                            <div>
                                <input type="checkbox" name="lunes" value="Lunes">
                                <label for="">
                                    Lunes
                                </label>
                            </div>
                            <div>
                                <input type="checkbox" name="martes" value="Martes">
                                <label for="">
                                    Martes
                                </label>
                            </div>
                            <div>
                                <input type="checkbox" name="miercoles" value="Miercoles">
                                <label for="">
                                    Miercoles
                                </label>
                            </div>
                        </div>
                        <div>
                            <div>
                                <input type="checkbox" name="jueves" value="Jueves">
                                <label for="">
                                    Jueves
                                </label>
                            </div>
                            <div>
                                <input type="checkbox" name="viernes" value="Viernes">
                                <label for="">
                                    Viernes
                                </label>
                            </div>
                            <div>
                                <input type="checkbox" name="sabado" value="Sabado">
                                <label for="">
                                    Sabado
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <!-- Horario -->
                    <div>
                        <label for="">
                            HORARIO
                        </label>
                        <div>
                            <input type="radio" name="horario" value="Matutino">
                            <label for="">
                                Matutino
                            </label>
                            <input type="radio" name="horario" value="Vespertino">
                            <label for="">
                                Vespertino
                            </label>
                        </div>
                    </div>
                    <!-- Carrera -->
                    <div>
                        <label for="">
                            CARRERA
                        </label>
                        <select name="carrera" id="">
                            <option value="" hidden>
                                Escoge tu carrera:
                            </option>
                            <option value="Ingenieria en sistemas">
                                Ingenieria en sistemas
                            </option>
                            <option value="Ingenieria Bioquimica">
                                Ingenieria Bioquimica
                            </option>
                            <option value="Ingenieria Mecanica">
                                Ingenieria Mecanica
                            </option>
                            <option value="Licenciatura en Administracion">
                                Licenciatura en Administracion
                            </option>
                        </select>
                    </div>
                    <!-- Semestre -->
                    <div>
                        <label for="">
                            SEMESTRE
                        </label>
                        <select name="semestre" id="">
                            <option value="" hidden>
                                Escoge tu semestre:
                            </option>
                            <option value="PRIMER SEMESTRE">
                                PRIMER SEMESTRE
                            </option>
                            <option value="SEGUNDO SEMESTRE">
                                SEGUNDO SEMESTRE
                            </option>
                            <option value="TERCER SEMESTRE">
                                TERCER SEMESTRE
                            </option>
                            <option value="CUARTO SEMESTRE">
                                CUARTO SEMESTRE
                            </option>
                            <option value="QUINTO SEMESTRE">
                                QUINTO SEMESTRE
                            </option>
                            <option value="SEXTO SEMESTRE">
                                SEXTO SEMESTRE
                            </option>
                            <option value="SEPTIMO SEMESTRE">
                                SEPTIMO SEMESTRE
                            </option>
                            <option value="OCTAVO SEMESTRE">
                                OCTAVO SEMESTRE
                            </option>
                            <option value="NOVENO SEMESTRE">
                                NOVENO SEMESTRE
                            </option>
                        </select>
                    </div>
                    <!-- Observaciones -->
                    <div>
                        <label for="">
                            OBSERVACIONES:
                        </label>
                        <textarea name="observaciones" cols="30" rows="10">
                        </textarea>
                    </div>
                </div>
                <button type="submit">
                    Enviar
                </button>
            </form>
        </div>
    </main>
    <?php
        include "footer.php";
    ?>
</body>
</html>
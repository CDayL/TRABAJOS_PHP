<?php
    session_start();
    session_destroy();
    echo'
        <script>
            alert("CERRANDO SESIÓN");
            location.href = "index.php";
        </script>
    ';
?>
<?php

    function conectar() {
        $host = 'localhost';
        $db = 'censo_db';
        $usuario = 'root';
        $contraseña = "root";
        $con = mysqli_connect($host, $usuario, $contraseña);

        mysqli_select_db($con, $db);

        return $con;
    }

?>
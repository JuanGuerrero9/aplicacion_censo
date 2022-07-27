<?php

    function conectar_db() {
        $base_datos = array(
            'host' => 'localhost',
            'usuario' => 'root',
            'contraseña' => 'root',
            'nombre' => 'censo_db',
            'opciones' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
        );
        $dsn = 'mysql:host=' . $base_datos['host'] . ';dbname=' . $base_datos['nombre'];
        $conexion = new PDO($dsn, $base_datos['usuario'], $base_datos['contraseña'], $base_datos['opciones']);

        return $conexion;
    }

?>
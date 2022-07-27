<?php

function actualizar_persona() {
    include("../data_base.php");
    $conexion = conectar();

    if (mysqli_connect_errno()) {
        printf("Conexión fallida: %s\n", mysqli_connect_error());
        exit();
    }

    $id = $_POST['id'];
    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];

    $sql = "UPDATE persona SET dni='$dni', nombre='$nombre', fecha_nacimiento='$fecha_nacimiento', direccion='$direccion', telefono='$telefono' 
    WHERE id='$id'";

    if($resultado = mysqli_query($conexion, $sql)) {
        header("Location: ../index.php");
    }
    mysqli_close($conexion);
}

?>
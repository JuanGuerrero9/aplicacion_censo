<?php
    include('../data_base.php');
    $con = conectar();

    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO personas VALUES('$dni', '$nombre', '$fecha_nacimiento', '$direccion', '$telefono')";

    $query = mysqli_query($con, $sql);

    if($query) {
        Header("Location: /../index.php");
    } else {

    }
?>
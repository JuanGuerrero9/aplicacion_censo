<?php

include("../data_base.php");
$con=conectar();

$id = $_POST['id'];
$dni = $_POST['dni'];
$nombre = $_POST['nombre'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];

$sql = "UPDATE persona SET dni='$dni', nombre='$nombre', fecha_nacimiento='$fecha_nacimiento', direccion='$direccion', telefono='$telefono' 
WHERE id='$id'";
$query=mysqli_query($con, $sql);

    if($query){
        header("Location: ../index.php");
    }
?>
<?php

function actualizar_persona($dni, $nombre, $fecha_nacimiento, $direccion, $telefono, $id) {
    include ('../data_base.php');
  
    $conexion = conectar_db();
  
    try {
      
      $actualizar_persona = "UPDATE personas SET dni = '$dni', nombre = '$nombre', fecha_nacimiento = '$fecha_nacimiento', ";
      $actualizar_persona .= "direccion = '$direccion', telefono = '$telefono' WHERE id = '$id'";
      
      $validacion = $conexion->prepare($actualizar_persona);
      $resultado = $validacion->execute();
      if($resultado == True) {
        return true;
    } else {
        return false;
    }
  
    } catch(PDOException $error) {
      $resultado['error'] = true;
      $resultado['mensaje'] = $error->getMessage();
    }
  }

session_start();

$errorMsgCrearPersona = '';
if(isset($_POST['editarPersona'])) {
$formulario = actualizar_persona($_POST['dni'], $_POST['nombre'], $_POST['fecha_nacimiento'], $_POST['direccion'], $_POST['telefono'], $_GET['idpersona']);
if($formulario) {
    $url = '../index.php';
    header("Location: $url"); // Redireccion a index.php
} else {
    $errorMsgCrearPersona = "Verificar los campos rellenados.";
}
    
} 

?>
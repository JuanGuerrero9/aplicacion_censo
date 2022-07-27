<?php
  function crear_persona($dni, $nombre, $fecha_nacimiento, $direccion, $telefono) {
    include ('../data_base.php');
  
    $conexion = conectar_db();
  
    try {
      
      
      $nueva_persona = "INSERT INTO personas (dni, nombre, fecha_nacimiento, direccion, telefono) values (?, ?, ?, ?, ?);";
      // $nueva_persona .= " values (:" . implode(", :", array_keys($persona)) . ")";
      
      $validacion = $conexion->prepare($nueva_persona);
      $resultado = $validacion->execute([$dni, $nombre, $fecha_nacimiento, $direccion, $telefono]);
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
  if(isset($_POST['crearPersona'])) {
    $formulario = crear_persona($_POST['dni'], $_POST['nombre'], $_POST['fecha_nacimiento'], $_POST['direccion'], $_POST['telefono']);
    if($formulario) {
        $url = '../index.php';
        header("Location: $url"); // Redireccion a index.php
    } else {
        $errorMsgCrearPersona = "Verificar los campos rellenados.";
    }
      
  } 

?>


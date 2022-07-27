<?php
    function iniciar_sesion($usuario, $password){
        try {
            session_start();
            include("data_base.php");
            $conexion = conectar_db();

            # Se realiza una consulta a la base de datos si existe el usuario con sus credenciales

            $validacion = $conexion->prepare("SELECT * FROM usuarios WHERE usuario=:usuario  AND password=:password"); 
            $validacion -> bindParam(":usuario", $usuario, PDO::PARAM_STR) ;
            $validacion -> bindParam(":password", $password, PDO::PARAM_STR) ;
            $validacion -> execute();
            $conexion = null;
            if($validacion->rowCount() == 1) {
                $fila  = $validacion->fetch();
                $_SESSION['usuario'] = $fila['usuario']; // Storing user session value
                return true;
            } else {
                return false;
            }
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }

    }

    
?>
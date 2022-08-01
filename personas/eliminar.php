<?php

	session_start();

    include("../data_base.php");

    if(isset($_GET['idpersona'])) {

        $conexion=conectar_db();
        try{
			$sql = "DELETE FROM personas WHERE id = '".$_GET['idpersona']."'";
			// declaración if-else en la ejecución de nuestra consulta
			$_SESSION['message'] = ( $conexion->exec($sql) ) ? 'Miembro eliminado correctamente' : 'Ocurrió un error. No se pudo eliminar al miembro';
	        $url = '../index.php';
            header("Location: $url"); // Redireccion a index.php
            
        }
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}
        
    } else {
		$_SESSION['message'] = 'Seleccione miembro para eliminar';
	}

?>
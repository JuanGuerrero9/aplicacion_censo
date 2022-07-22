<?php
    function iniciar_sesion(){
        include("data_base.php");

        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];
        session_start();
        $_SESSION['usuario'] = $usuario;

        # Se realiza una consulta a la base de datos si existe el usuario con sus credenciales

        $consulta = "SELECT * FROM usuarios where usuario = '$usuario' and contraseña = '$contraseña'";

        $conexion = conectar();
        $validacion = mysqli_query($conexion, $consulta);

        $filas = mysqli_num_rows($validacion);

        if($filas){
            header("location:index.php");
        }else{
            ?>
            <?php
                include("login.php");
            ?>
        <div class="container col-md-12">
            <div class="alert alert-danger col-auto text-center" style="margin-top:-400px">
                <h2>Error en la autenticacion! verifique su usuario y contraseña</h2>
            </div>
        </div>
        <?php
        }
        mysqli_free_result($validacion);
        mysqli_close($conexion);
    }

    iniciar_sesion();
?>
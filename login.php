
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Proyecyo para gestionar la información de un censo hecho para personas." />
        <meta name="author" content="Juan David Guerrero Espinosa" />
        <!-- XD -->
        <title>  Inicio Sesion </title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body style="background-image: url('img/beach-information.jpg');">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container" style="margin-top:70px">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">  
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Inicio Sesión</h3></div>
                                    <div class="card-body">
                                        <form action="validacion.php" method='post'>
                                            <div class="form-floating mb-3">
                                                <input type="text" placeholder="ingrese su nombre" name="usuario" class="form-control">
                                                <label for="inputUsername">Nombre de Usuario</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="password" placeholder="ingrese su contraseña" name="contraseña" class="form-control">
                                                <label for="inputPassword">Contraseña</label>
                                            </div>
                                            <input type="submit" value="Ingresar" class="btn btn-primary">
                                        </form>
                                    </div>
                                </div>               
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; CensoEficiente 2022</div>
                            <div>
                                <a href="#">Politicas de privacidad</a>
                                &middot;
                                <a href="#">Terminos y Condiciones</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        
</html>
<?php 
    $errorMsgCrearPersona = "";
    try {
        include("data_base.php");

        $conexion = conectar_db();
        $consultaSQL = "SELECT * FROM personas";
      
        $sentencia = $conexion->prepare($consultaSQL);
        $sentencia->execute();
      
        $personas = $sentencia->fetchAll();
      
    } catch(PDOException $error) {
        $error = $error->getMessage();
    }
?>


<!DOCTYPE html>
  <html lang="es">
      <head>
          <meta charset="utf-8" />
          <meta http-equiv="X-UA-Compatible" content="IE=edge" />
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
          <meta name="description" content="Proyecyo para gestionar la información de un censo hecho para personas." />
          <meta name="author" content="Juan David Guerrero Espinosa" />
          <title>  Index </title>
          <link href="css/styles2.css" rel="stylesheet" />
          <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
          <script src="js/bootstrap.js"></script>
          <script src="js/index.js"></script>
          <script src="js/jquery.min.js" crossorigin="anonymous"></script>
          <script src="js/bundle.min.js" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

      </head>
      <body class="sb-nav-fixed">
          <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
              <!-- Navbar Brand-->
              <a class="navbar-brand ps-3" href="index.php">Censo Eficiente</a>
              <!-- Sidebar Toggle-->
              <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
              <!-- Navbar Search-->
              <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                  <div class="input-group">
                      <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                      <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                  </div>
              </form>
              <!-- Navbar-->
              <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><span class="mr-2 d-none d-lg-inline text-gray-600 small">Bienvenido</span>
                        <img class="img-profile rounded-circle"
                            src="img/usuario.jpg"></a>
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="">Editar usuario</a></li>
                          <li><hr class="dropdown-divider" /></li>
                          <li><a class="dropdown-item" href="">Cerrar sesión</a></li>
                      </ul>
                  </li>
              </ul>
          </nav>
          <div id="layoutSidenav">
              <div id="layoutSidenav_nav">
                  <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                      <div class="sb-sidenav-menu">
                            <div class="nav">
                                <div class="sb-sidenav-menu-heading"> Apartado </div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsepersonas" aria-expanded="false" aria-controls="collapsepersonas">
                                    <div class="sb-nav-link-icon"><i class="fas fa-boxes"></i></div>
                                    Personas
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapsepersonas" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <button typy="button" class="btn btn-link" data-toggle="modal" data-target="#add-modal">
                                            <div class="sb-nav-link-icon"><i class="fas fa-ad"></i></div>
                                            Crear Persona
                                        </button>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsecensistas" aria-expanded="false" aria-controls="collapsecensistas">
                                    <div class="sb-nav-link-icon"><i class="fas fa-boxes"></i></div>
                                    Censistas
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapsecensistas" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a typy="button" class="btn btn-link" href="censistas/horario_censistas.php">
                                            <div class="sb-nav-link-icon"><i class="fas fa-ad"></i></div>
                                            Listar lideres censistas
                                        </a>
                                    </nav>
                                </div>
                            </div>
                      </div>
                  </nav>
              </div>
              <div id="layoutSidenav_content">
                <div class="container">
                    <div class="row"> 
                    
                            <div class="col-md-10">
                            <div class="alert alert-primary m-5 col-auto text-center">
                                <h2>Bienvenido a su plataforma de censo favorita!</h2>
                            </div>
                                <table class="table table-hover table-bordered table-striped" id="personas-tbl">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Dni</th>
                                            <th>Fecha de nacimiento</th>
                                            <th>Direccion</th>
                                            <th>Telefono</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                            <?php
                                                if ($personas && $sentencia->rowCount() > 0) {
                                                    foreach ($personas as $fila) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $fila["nombre"]; ?></td>
                                                        <td><?php echo $fila["dni"]; ?></td>
                                                        <td><?php echo $fila["fecha_nacimiento"]; ?></td>
                                                        <td><?php echo $fila["direccion"]; ?></td>
                                                        <td><?php echo $fila["telefono"]; ?></td>
                                                        <th><a href="#edit_<?php echo $fila['id']; ?>" class="btn btn-info" data-toggle="modal"><span class="fa fa-edit"></span> Editar</a>
                                                        <a href="#delete_<?php echo $fila['id']; ?>" class="btn btn-danger" data-toggle="modal"><span class="fa fa-trash"></span> Eliminar</a></th>  
                                                        <?php include("personas/editar_persona.php") ?>
                                                    </tr>
                                                    <?php
                                                    }
                                                }
                                            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
    

    

<?php include("modal_crear.php") ?>

</body>
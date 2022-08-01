<!-- Editar modal -->
<div class="modal fade" role="dialog" id="edit_<?php echo $fila['id']; ?>">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Editar Persona</h2>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <div class="container-fluid">
                        <form action="personas/actualizar.php?idpersona=<?php echo $fila['id']; ?>" method="post">
                        <input type="hidden" name="id">
                            <div class="form-group">
                                <label for="first_name" class="control-label">Nombre</label>
                                <input type="text" class="form-control rounded-0" id="nombre" name="nombre" value="<?php echo $fila['nombre']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="last_name" class="control-label">DNI</label>
                                <input type="text" class="form-control rounded-0" id="dni" name="dni" value="<?php echo $fila['dni']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="email" class="control-label">Fecha de nacmiento</label>
                                <input type="date" class="form-control rounded-0" id="fecha_nacimiento" name="fecha_nacimiento" value="<?php echo $fila['fecha_nacimiento']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="birthdate" class="control-label">Direccion</label>
                                <input type="text" class="form-control rounded-0" id="direccion" name="direccion" value="<?php echo $fila['direccion']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="birthdate" class="control-label">Telefono</label>
                                <input type="number" class="form-control rounded-0" id="telefono" name="telefono" value="<?php echo $fila['telefono']; ?>">
                            </div>
                            
                    </div>    
                </div>
                <div class="alert alert-danger errorMsg"><?php echo $errorMsgCrearPersona; ?></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-close"></span> Cancelar</button>
                    <button type="submit" class="btn btn-primary" name="editarPersona"><span class="fa fa-check"></span> Actualizar</button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>       
    <!-- /Editar modal -->

<!-- Eliminar -->
<div class="modal fade" id="delete_<?php echo $fila['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	<center><h4 class="modal-title" id="myModalLabel">Borrar persona</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Estas seguro en borrar los datos de?</p>
				<h2 class="text-center"><?php echo $fila['nombre'].' '.$fila['dni']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> Cancelar</button>
                <a href="eliminar.php?idpersona=<?php echo $fila['id']; ?>" class="btn btn-danger"><span class="fa fa-trash"></span> Si</a>
            </div>

        </div>
    </div>
</div>
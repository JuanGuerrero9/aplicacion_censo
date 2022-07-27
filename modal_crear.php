<?php
    
?>

<!-- Agregar modal -->
<div class="modal fade" role="dialog" id="add-modal">
        
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Crear persona</h2>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="personas/crear_persona.php" method="post">
                        <div class="form-group">
                            <label for="first_name" class="control-label">Nombre</label>
                            <input type="text" class="form-control rounded-0" id="nombre" name="nombre">
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="control-label">DNI</label>
                            <input type="text" class="form-control rounded-0" id="dni" name="dni" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="control-label">Fecha de nacmiento</label>
                            <input type="date" class="form-control rounded-0" id="fecha_nacimiento" name="fecha_nacimiento" required>
                        </div>
                        <div class="form-group">
                            <label for="birthdate" class="control-label">Direccion</label>
                            <input type="text" class="form-control rounded-0" id="direccion" name="direccion" required>
                        </div>
                        <div class="form-group">
                            <label for="birthdate" class="control-label">Telefono</label>
                            <input type="text" class="form-control rounded-0" id="telefono" name="telefono" required>
                        </div>
                        <div class="alert alert-danger errorMsg"><?php echo $errorMsgCrearPersona; ?></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" name="crearPersona" class="btn btn-primary"><span class="fa fa-save"></span> Guardar</a>
                        </div>
                    </form>
                </div>    
            </div>
                
            </form>
        </div>
    </div>
</div>       
<!-- /Agregar modal -->
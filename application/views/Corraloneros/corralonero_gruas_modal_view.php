<div class="modal fade" id="modal-default-gruas">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Actualizar Gruas</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            
                <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-6">
                    <input type="hidden" name="id" id="id_modal" >
                    <div class="form-group">
                    <label for="">Correo eléctronico</label>
                    <input type="email" name="correo" id="correo_modal" class="form-control" placeholder="Escriba aquí" required="required" >
                    </div>
                    <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" name="password" id="password_modal" class="form-control" placeholder="Escriba aquí" required="required" >
                    </div>
                    <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" name="nombre" id="nombre_modal" class="form-control" placeholder="Escribir aquí" min="1" max="100" required="required" >
                    </div>
                </div>
                <div class="col-xs-12 col-md-12 col-lg-6">
                    <div class="form-group">
                    <label for="">Ápellido Paterno</label>
                    <input type="text" name="a_paterno" id="paterno_modal" class="form-control" placeholder="Escriba aquí" required="required" >
                    </div>
                    <div class="form-group">
                    <label for="">Apellido Materno</label>
                    <input type="text" name="a_materno" id="materno_modal" class="form-control" placeholder="Escriba aquí" required="required" >
                    </div>
                    <div class="form-group">
                    <label for="">Tipo de usuario</label>
                    <select name="tipo" id="tipo_modal" class="form-control" required="required">
                        <option value="">Seleccione una opción</option>
                        <option value="Administrador">Administrador</option>
                        <option value="Corralonero">Corralonero</option>
                    </select>
                    </div>
                </div>
                </div>


            </div>
            <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="btn-actualiza-usuario">Actualizar</button>
            </div>
        </div>
    </div>
</div>
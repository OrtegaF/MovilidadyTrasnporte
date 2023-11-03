<div class="modal fade" id="modal-default-corralon">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Actualizar Corralon</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            
                <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-6">
                    <input type="hidden" name="id" id="id_modal" >
                    <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" name="nombre" id="nombre_modal" class="form-control" placeholder="Escriba aquí" required="required" >
                    </div>
                    <div class="form-group">
                    <label for="">Propietario</label>
                    <input type="text" name="propietario" id="propietario_modal" class="form-control" placeholder="Escriba aquí" required="required" >
                    </div>
                </div>
                <div class="col-xs-12 col-md-12 col-lg-6">
                    <div class="form-group">
                    <label for="">Teléfono</label>
                    <input type="text" name="telefono" id="telefono_modal" class="form-control" placeholder="Escriba aquí" required="required" >
                    </div>
                    <div class="form-group">
                    <label for="">Contacto</label>
                    <input type="email" name="contacto" id="contacto_modal" class="form-control" placeholder="Escribir aquí" min="1" max="100" required="required" >
                    </div>
                </div>
                </div>


            </div>
            <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="btn-actualiza-corralon">Actualizar</button>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="col-lg-12 col-md-8">
        <div class="card card-danger ">
            <div class="card-header">
                <h3 class="card-title">Registro de Arrastre</h3>
                  <!-- collapsed-card <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                    </div>-->
            </div>
            <div class="card-body">
                <form method="POST" id="addArrastre" action="<?php echo base_url('Corraloneros/insertArrastre')  ?>">
                    <h3>Punto de Recolección</h3>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">Lugar de Recolección</label>
                                        <input type="text" id="lugar" name="lugar" placeholder="14 Norte #5" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">Colonia o Localidad</label>
                                        <input type="text" id="colonia" name="colonia" class="form-control" placeholder="Bosques de San Sebastian">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">Municipio</label>
                                        <input type="text" id="municipio" name="municipio" class="form-control" placeholder="Puebla">
                                    </div>
                                </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                        <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                        <label for="">Folio</label>
                                        <input type="text" id="folio" name="folio" placeholder="A2746" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">Código Postal</label>
                                        <input type="text" id="codigo_p" name="codigo_p" class="form-control" placeholder="90583">
                                    </div>
                                </div>
                        </div>
                    </div>
                    <h3>Asignación de Almacén</h3>
                    <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">Región</label>
                                        <input type="text" id="region" name="region" class="form-control" placeholder="2A">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">Almacén</label>
                                        <input type="text" id="almacen" name="almacen" class="form-control" placeholder="Gruas TED">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">Contacto</label>
                                        <input type="text" id="contacto" name="contacto" class="form-control" placeholder="ortegavaldesf@gmail.com">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="">Ubicación del Alamacén</label>
                                        <input type="text" id="ubicacion_a" name="ubicacion_a" class="form-control" placeholder="11 Sur #67 Colonia Centro">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="">Teléfono</label>
                                        <input type="text" id=telefono" name="telefono" class="form-control" placeholder="2225678903">
                                    </div>
                                </div>
                            </div>
                    </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-danger" id="guardaInst" >Guardar</button>
            </div>
            </form>
        </div>
    </div>
</section>


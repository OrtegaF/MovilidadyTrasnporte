<section class="content">
    <div class="col-lg-12 col-md-8">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">Registro de Arrastre</h3>
            </div>
            <div class="card-body">
                <form method="POST" id="addArrastre" action="#">
                    <h3>Punto de Recolección</h3>
                    <div class="row">
                        <div class="col-lg-4 col-md-2">
                            <div class="form-group">
                                <label for="">Código Postal</label>
                                <input type="text" id="codigo_p" name="codigo_p" class="form-control" placeholder="90583">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-2">
                            <div class="form-group">
                                <label for="">Colonia de Recolección</label>
                                <select name="lugar" id="lugar" class="form-control" disabled="disabled">
                                    <option value="">-Seleccione-</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-2">
                                    <div class="form-group">
                                        <label for="">Dirección</label>
                                        <input type="text" id="direccion" name="direccion" class="form-control direccion_input" placeholder="14 Norte #6" disabled="disabled">
                                    </div>
                        </div>
                    </div>
                        <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label for="">Folio</label>
                                        <input type="text" id="folio" name="folio" placeholder="A2746" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label for="">Matricula del vehiculo arrastrado</label>
                                        <input type="text" id="matricula" name="matricula" class="form-control" placeholder="T90H583">
                                    </div>
                                </div>
                            </div>
                    <div id="mapa_">
                        
                    </div>
                    <div id="contenidoD">

                    </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-danger" id="guardaInst" >Guardar</button>
            </div>
            </form>
        </div>
    </div>
</section>

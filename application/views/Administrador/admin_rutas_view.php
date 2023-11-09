<section class="content">
    <div class="col-lg-12 col-md-8">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">Registro de Arrastre</h3>
            </div>
            <div class="card-body">
               <!-- <form method="POST" id="addArrastre" action="<?php echo base_url('insert_arrastre')  ?>">-->
                    <h3>Datos del vehiculo</h3>
                    <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label for="">Matricula del vehiculo arrastrado</label>
                                        <input type="text" id="matricula" name="matricula" class="form-control" placeholder="T90H583" required="required">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label for="">Numero de vehiculos involucrados</label>
                                        <input type="number" id="num_vehiculos" name="num_vehiculos" class="form-control" placeholder="0" disabled="disabled" required="required">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label for="">Folio</label>
                                        <input type="text" id="folio" name="folio" placeholder="A2746" value ="" class="form-control" disabled="disabled">
                                    </div>
                                </div>
                                
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-2">
                                    <div class="form-group">
                                        <label for="">Modelo del vehiculo</label>
                                        <input type="text" id="modelo" name="modelo" placeholder="HGS6" value ="" class="form-control" required="required">
                                    </div>
                            </div>
                        <div class="col-lg-4 col-md-2">
                            <div class="form-group">
                                <label for="">Tipo de vehiculo</label>
                                    <select name="t_vehiculo" id="t_vehiculo" class="form-control" required="required">
                                        <option value="">-Seleccione-</option>
                                        <?php
                                        if ($tipo_vehiculos!=false) {
                                            foreach ($tipo_vehiculos->result() as $tipo_vehiculo) {
                                        ?>
                                            <option value="<?= $tipo_vehiculo->id_vehiculo ?>"><?= $tipo_vehiculo->tipo_vehiculo ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-2">
                            <div class="form-group">
                                <label for="">Grua a utilizar</label>
                                    <select name="grua" id="grua" class="form-control" required="required">
                                        <option value="">-Seleccione-</option>
                                        <?php
                                        if ($tipo_gruas!=false) {
                                            foreach ($tipo_gruas->result() as $tipo_grua) {
                                        ?>
                                            <option value="<?= $tipo_grua->id_grua ?>"><?= $tipo_grua->tipo ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                            </div>
                        </div>
                    </div>
                    <h3>Punto de recoleccion del vehiculo</h3>
                    <div class="row">
                        <div class="col-lg-4 col-md-2">
                            <div class="form-group">
                                <label for="">Código Postal</label>
                                <input type="text" id="codigo_p" name="codigo_p" class="form-control" placeholder="90583" required="required">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-2">
                            <div class="form-group">
                                <label for="">Colonia de Recolección</label>
                                <select name="lugar" id="lugar" class="form-control" disabled="disabled" required="required">
                                    <option value="">-Seleccione-</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-2">
                                    <div class="form-group">
                                        <label for="">Dirección</label>
                                        <input type="text" id="direccion" name="direccion" class="form-control direccion_input" placeholder="14 Norte #6" disabled="disabled" required="required">
                                    </div>
                        </div>
                    </div>
                    
                    
                    
                        
                    <div id="mapa_">
                        
                    </div>
                    <div id="contenidoD">
                    </div>
            </div>
            <div class="card-footer">
                <button disabled="disabled" type="submit" class="btn" style= "background: #495057; color: white;" id="guardar_arrastre" >Guardar</button>
            </div>
           <!-- </form> -->
        </div>
    </div>
</section>

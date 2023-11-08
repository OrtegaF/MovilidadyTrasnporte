<section class="content">
    <div class="col-lg-12 col-md-8">
        <div class="card card-danger collapsed-card">
            <div class="card-header">
                <h3 class="card-title">Agregar Grua</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                        </button>
                    </div>
            </div>
            <div class="card-body">
                <form method="POST" id="addGruas" action="<?php echo base_url('insert_cranes')  ?>">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">Tipo de Grua</label>
                                <select name="tipo" id="tipo" class="form-control">
                                    <option value="">-Seleccione-</option>
                                    <?php
                                    if ($tipo_gruas!=false) {
                                        foreach ($tipo_gruas->result() as $tipo_grua) {
                                    ?>
                                        <option value="<?= $tipo_grua->tipo ?>"><?= $tipo_grua->tipo ?></option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">Matricula</label>
                                <input type="text" id="matricula" name="matricula" class="form-control" placeholder="HYI98K">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">No. de motor</label>
                                <input type="text" id="n_motor" name="n_motor" class="form-control" placeholder="H77463904">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">Kg máximos</label>
                                <input type="text" id="kg_max" name="kg_max" class="form-control" placeholder="300">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">Marca</label>
                                <input type="text" id="marca" name="marca" class="form-control" placeholder="FORD">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">Modelo</label>
                                <input type="text" id="modelo" name="modelo" class="form-control" placeholder="Modelo1">
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
    <div class="col-lg-12 col-md-8">
        <div class="card card-danger">
            <div class="card-header">
              <h2 class="card-title">Gruas registradas</h2>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-hover table-striped" id="tablaGruas">
                <thead>
                  <tr class="text-center">
                    <th>No.</th>
                    <th>Tipo de Grua</th>
                    <th>Matricula</th>
                    <th>No. de Motor</th>
                    <th>Kg máximos</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Opciones</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                  <?php
                  
                  if ($gruas!=false) {
                    foreach ($gruas->result() as $grua) {
                      ?>
                      <tr id="r_<?php echo $grua->id_grua ?>">
                        <td><?php echo $grua->id_grua ?></td>
                        <td><?php echo $grua->tipo ?></td>
                        <td><?php echo $grua->matricula ?></td>
                        <td><?php echo $grua->n_motor ?></td>
                        <td><?php echo $grua->kg_max ?></td>
                        <td><?php echo $grua->marca ?></td>
                        <td><?php echo $grua->modelo ?></td>
                        <td>
                        <!-- <a href="" title="Actualizar taller" class="">
                            <i class="fas fa-edit"></i>
                          </a>-->
                          <a href="<?php echo base_url('delete_cranesG/'.$grua->id_grua) ?>" title="Borrar Grua" class="btn-borrar" data-name="<?php echo $grua->id_grua ?>">
                            <i class="fas fa-trash"></i>
                          </a>
                        </td>
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
</section>
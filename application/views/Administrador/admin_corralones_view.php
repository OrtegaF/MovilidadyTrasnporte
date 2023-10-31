<section class="content">
    <div class="col-lg-12 col-md-8">
        <div class="card card-danger collapsed-card">
            <div class="card-header">
                <h3 class="card-title">Agregar Corralones</h3>
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
                <form method="POST" id="addGruas" action="<?= base_url('insert_Cranes')?>">
                    <h3>Datos Generales</h3>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Gruas TED">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">Propietario</label>
                                <input type="text" id="propietario" name="propietario" class="form-control" >
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">Zona</label>
                                <select name="zona" id="zona" class="form-control">
                                    <option value="">-Seleccione-</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <h3>Ubicación</h3>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">Calle con numero</label>
                                <input type="text" id="calle" name="calle" class="form-control" placeholder="14 norte #5">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">Colonia</label>
                                <input type="text" id="colonia" name="colonia" class="form-control" placeholder="Bosques de San Sebastian">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">Municipio</label>
                                <input type="text" id="municipio" name="municipio" class="form-control" placeholder="Puebla">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">Longitud</label>
                                <input type="text" id="longitud" name="longitud" class="form-control" placeholder="-19.97548393">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">Latitud</label>
                                <input type="text" id="latitud" name="latitud" class="form-control" placeholder="-19.77574893">
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
              <h2 class="card-title">corralons registradas</h2>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-hover table-striped" id="tablaCorralones">
                <thead>
                  <tr class="text-center">
                    <th>No.</th>
                    <th>Nombre del Corralón</th>
                    <th>Propietario</th>
                    <th>Zona</th>
                    <th>Coordenadas</th>
                    <th>Dirección</th>
                    <th>Opciones</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                  <?php
                  
                  if ($corralones!=false) {
                    foreach ($corralones->result() as $corralon) {
                      ?>
                      <tr id="r_<?php echo $corralon->id_corralon ?>">
                        <td><?php echo $corralon->id_corralon?></td>
                        <td><?php echo $corralon->nombre?></td>
                        <td><?php echo $corralon->propietario?></td>
                        <td><?php echo $corralon->zona?></td>
                        <td><?php echo $corralon->longitud?> , <?php echo $corralon->latitud?></td>
                        <td><?php echo $corralon->calle?> <?php echo $corralon->colonia?> <?php echo $corralon->municipio?></td>
                        <td>
                        <!-- <a href="" title="Actualizar taller" class="">
                            <i class="fas fa-edit"></i>
                          </a>-->
                          <a href="" title="Borrar taller" class="btn-borrar" data-name="<?php echo $corralon->id_corralon ?>">
                            <i class="fas fa-trash"></i>
                          </a>
                          <a href="" title="Actualizar taller" class="btn-actualizar" data-id="<?php echo $corralon->id_corralon ?>" data-toggle="modal" data-target="#modal-default">
                            <i class="fas fa-edit text-purple"></i>
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
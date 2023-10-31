<section class="content">
    <div class="col-lg-12 col-md-8">
        <div class="card card-danger collapsed-card">
            <div class="card-header">
                <h3 class="card-title">Registro de Arrastre</h3>
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
                <form method="POST" id="addArrastre" action="<?php echo base_url('insert_drag')  ?>">
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
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">Matricula del vehiculo arrastrado</label>
                                        <input type="text" id="matricula" name="matricula" class="form-control" placeholder="T90H583">
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
                                        <input type="text" id="almacen" name="almacen" class="form-control" placeholder="arrastres TED">
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
    <div class="col-lg-12 col-md-8">
        <div class="card card-danger">
            <div class="card-header">
              <h2 class="card-title">Arrastres registradas</h2>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-hover table-striped" id="tablaArrastres">
                <thead>
                  <tr class="text-center">
                    <th>No.</th>
                    <th>Matricula</th>
                    <th>Lugar del Inciso</th>
                    <th>Folio</th>
                    <th>Código Postal</th>
                    <th>Región</th>
                    <th>Almacén</th>
                    <th>Contacto</th>
                    <th>Ubicación del Almacén</th>
                    <th>Teléfonoo</th>
                    <th>Opciones</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                  <?php
                  
                  if ($arrastres!=false) {
                    foreach ($arrastres->result() as $arrastre) {
                      ?>
                      <tr id="r_<?php echo $arrastre->id_arrastre ?>">
                        <td><?php echo $arrastre->id_arrastre?></td>
                        <td><?php echo $arrastre->matricula?></td>
                        <td><?php echo $arrastre->lugar ?> <?php echo $arrastre->colonia ?> <?php echo $arrastre->municipio?></td>
                        <td><?php echo $arrastre->folio?></td>
                        <td><?php echo $arrastre->codigo_p ?></td>
                        <td><?php echo $arrastre->region ?></td>
                        <td><?php echo $arrastre->almacen ?></td>
                        <td><?php echo $arrastre->contacto ?></td>
                        <td><?php echo $arrastre->ubicacion_a ?></td>
                        <td><?php echo $arrastre->telefono ?></td>
                        <td>
                        <!-- <a href="" title="Actualizar taller" class="">
                            <i class="fas fa-edit"></i>
                          </a>-->
                          <a href="" title="Borrar taller" class="btn-borrar" data-name="<?php echo $arrastre->id_arrastre ?>">
                            <i class="fas fa-trash"></i>
                          </a>
                          <a href="" title="Actualizar taller" class="btn-actualizar" data-id="<?php echo $arrastre->id_arrastre ?>" data-toggle="modal" data-target="#modal-default">
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


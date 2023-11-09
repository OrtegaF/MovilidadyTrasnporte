<section class="content">
    <div class="col-lg-12 col-md-8">
        <div class="card card-danger collapsed-card">
            <div class="card-header">
                <h3 class="card-title">Agregar almacenes</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
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
                                    <?php
                                        if($zonas!=false){
                                            foreach ($zonas->result() as $zona) {
                                                ?>
                                                <option value="<?=$zona->id_zona?>"><?=$zona->zona?></option>
                                                <?php
                                            }
                                        }
                                     ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <h3>Ubicación</h3>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">Dirección</label>
                                <input type="text" id="direccion" name="direccion" class="form-control" placeholder="14 norte #5">
                            </div>
                        </div>
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
                        <!--<div class="col-lg-4">
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
                        </div>-->
                    </div>
                    <h3>Medios de Contacto</h3>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                            <label for="">Email</label>
                                <input type="email" id="contacto" name="contacto" class="form-control" placeholder="correo@gmail.com">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                            <label for="">Teléfono</label>
                                <input type="text" id="telefono" name="telefono" class="form-control" placeholder="2222222222">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                            <label for="">Día de disponibilidad</label>
                            <select name="dia" id="dia" class="form-control">
                                    <option value="">-Seleccione-</option>
                                    <?php
                                        if($dias!=false){
                                            foreach ($dias->result() as $dia) {
                                                ?>
                                                <option value="<?=$dia->id_dia?>"><?=$dia->diaSemana?>. Horario:<?=$dia->hora_inicio?>:00-<?=$dia->hora_cierre?>:00 </option>
                                                <?php
                                            }
                                        }
                                     ?>
                                </select>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn"  style= "background: #495057; color: white;" id="guardaInst" disabled="disabled">Guardar</button>
            </div>
            </form>
        </div>
    </div>
    <div class="col-lg-12 col-md-8">
        <div class="card card-danger">
            <div class="card-header">
              <h2 class="card-title">almacens registradas</h2>
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
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Día de disponibilidad</th>
                    <th>Opciones</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                  <?php
                  
                  if ($almacenes!=false) {
                    foreach ($almacenes->result() as $almacen) {
                      ?>
                      <tr id="r_<?php echo $almacen->id_almacen ?>">
                        <td><?php echo $almacen->id_almacen?></td>
                        <td><?php echo $almacen->nombre?></td>
                        <td><?php echo $almacen->propietario?></td>
                        <td><?php echo $almacen->id_zona?></td>
                        <td><?php echo $almacen->longitud?> , <?php echo $almacen->latitud?></td>
                        <td><?php echo $almacen->direccion?></td>
                        <td><?php echo $almacen->contacto?></td>
                        <td><?php echo $almacen->telefono?></td>
                        <?php
                        if($dias!=false){
                            foreach ($dias->result() as $dia) {
                            if($almacen->id_dia == $dia->id_dia){
                        ?>
                        <td><?=$dia->diaSemana?>. Horario:<?=$dia->hora_inicio?>:00-<?=$dia->hora_cierre?>:00</td>
                        <?php
                            }
                            }
                        }
                        ?>
                        <td>
                        <!-- <a href="" title="Actualizar taller" class="">
                            <i class="fas fa-edit"></i>
                          </a>-->
                          <a href="<?php echo base_url('delete_Cranes/'.$almacen->id_almacen) ?>" title="Borrar Corralon" class="btn-borrar" data-name="<?php echo $almacen->$id_almacen ?>">
                            <i style="color: #691b31;" class="fas fa-trash"></i>
                          </a>
                          <a href="" title="Actualizar Corralon" class="btn-actualizar" data-id="<?php echo $almacen->id_almacen ?>" data-toggle="modal" data-target="#modal-default-corralon">
                            <i style="color: #691b31;" class="fas fa-edit"></i>
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
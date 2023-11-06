<section class="content">
    <div class="col-lg-12 col-md-8">
        <div class="card card-danger collapsed-card">
            <div class="card-header">
                <h3 class="card-title">Agregar Usuarios</h3>
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
                <form method="POST" id="addGruas" action="<?= base_url('insert_Users')?>">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="ejemplo@gmail.com">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">Passsword</label>
                                <input type="password" id="password" name="password" class="form-control" >
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">Tipo de usuarios</label>
                                <select name="tipo" id="tipo" class="form-control">
                                    <option value="">-Seleccione-</option>
                                    <option value="Administrador">Administrador</option>
                                    <option value="Corralonero">Corralonero</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">Nombre(s)</label>
                                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Juan">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">Apellido Paterno</label>
                                <input type="text" id="a_paterno" name="a_paterno" class="form-control" placeholder="Lopez">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">Apellido Materno</label>
                                <input type="text" id="a_materno" name="a_materno" class="form-control" placeholder="Lopez">
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
              <h2 class="card-title">usuarios registradas</h2>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-hover table-striped" id="tablaUsuarios">
                <thead>
                  <tr class="text-center">
                    <th>No.</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Nombre</th>
                    <th>Tipo de Usuario</th>
                    <th>Opciones</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                  <?php
                  
                  if ($usuarios!=false) {
                    foreach ($usuarios->result() as $usuario) {
                      ?>
                      <tr id="r_<?php echo $usuario->id_usuario ?>">
                        <td><?php echo $usuario->id_usuario?></td>
                        <td><?php echo $usuario->email ?></td>
                        <td><?php echo $usuario->password?></td>
                        <td><?php echo $usuario->nombre ?> <?php echo $usuario->a_paterno?> <?php echo $usuario->a_materno ?></td>
                        <td><?php echo $usuario->tipo ?></td>
                        <td>
                        <!-- <a href="" title="Actualizar taller" class="">
                            <i class="fas fa-edit"></i>
                          </a>-->
                          <a href="<?php echo base_url('delete_Users/'.$usuario->id_usuario) ?>" title="Borrar Usuario" class="btn-borrar" data-name="<?php echo $usuario->id_usuario ?>">
                            <i class="fas fa-trash"></i>
                          </a>
                          <a href="" title="Actualizar taller" class="btn-actualizar" data-id="<?php echo $usuario->id_usuario ?>" data-toggle="modal" data-target="#modal-default-usuarios">
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
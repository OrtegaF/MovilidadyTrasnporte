<section class="content">
    <div class="col-lg-12 col-md-8">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">Agregar Usuarios</h3>
            </div>
            <div class="card-body">
                <form method="POST" id="addGruas" action="">
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
</section>
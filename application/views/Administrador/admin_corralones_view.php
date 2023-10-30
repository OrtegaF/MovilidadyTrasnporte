<section class="content">
    <div class="col-lg-12 col-md-8">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">Agregar Corralones</h3>
            </div>
            <div class="card-body">
                <form method="POST" id="addGruas" action="">
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
                                <select name="tipo" id="tipo" class="form-control">
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
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-danger" id="guardaInst" >Guardar</button>
            </div>
            </form>
        </div>
    </div>
</section>
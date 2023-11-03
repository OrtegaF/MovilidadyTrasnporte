
                    <h3>Asignación de Almacén</h3>
                    <?php
                    if($datos!=false){
                        foreach ($datos->result() as $dato) {
                        if($almacenes!=false){
                                foreach ($almacenes->result() as $alm) {
                                        if($dias!=false){
                                            foreach ($dias->result() as $dia) {
                                                if($alm ->id_dia == $dia->id_dia ){
                                                    //echo date("l");
                                        ?>
                    <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">Región</label>
                                        <?php
                                        if($zonas!=false){
                                            foreach ($zonas->result() as $zona) {
                                                if($alm->id_zona==$zona->id_zona){
                                                 ?>       
                                        <input type="text" id="region" name="region" class="form-control" value="<?=$zona->id_zona?>:<?=$zona->zona?>" disabled="disabled">
                                    <?php
                                    }
                                }
                            }
                            ?>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">Almacén</label>
                                        <input type="text" id="almacen" name="almacen" class="form-control" value="<?=$alm->nombre?>" disabled="disabled">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">Contacto</label>
                                        <input type="text" id="contacto" name="contacto" class="form-control" value="<?=$alm->contacto?>" disabled="disabled">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="">Ubicación del Alamacén</label>
                                        <input type="text" id="ubicacion_a" name="ubicacion_a" class="form-control"  value="<?=$alm->direccion?>" disabled="disabled">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="">Teléfono</label>
                                        <input type="text" id=telefono" name="telefono" class="form-control"  value="<?=$alm->telefono?>" disabled="disabled">
                                    </div>
                                </div>
                            </div>
                    </div>
<?php
}
}
}
}
}
}
 }
?>
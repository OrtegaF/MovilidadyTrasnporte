
                    <h3>Asignación de Almacén</h3>
<<<<<<< HEAD
=======
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
>>>>>>> main
                    <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
<<<<<<< HEAD
                                        <label for="">Región</label>  
                                        <input type="text" id="region" name="region" class="form-control" value="" disabled="disabled">
                            
=======
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
>>>>>>> main
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">Almacén</label>
<<<<<<< HEAD
                                        <input type="text" id="almacen" name="almacen" class="form-control" value="" disabled="disabled">
=======
                                        <input type="text" id="almacen" name="almacen" class="form-control" value="<?=$alm->nombre?>" disabled="disabled">
>>>>>>> main
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">Contacto</label>
<<<<<<< HEAD
                                        <input type="text" id="contacto" name="contacto" class="form-control" value="" disabled="disabled">
=======
                                        <input type="text" id="contacto" name="contacto" class="form-control" value="<?=$alm->contacto?>" disabled="disabled">
>>>>>>> main
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="">Ubicación del Alamacén</label>
<<<<<<< HEAD
                                        <input type="text" id="ubicacion_a" name="ubicacion_a" class="form-control"  value="" disabled="disabled">
=======
                                        <input type="text" id="ubicacion_a" name="ubicacion_a" class="form-control"  value="<?=$alm->direccion?>" disabled="disabled">
>>>>>>> main
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="">Teléfono</label>
<<<<<<< HEAD
                                        <input type="text" id="telefono" name="telefono" class="form-control"  value="" disabled="disabled">
                                    </div>
                                </div>
                            </div>
                    </div>
=======
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
>>>>>>> main

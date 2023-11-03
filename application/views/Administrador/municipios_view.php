<option value="">-Seleccione-</option>
<?php
if($datos!=false){
    foreach ($datos->result() as $dato) {
        if($municipios!=false){
            foreach ($municipios->result() as $muni) {
                if($dato->id_codigo == $muni->id_codigo){
                    ?>
                        <option value="<?= $muni->id_municipio ?>"><?= $muni->municipio ?>,<?= $muni->cabecera ?></option>
                    <?
                }
            }
        }
    }
}
  ?>
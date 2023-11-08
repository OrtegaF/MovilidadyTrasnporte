<option value="">-Seleccione-</option>
<?php
if($servicios_des!=false){
    foreach ($servicios_des->result() as $ds) {
            
                    ?>
                        <option value="<?= $ds->id_concepto ?>"><?= $ds->concepto ?></option>
                    <?
                }
            }
  ?>
<script>
    $(function(){
        var codigo;
        var municipio;
        var direccion1;

        $('#codigo_p').on('change', function(){
             codigo = $(this).val();
             //alert(periodo);
            var datos = {
                'codigo' : codigo, 
            }
            $.ajax({
                type : 'POST',
                url : '<?= base_url('search_info') ?>',
                data : datos,
                success : function(data){
                    $('#lugar').html(data);
                    $('#lugar').removeAttr('disabled');
                   alert(codigo);
                }
            });
        });
        $('#lugar').on('change', function(){
             municipio = $(this).val();
             //alert(periodo);
            var datos = {
                'codigo' : codigo, 
            }
            $.ajax({
                type : 'POST',
                url : '',
                data : datos,
                success : function(data){
                    $('#direccion').removeAttr('disabled');
                   alert(codigo);
                   alert(municipio);
                }
            });
        });
        $('#direccion').on('change', function(){
            alert(codigo);
            var datos = {
                'codigo' : codigo, 
                'municipio': municipio,
            }
            $.ajax({
                type : 'POST',
                url : '<?= base_url('try_info') ?>',
                data : datos,
                success : function(data){
                    $('#contenidoD').html(data);
                   //alert(data);
                }
            });
        });

        $('#direccion').on('change', function(){
            direccion1 = $(this).val();
            var datos = {
                'codigo' : codigo, 
                'municipio': municipio,
                'direccion1': direccion1,
            }
            $.ajax({
                type : 'POST',
                url : '<?= base_url('Administrador/mostrar_map') ?>',
                data : datos,
                success : function(data){
                    $('#mapa_').html(data);
                   alert('Se mando tu informacion al mapa');
                }
            });
        });
    });
</script> 
<script>
    $(function(){
        var codigo;
        var municipio;

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
    });
</script> 
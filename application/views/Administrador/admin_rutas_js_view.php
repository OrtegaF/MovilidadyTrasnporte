<script>
    $(function(){
        let codigo;
        let municipio;
        let direccion1;
        let matricula;
        let num_vehiculo;
        let anio;
        let grua;
        let mt;

        $('#codigo_p').on('change', function(){
             codigo = $(this).val();
             //alert(periodo);
            let datos = {
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
            let datos = {
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
            let datos = {
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
            let datos = {
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

        $('#matricula').on('change', function(){
             matricula = $(this).val();
             alert(matricula);
            /*let datos = {
                'codigo' : codigo, 
            }*/
            $.ajax({
                type : 'POST',
                url : '',
                data : '',
                success : function(data){
                    $('#num_vehiculos').removeAttr('disabled');
                   //alert(matricula);
                }
            });
        });
        $('#num_vehiculos').on('change', function(){
             num_vehiculo = $(this).val();
             alert(num_vehiculo);
            let datos = {
                'matricula' : matricula,
                'num_vehiculo' : num_vehiculo,
            }
            $.ajax({
                type : 'POST',
                url : '<?= base_url('Administrador/newFolio')?>',
                data : datos,
                success : function(data){
                    respuesta= JSON.parse(data);
                    alert(respuesta.folio);
                $('#folio').attr( 'value',respuesta.folio).val;
                }
            });
        });

        $('#guardar_arrastre').on("click",function() {
            
           var matricula = $("#matricula").val();
           var num_vehiculos = $("#num_vehiculos").val();
           var folio = $("#folio").val();
           var modelo = $("#modelo").val();
           var t_vehiculo = $("#t_vehiculo").val();
           var grua = $("#grua").val();
           var codigo_p = $("#codigo_p").val();
           var lugar = $("#lugar").val();
           var direccion = $("#direccion").val();

           var region = $("#region").val();
           var almacen = $("#almacen").val();
           var contacto = $("#contacto").val();
           var ubicacion_a = $("#ubicacion_a").val();
           var telefono = $("#telefono").val();
           var km = $("#km").val();
           var costo_arrastre = $("#costo_arrastre").val();

           var datos = {
                'matricula' : matricula,
                'num_vehiculos' : num_vehiculos,
				'folio' : folio,
                'modelo' : modelo,
                't_vehiculo' : t_vehiculo,
                'grua' : grua,
                'codigo_p' : codigo_p,
                'lugar' : lugar,
                'direccion' : direccion,

                'region' : region,
                'almacen' : almacen,
                'contacto' : contacto,
                'ubicacion_a' : ubicacion_a,
                'telefono' : telefono,
                'km' : km,
                'costo_arrastre' : costo_arrastre,
			}
            console.log(datos);
            $.ajax({
				type: 'POST',
				url	:  '<?= base_url('Administrador/insertArrastre')?>',
				data: datos,
				success: function(data){
                    alert('Tus datos se han registrado correctamente');
                    //var url = "https://sii.utpuebla.edu.mx/services_referencesRegs";    
                    //$(location).attr('href',url);
				}
			});
        });
        
    });
</script> 
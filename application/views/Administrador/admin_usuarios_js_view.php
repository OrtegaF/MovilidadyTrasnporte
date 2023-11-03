<script>

    $(function(){

        // Mensaje de confirmacion
        $('.btn-borrar').on('click', function(){
            //alert('Presionaste el botón para borrar');
            const name = $(this).attr('data-name');
            if (confirm('¿Deseas borrar el taller '+ name +'?')) {
                return true;
            }
            else{
                return false;   
            }
        });

        $('.btn-actualizar').on('click', function(){
            const id = $(this).attr('data-id');
            const datos = {
                'id_usuario' : id,
            }
            //alert("entro");
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('get_Users') ?>',
                data: datos,
                success: function( data ){
                    console.log(data);
                    const obj = JSON.parse(data);
                    $('#id_modal').val(obj.id_usuario);
                    $('#correo_modal').val(obj.email);
                    $('#password_modal').val(obj.password);
                    $('#nombre_modal').val(obj.nombre);
                    $('#paterno_modal').val(obj.a_paterno);
                    $('#materno_modal').val(obj.a_materno);
                    $('#tipo_modal').val(obj.tipo);
                }
            })
        });

        $('#btn-actualiza-usuario').on('click', function(){
            const id = $('#id_modal').val();
            const email = $('#correo_modal').val();
            const password = $('#password_modal').val();
            const nombre = $('#nombre_modal').val();
            const a_paterno = $('#paterno_modal').val();
            const a_materno = $('#materno_modal').val();
            const tipo = $('#tipo_modal').val();
            const datos = {
                'id'            :   id,
                'email'         :   email,
                'password'      :   password,
                'nombre'        :   nombre,
                'a_paterno'     :   a_paterno,
                'a_materno'     :   a_materno,
                'tipo'          :   tipo,
            }
            console.log(datos);
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('update_Users') ?>',
                data: datos,
                success: function( data ){
                    alert('Usuario actualizado');
                    $('#modal-default-usuarios').modal('hide');
                    redirect(base_url('admin_addUsers'));
                }
            })
        });

    })

</script>
<script>

    $(function(){

        $('#dia').change(function(){ 
            //alert("el input cambio");
            if($(this).val()==''){ 
                $('#guardaInst').attr('disabled', 'disabled');
            }
            else{
                $('#guardaInst').removeAttr("disabled");
                
            }
        });

        $('#guardaInst').on('click', function(){
               var Toast = Swal.mixin({
                 toast: true,
                 position: 'top-end',
                 timerProgressBar: true,
                 showConfirmButton: false,
                 timer: 1200
               });
                   Toast.fire({
                   icon: 'success',
                   title: 'Datos guardados',
                })
             
        });

        // Mensaje de confirmacion
        $('.btn-borrar-corralon').on('click', function(){
            //alert('Presionaste el botón para borrar');
            const name = $(this).attr('data-name');
            if (confirm('¿Deseas borrar el Almacen '+ name +'?')) {
                return true;
            }
            else{
                return false;   
            }
        });

        $('.btn-actualizar').on('click', function(){
            const id = $(this).attr('data-id');
            const datos = {
                'id_almacen' : id,
            }
            //alert("entro");
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('get_Cranes') ?>',
                data: datos,
                success: function( data ){
                    console.log(data);
                    const obj = JSON.parse(data);
                    $('#id_modal').val(obj.id_almacen);
                    $('#nombre_modal').val(obj.nombre);
                    $('#propietario_modal').val(obj.propietario);
                    $('#telefono_modal').val(obj.telefono);
                    $('#contacto_modal').val(obj.a_contacto);
                }
            })
        });

        $('#btn-actualiza-corralon').on('click', function(){
            const id = $('#id_modal').val();
            const nombre = $('#nombre_modal').val();
            const propietario = $('#propietario_modal').val();
            const telefono = $('#telefono_modal').val();
            const contacto = $('#contacto_modal').val();
            const datos = {
                'id'            :   id,
                'nombre'        :   nombre,
                'propietario'   :   propietario,
                'telefono'      :   telefono,
                'contacto'      :   contacto,
            }
            console.log(datos);
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('update_Cranes') ?>',
                data: datos,
                success: function( data ){
                    alert('Almacen actualizado');
                    $('#modal-default-corralon').modal('hide');
                    redirect(base_url('admin_addCrane'));
                }
            })
        });

    })

</script>
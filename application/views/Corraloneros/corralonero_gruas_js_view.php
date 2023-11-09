<script>

    $(function(){

        $('#modelo').change(function(){ 
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
                 timer: 1000
               });
                   Toast.fire({
                   icon: 'success',
                   title: 'Datos guardados',
                })
             
        });

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

    })

</script>
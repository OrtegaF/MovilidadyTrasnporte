<script>
    $(function(){

        $('#contacto').change(function(){ 
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
                timer: 11000
            });
                Toast.fire({
                icon: 'success',
                title: 'Datos guardados',
                })
            
        });

    })
</script>
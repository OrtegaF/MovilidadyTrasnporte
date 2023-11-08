<script>
    $(function(){
        mt = document.getElementById("mt").value;
             //alert(cost);
            let datos = {
                'mt' : mt, 
            }
            $.ajax({
                type : 'POST',
                url : '<?= base_url('Administrador/costo_arrastre')?>',
                data : datos,
                success : function(data){
                }
            });
    });
</script> 
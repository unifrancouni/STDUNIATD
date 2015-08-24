

<!-- Select picker-->
<script src="<?php echo base_url(); ?>styles/admin/dist/js/bootstrap-select.min.js" type="text/javascript"></script>


<script>

    llamarFuncionalidadTabla("#vc");

    $('#editarValorCatalogo').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var code = button.data('codigo') // Extract info from data-* attributes
        var description = button.data('descripcion')
        var title = 'Editar valor: '+description
        var catalogoID = button.data('catalogoid')
        var valorCatalogoID = button.data('valorcatalogoid')

        var modal = $(this)
        modal.find('.modal-title').text(title+':'+catalogoID)
        modal.find('#txtDescripcion').attr('value',description)
        modal.find('#txtCodigo').attr('value',code)
        modal.find('#idCatalogo').attr('value',catalogoID)
        modal.find('#idValorCatalogo').attr('value',valorCatalogoID)

    });


    $(function () {
        $('.selectpicker').selectpicker('refresh');

    });


</script>
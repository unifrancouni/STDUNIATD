<!-- ***************** -->
<!-- Inicio del Footer -->
<!-- ***************** -->

<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.0
    </div>
    <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
</footer>

<!-- jQuery 2.1.3 -->
<script src="<?php echo base_url(); ?>styles/admin/plugins/jQuery/jQuery-2.1.3.min.js"></script>
<!-- jQuery UI 1.11.2 -->
<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.2 JS -->
<script src="<?php echo base_url(); ?>styles/admin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

<?php /*
<!-- Morris.js charts -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url(); ?>styles/admin/plugins/morris/morris.min.js" type="text/javascript"></script>
*/?>

<!-- Sparkline -->
<script src="<?php echo base_url(); ?>styles/admin/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- jvectormap -->
<script src="<?php echo base_url(); ?>styles/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>styles/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>styles/admin/plugins/knob/jquery.knob.js" type="text/javascript"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url(); ?>styles/admin/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
<!-- datepicker -->
<script src="<?php echo base_url(); ?>styles/admin/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url(); ?>styles/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
<!-- iCheck -->
<script src="<?php echo base_url(); ?>styles/admin/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url(); ?>styles/admin/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- FastClick -->
<script src='<?php echo base_url(); ?>styles/admin/plugins/fastclick/fastclick.min.js'></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>styles/admin/dist/js/app.min.js" type="text/javascript"></script>

<script src="<?php echo base_url(); ?>styles/admin/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>styles/admin/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>



<?php
/*
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>styles/admin/dist/js/pages/dashboard.js" type="text/javascript"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>styles/admin/dist/js/demo.js" type="text/javascript"></script>
*/?>

<!-- ***************** -->
<!-- Fin del Footer -->
<!-- ***************** -->

<script>
    function llamarFuncionalidadTabla(){

        $('#example1').dataTable({
            "bAutoWidth": true,
            "bPaginate": true,
            "bLengthChange": true,
            "bFilter": true,
            "bSort": true,
            "bInfo": true,
            "oLanguage": {
                "sLengthMenu": "_MENU_ / página",
                "sInfo": "(_START_ a _END_) de _TOTAL_ registros",
                    "sSearch": "Buscar:  ",
                "oPaginate": {
                    "sNext": "Siguiente",
                    "sPrevious": "Atrás"
                },
                "sEmptyTable": "No se encontraron registros.",
                "sZeroRecords": "No se encontraron registros.",
                "sInfoFiltered": " - filtrando de _MAX_ registros",
                "sInfoEmpty": "No se encontraron registros"
            },
            "aLengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, 'Todos']],
            "bScrollX": true,
            "sScrollY": "200px",
            "bScrollCollapse": true,
            "fnDrawCallback": function() {
                $('#example1').dataTable()._fnScrollDraw();
                $('#example1').closest(".dataTables_scrollBody").height(200);
            }
        });



        // Setup - add a text input to each footer cell
        $('#example1 tfoot th').each( function () {
            var title = $('#example1 thead th').eq( $(this).index() ).text();
            $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
        } );

        // DataTable
        var table = $('#example1').DataTable();

        // Apply the search
        table.columns().every( function () {
            var that = this;

            $( 'input', this.footer() ).on( 'keyup change', function () {
                that
                    .search( this.value )
                    .draw();
            } );
        } );
    }
    function llamarGraficar(){
        /*FUNCION DEFINIDA POR MI*/
        "use strict";
        var bar_data = {
            data: [
                ["Enero", 1],
                ["Febrero", 2],
                ["Marzo", 3],
                ["Abril", 4],
                ["Mayo", 5],
                ["Junio", 6]
                //["Julio",7],
                //["Agosto",8],
                //["Septiembre",9],
                //["Octubre",10],
                //["Noviembre",11],
                //["Diciembre",5]
            ],
            color: "#3c8dbc"
        };
        $.plot("#bar-chart", [bar_data], {
            grid: {
                borderWidth: 1,
                borderColor: "#f3f3f3",
                tickColor: "#f3f3f3"
            },
            series: {
                bars: {
                    show: true,
                    barWidth: 0.5,
                    align: "center"
                }
            },
            xaxis: {
                mode: "categories",
                tickLength: 0
            }
        });
        /* END BAR CHART */
	}
	function llamarDashboard(){
		$.ajax({
			url: '<?php echo base_url()."dashboard"; ?>',
			dataType: 'html',
			success: function (response) {
				$('.content-wrapper').html($(response).filter(".content-wrapper").html());
				$("#li-dashboard").attr({class: 'active'});
				$("#li-catalogo").attr({class: ''});
				$("#li-afilicacion").attr({class: ''});
				$("#li-planificacion").attr({class: ''});
				$("#li-finanzas").attr({class: ''});
                llamarGraficar();
			}
		});
	}
	function llamarCatalogos(){
		$.ajax({
			url: '<?php echo base_url()."catalogos"; ?>',
			dataType: 'html',
			success: function (response) {
				$('.content-wrapper').html($(response).filter(".content-wrapper").html());
				$("#li-dashboard").attr({class: ''});
				$("#li-catalogo").attr({class: 'active'});
				$("#li-afilicacion").attr({class: ''});
				$("#li-planificacion").attr({class: ''});
				$("#li-finanzas").attr({class: ''});
                llamarFuncionalidadTabla();
			}
		});
	}
	function llamarAfiliacion(){
		$.ajax({
			url: '<?php echo base_url()."afiliacion"; ?>',
			dataType: 'html',
			success: function (response) {
				$('.content-wrapper').html($(response).filter(".content-wrapper").html());
				$("#li-dashboard").attr({class: ''});
				$("#li-catalogo").attr({class: ''});
				$("#li-afilicacion").attr({class: 'active'});
				$("#li-planificacion").attr({class: ''});
				$("#li-finanzas").attr({class: ''});
			}
		});
	}
	function llamarPlanificacion(){
		$.ajax({
			url: '<?php echo base_url()."planificacion"; ?>',
			dataType: 'html',
			success: function (response) {
				$('.content-wrapper').html($(response).filter(".content-wrapper").html());
				$("#li-dashboard").attr({class: ''});
				$("#li-catalogo").attr({class: ''});
				$("#li-afilicacion").attr({class: ''});
				$("#li-planificacion").attr({class: 'active'});
				$("#li-finanzas").attr({class: ''});
			}
		});
	}
	function llamarFinanzas(){
		$.ajax({
			url: '<?php echo base_url()."finanzas"; ?>',
			dataType: 'html',
			success: function (response) {
				$('.content-wrapper').html($(response).filter(".content-wrapper").html());
				$("#li-dashboard").attr({class: 'active'});
				$("#li-catalogo").attr({class: ''});
				$("#li-afilicacion").attr({class: ''});
				$("#li-planificacion").attr({class: ''});
				$("#li-finanzas").attr({class: 'active'});
			}
		});
	}
</script>
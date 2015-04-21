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

<?php
/*
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>styles/admin/dist/js/pages/dashboard.js" type="text/javascript"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>styles/admin/dist/js/demo.js" type="text/javascript"></script>
*/?>

<!-- FLOT CHARTS -->
<script src="<?php echo base_url(); ?>styles/admin/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="<?php echo base_url(); ?>styles/admin/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="<?php echo base_url(); ?>styles/admin/plugins/flot/jquery.flot.pie.min.js" type="text/javascript"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="<?php echo base_url(); ?>styles/admin/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>


<!-- FUNCION DEFINIDA POR MI -->
<script type="text/javascript">
    $(function(){
        /*FUNCION DEFINIDA POR MI*/
        "use strict";
        var bar_data = {
            data: [
                  ["Ene", 1],
                  ["Feb", 2],
                  ["Mar", 3],
                  ["Abr", 4],
                  ["May", 5],
                  ["Jun", 6],
                  //["Jul",7],
                  //["Ago",8],
                  //["Sep",9],
                  //["Oct",10],
                  //["Nov",11],
                  //["Dic",5]
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
    });
</script>







</body>

<!-- ***************** -->
<!-- Fin del Footer -->
<!-- ***************** -->

</html>
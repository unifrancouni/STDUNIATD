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
    });
</script>
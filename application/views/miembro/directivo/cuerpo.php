<!-- ***************** -->
<!-- Inicio del Cuerpo -->
<!-- ***************** -->

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Panel de Control
            <small>Administrador</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url().'dashboard'; ?>"><i class="fa fa-dashboard"></i> Panel de control</a></li>
            <!-- <li class="active">Dashboard</li> -->
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3><?php  echo $cant_afiliados; ?></h3>
                        <p>Afiliados</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person"></i>
                    </div>
                    <a href="#" class="small-box-footer">Ver los afiliados <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>0</h3>
                        <p>Solicitudes</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">Ver solicitudes <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?php echo $cant_noticias; ?></h3>
                        <p>Noticias</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-earth"></i>
                    </div>
                    <a href="#" class="small-box-footer">Ver las noticias <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?php echo $cant_visitas; ?></h3>
                        <p>Visitas</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-eye"></i>
                    </div>
                    <a href="#" class="small-box-footer">Ver visitas <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
        </div>




        <div class="row">
            <div class="col-md-12">
                <!-- Bar chart -->
                <div class="box box-primary">
                    <div class="box-header">
                        <i class="fa fa-bar-chart-o"></i>
                        <h3 class="box-title">Visitas por mes</h3>
                    </div>
                    <div class="box-body">
                        <div id="bar-chart" style="height: 300px;"></div>
                    </div><!-- /.box-body-->
                </div><!-- /.box -->
            </div>
        </div>






<?php /*
        <div class="row">
            <div class="col-md-12">
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">Actividad 1</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        Cuerpo de Actividad 1
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!--row (Actividad) -->
*/?>

    </section>
</div> <!-- div Wraper -->


<!-- ***************** -->
<!-- Fin del Cuerpo -->
<!-- ***************** -->

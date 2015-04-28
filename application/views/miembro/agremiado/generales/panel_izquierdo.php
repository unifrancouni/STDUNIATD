<!-- ***************** -->
<!-- Inicio de Panel Izquierdo -->
<!-- ***************** -->
<div class="main-sidebar">
    <!-- Inner sidebar -->
    <div class="sidebar">
        <!-- user panel (Optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url(); ?>/images/images_perfil/<?php echo $imagen; ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p><?php echo $nombre_usuario; ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div><!-- /.user-panel -->


        <!-- Search Form (Optional)
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search..."/>
            <span class="input-group-btn">
              <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
            </span>
          </div>
        </form>
        <!-- /.sidebar-form -->


        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">COMANDOS</li>
            <!-- Optionally, you can add icons to the links -->
            <li id="li-dashboard" class="active"><a href="#" onclick="llamarDashboard()">
                    <i class="fa fa-dashboard"></i> <span>Panel de Control</span></a><</li>
            <li><a href="#"><i class="fa fa-comments"></i> <span>Foro</span></a></li>
            <li class="treeview">
                <a href="#"><i class="fa fa-sitemap"></i> <span>Módulos</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li id="li-catalogo"><a href="#" onclick="llamarCatalogos()" ><i class="fa fa-book"></i> Catálogos Básicos</a></li>
					<li id="li-afilicaion"><a href="#" onclick="llamarAfiliacion()" ><i class="fa fa-users"></i> Afiliación</a></li>
                    <li id="li-planificacion"><a href="#" onclick="llamarPlanificacion()" ><i class="fa fa-calendar"></i> Planificación</a></li>
                    <li id="li-finanzas"><a href="#" onclick="llamarFinanzas()" ><i class="fa fa-usd"></i> Finanzas</a></li>
                </ul>
        </ul><!-- /.sidebar-menu -->

    </div><!-- /.sidebar -->
</div><!-- /.main-sidebar -->

<!-- ***************** -->
<!-- Fin Panel Izquierdo -->
<!-- ***************** -->
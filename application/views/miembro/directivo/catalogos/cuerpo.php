<!-- ***************** --><!-- Inicio del Cuerpo --><!-- ***************** --><div class="content-wrapper">    <!-- Content Header (Page header) -->    <section class="content-header">        <h1>            Catalogos            <small>Administrador</small>        </h1>        <ol class="breadcrumb">            <li><a href="<?php echo base_url().'dashboard'; ?>"><i class="fa fa-dashboard"></i> Panel de control</a></li>            <!-- <li class="active">Dashboard</li> -->        </ol>    </section>    <!-- Main content -->    <section class="content" style="padding-bottom: 50px !important;">        <div class="row">            <div class="col-lg-9">                <div class="row">                    <div class="col-lg-12">                        <div class="box box-primary">                            <div class="box-header">                                <h3 class="box-title">Catálogos</h3>                                <div class="row">                                    <div class="col-lg-12">                                        <button class="btn btn-block btn-success" data-toggle="modal" data-target="#agregarCatalogo">                                            <i class="fa fa-plus"></i>                                            Agregar Catálogo                                        </button>                                    </div>                                </div>                            </div><!-- /.box-header -->                            <div class="box-body">                                <table id="c" class="table table-bordered table-hover dataTable" role="grid">                                    <thead>                                    <tr>                                        <th>Código</th>                                        <th>Catálogo</th>                                        <th>Estado</th>                                        <th>Acciones</th>                                    </tr>                                    </thead>                                    <tbody>                                    <?php foreach($Catalogos as $fila):?>                                        <tr>                                            <td><?= $fila->sCodigoInterno ?></td>                                            <td><?= $fila->sDescripcion ?></td>                                            <td><?php if($fila->nActivo==1){echo "Activo";} else{echo "Inactivo";} ?></td>                                            <td>                                                <div class="row">                                                    <div class="col-lg-1">                                                        <button                                                            data-codigo="<?php echo $fila->sCodigoInterno; ?>"                                                            data-descripcion="<?php echo $fila->sDescripcion; ?>"                                                            data-activo="<?php echo $fila->nActivo; ?>"                                                            data-catalogoid="<?php echo $fila->nStbCatalogoID; ?>"                                                            data-toggle="modal" data-target="#editarCatalogo"                                                            class="btn btn-box-tool">                                                            <i class="fa fa-pencil"></i>                                                        </button>                                                    </div>                                                    <div class="col-lg-1">                                                        <?php echo form_open('catalogos/eliminarCatalogo/'); ?>                                                            <input type="hidden" name="catalogoID" value="<?php echo $fila->nStbCatalogoID; ?>">                                                            <button                                                                data-codigo="<?php echo $fila->sCodigoInterno; ?>"                                                                data-descripcion="<?php echo $fila->sDescripcion; ?>"                                                                data-activo="<?php echo $fila->nActivo; ?>"                                                                data-catalogoID="<?php echo $fila->nStbCatalogoID; ?>"                                                                type="submit"                                                                class="btn btn-box-tool">                                                                <i class="fa fa-times"></i>                                                            </button>                                                        </form>                                                    </div>                                                    <div class="col-lg-1">                                                        <?php echo form_open('valorescatalogos'); ?>                                                            <input type="hidden" name="catalogoID" value="<?php echo $fila->nStbCatalogoID; ?>">                                                            <button                                                                data-codigo="<?php echo $fila->sCodigoInterno; ?>"                                                                data-descripcion="<?php echo $fila->sDescripcion; ?>"                                                                data-activo="<?php echo $fila->nActivo; ?>"                                                                data-catalogoID="<?php echo $fila->nStbCatalogoID; ?>"                                                                type="submit"                                                                class="btn btn-box-tool">                                                                <i class="fa fa-bars"></i>                                                            </button>                                                        </form>                                                    </div>                                                </div>                                            </td>                                        </tr>                                    <?php endforeach; ?>                                    </tbody>                                </table>                            </div><!-- /.box-body -->                        </div><!-- /.box -->                    </div>                </div><!-- /.row -->            </div>            <div class="col-lg-3">                <div class="box box-warning direct-chat direct-chat-warning">                    <div class="box-header with-border">                        <h3 class="box-title">Chat Directo</h3>                        <div class="box-tools pull-right">                            <span data-toggle="tooltip" title="" class="badge bg-yellow" data-original-title="3 Nuevos mensajes">3</span>                            <!--<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>-->                            <button class="btn btn-box-tool" data-toggle="tooltip" title="" data-widget="chat-pane-toggle" data-original-title="Contactos"><i class="fa fa-comments"></i></button>                            <!--<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>-->                        </div>                    </div><!-- /.box-header -->                    <div class="box-body">                        <!-- Conversations are loaded here -->                        <div class="direct-chat-messages" style="height: 480px !important;">                            <!-- Message. Default to the left -->                            <div class="direct-chat-msg">                                <div class="direct-chat-info clearfix">                                    <span class="direct-chat-name pull-left">Franco Ugarte</span>                                    <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>                                </div><!-- /.direct-chat-info -->                                <img class="direct-chat-img" src="<?php echo base_url(); ?>/images/images_perfil/<?php echo $imagen; ?>" alt="message user image"><!-- /.direct-chat-img -->                                <div class="direct-chat-text">                                    Hola!                                </div><!-- /.direct-chat-text -->                            </div><!-- /.direct-chat-msg -->                            <!-- Message to the right -->                            <div class="direct-chat-msg right">                                <div class="direct-chat-info clearfix">                                    <span class="direct-chat-name pull-right">María Esther</span>                                    <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>                                </div><!-- /.direct-chat-info -->                                <img class="direct-chat-img" src="<?php echo base_url(); ?>/images/images_perfil/<?php echo $imagen; ?>" alt="message user image"><!-- /.direct-chat-img -->                                <div class="direct-chat-text">                                    Hola! como estás?                                </div><!-- /.direct-chat-text -->                            </div><!-- /.direct-chat-msg -->                            <!-- Message. Default to the left -->                            <div class="direct-chat-msg">                                <div class="direct-chat-info clearfix">                                    <span class="direct-chat-name pull-left">Franco Ugarte</span>                                    <span class="direct-chat-timestamp pull-right">23 Jan 5:37 pm</span>                                </div><!-- /.direct-chat-info -->                                <img class="direct-chat-img" src="<?php echo base_url(); ?>/images/images_perfil/<?php echo $imagen; ?>" alt="message user image"><!-- /.direct-chat-img -->                                <div class="direct-chat-text">                                    Muy bién y vos? Qué tal?                                </div><!-- /.direct-chat-text -->                            </div><!-- /.direct-chat-msg -->                            <!-- Message to the right -->                            <div class="direct-chat-msg right">                                <div class="direct-chat-info clearfix">                                    <span class="direct-chat-name pull-right">María Esther</span>                                    <span class="direct-chat-timestamp pull-left">23 Jan 6:10 pm</span>                                </div><!-- /.direct-chat-info -->                                <img class="direct-chat-img" src="<?php echo base_url(); ?>/images/images_perfil/<?php echo $imagen; ?>" alt="message user image"><!-- /.direct-chat-img -->                                <div class="direct-chat-text">                                    Pues acá, pasándola..                                </div><!-- /.direct-chat-text -->                            </div><!-- /.direct-chat-msg -->                        </div><!--/.direct-chat-messages-->                        <!-- Contacts are loaded here -->                        <div class="direct-chat-contacts"  style="height: 480px !important;">                            <ul class="contacts-list">                                <li>                                    <a href="#">                                        <img class="contacts-list-img" src="<?php echo base_url(); ?>/images/images_perfil/<?php echo $imagen; ?>">                                        <div class="contacts-list-info">                                <span class="contacts-list-name">                                  Franco Ugarte                                  <small class="contacts-list-date pull-right">2/28/2015</small>                                </span>                                            <span class="contacts-list-msg">Aquí el último msj...</span>                                        </div><!-- /.contacts-list-info -->                                    </a>                                </li><!-- End Contact Item -->                                <li>                                    <a href="#">                                        <img class="contacts-list-img" src="<?php echo base_url(); ?>/images/images_perfil/<?php echo $imagen; ?>">                                        <div class="contacts-list-info">                                <span class="contacts-list-name">                                  María Esther                                  <small class="contacts-list-date pull-right">2/23/2015</small>                                </span>                                            <span class="contacts-list-msg">Aquí el último msj...</span>                                        </div><!-- /.contacts-list-info -->                                    </a>                                </li><!-- End Contact Item -->                                <li>                                    <a href="#">                                        <img class="contacts-list-img" src="<?php echo base_url(); ?>/images/images_perfil/<?php echo $imagen; ?>">                                        <div class="contacts-list-info">                                <span class="contacts-list-name">                                  Dayton Martínez                                  <small class="contacts-list-date pull-right">2/20/2015</small>                                </span>                                            <span class="contacts-list-msg">Aquí el último msj...</span>                                        </div><!-- /.contacts-list-info -->                                    </a>                                </li><!-- End Contact Item -->                                <li>                                    <a href="#">                                        <img class="contacts-list-img" src="<?php echo base_url(); ?>/images/images_perfil/<?php echo $imagen; ?>">                                        <div class="contacts-list-info">                                <span class="contacts-list-name">                                  Salomón Delgado                                  <small class="contacts-list-date pull-right">2/10/2015</small>                                </span>                                            <span class="contacts-list-msg">Aquí el último msj...</span>                                        </div><!-- /.contacts-list-info -->                                    </a>                                </li><!-- End Contact Item -->                                <li>                                    <a href="#">                                        <img class="contacts-list-img" src="<?php echo base_url(); ?>/images/images_perfil/<?php echo $imagen; ?>">                                        <div class="contacts-list-info">                                <span class="contacts-list-name">                                  Reyna Rodríguez                                  <small class="contacts-list-date pull-right">1/27/2015</small>                                </span>                                            <span class="contacts-list-msg">Aquí el último msj...</span>                                        </div><!-- /.contacts-list-info -->                                    </a>                                </li><!-- End Contact Item -->                                <li>                                    <a href="#">                                        <img class="contacts-list-img" src="<?php echo base_url(); ?>/images/images_perfil/<?php echo $imagen; ?>">                                        <div class="contacts-list-info">                                <span class="contacts-list-name">                                  Guisell Matute                                  <small class="contacts-list-date pull-right">1/4/2015</small>                                </span>                                            <span class="contacts-list-msg">Aquí el último msj...</span>                                        </div><!-- /.contacts-list-info -->                                    </a>                                </li><!-- End Contact Item -->                            </ul><!-- /.contatcts-list -->                        </div><!-- /.direct-chat-pane -->                    </div><!-- /.box-body -->                    <div class="box-footer">                        <form action="#" method="post">                            <div class="input-group">                                <input type="text" name="message" placeholder="Responder..." class="form-control">                                <span class="input-group-btn">                                    <button type="button" class="btn btn-warning btn-flat">Enviar</button>                                </span>                            </div>                        </form>                    </div><!-- /.box-footer-->                </div>            </div>        </div>    </section></div> <!-- div Wraper --><!-- ***************** --><!-- Fin del Cuerpo --><!-- ***************** -->
<!-- ***************** -->
<!-- Inicio del Cuerpo -->
<!-- ***************** -->

<div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">
        <h1>
            Notificacion
            <small>Usuario aqui!!</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url().'notificaciones'; ?>"><i class="fa fa-bell"></i> Notificaciones </a></li>
            <!-- <li class="active">Dashboard</li> -->
        </ol>
    </section>

    <!--Cuerpo Gris-->
    <section class="content" style="padding-bottom: 50px !important;">
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    <!--Inicio de Panel Notificaciones-->
                    <div class="col-lg-12">
                        <div class="box box-primary">
                            <div class="box-header">
                                <i class="ion ion-clipboard"></i>
                                <h3 class="box-title">To Do List</h3>
                                <div class="box-tools pull-right">
                                    <ul class="pagination pagination-sm inline">
                                        <li><a href="#">&laquo;</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">&raquo;</a></li>
                                    </ul>
                                </div>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                <ul class="todo-list">
                                    <li>
                                        <!-- drag handle -->
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                        <!-- checkbox -->
                                        <input type="checkbox" value="" name=""/>
                                        <!-- todo text -->
                                        <span class="text">Design a nice theme</span>
                                        <!-- Emphasis label -->
                                        <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                                        <!-- General tools such as edit or delete-->
                                        <div class="tools">
                                            <i class="fa fa-edit"></i>
                                            <i class="fa fa-trash-o"></i>
                                        </div>
                                    </li>
                                    <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                        <input type="checkbox" value="" name=""/>
                                        <span class="text">Make the theme responsive</span>
                                        <small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                                        <div class="tools">
                                            <i class="fa fa-edit"></i>
                                            <i class="fa fa-trash-o"></i>
                                        </div>
                                    </li>
                                    <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                        <input type="checkbox" value="" name=""/>
                                        <span class="text">Let theme shine like a star</span>
                                        <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                                        <div class="tools">
                                            <i class="fa fa-edit"></i>
                                            <i class="fa fa-trash-o"></i>
                                        </div>
                                    </li>
                                    <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                        <input type="checkbox" value="" name=""/>
                                        <span class="text">Let theme shine like a star</span>
                                        <small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
                                        <div class="tools">
                                            <i class="fa fa-edit"></i>
                                            <i class="fa fa-trash-o"></i>
                                        </div>
                                    </li>
                                    <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                        <input type="checkbox" value="" name=""/>
                                        <span class="text">Check your messages and notifications</span>
                                        <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                                        <div class="tools">
                                            <i class="fa fa-edit"></i>
                                            <i class="fa fa-trash-o"></i>
                                        </div>
                                    </li>
                                    <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                        <input type="checkbox" value="" name=""/>
                                        <span class="text">Let theme shine like a star</span>
                                        <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>
                                        <div class="tools">
                                            <i class="fa fa-edit"></i>
                                            <i class="fa fa-trash-o"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- /.box-body -->
                            <div class="box-footer clearfix no-border">
                                <button class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="box box-warning direct-chat direct-chat-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">Chat Directo</h3>
                        <div class="box-tools pull-right">
                            <span data-toggle="tooltip" title="" class="badge bg-yellow" data-original-title="3 Nuevos mensajes">3</span>
                            <!--<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>-->
                            <button class="btn btn-box-tool" data-toggle="tooltip" title="" data-widget="chat-pane-toggle" data-original-title="Contactos"><i class="fa fa-comments"></i></button>
                            <!--<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>-->
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <!-- Conversations are loaded here -->
                        <div class="direct-chat-messages" style="height: 480px !important;">
                            <!-- Message. Default to the left -->
                            <div class="direct-chat-msg">
                                <div class="direct-chat-info clearfix">
                                    <span class="direct-chat-name pull-left">Franco Ugarte</span>
                                    <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                                </div><!-- /.direct-chat-info -->
                                <img class="direct-chat-img" src="<?php echo base_url(); ?>/images/images_perfil/<?php echo $imagen; ?>" alt="message user image"><!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    Hola!
                                </div><!-- /.direct-chat-text -->
                            </div><!-- /.direct-chat-msg -->

                            <!-- Message to the right -->
                            <div class="direct-chat-msg right">
                                <div class="direct-chat-info clearfix">
                                    <span class="direct-chat-name pull-right">María Esther</span>
                                    <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                                </div><!-- /.direct-chat-info -->
                                <img class="direct-chat-img" src="<?php echo base_url(); ?>/images/images_perfil/<?php echo $imagen; ?>" alt="message user image"><!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    Hola! como estás?
                                </div><!-- /.direct-chat-text -->
                            </div><!-- /.direct-chat-msg -->

                            <!-- Message. Default to the left -->
                            <div class="direct-chat-msg">
                                <div class="direct-chat-info clearfix">
                                    <span class="direct-chat-name pull-left">Franco Ugarte</span>
                                    <span class="direct-chat-timestamp pull-right">23 Jan 5:37 pm</span>
                                </div><!-- /.direct-chat-info -->
                                <img class="direct-chat-img" src="<?php echo base_url(); ?>/images/images_perfil/<?php echo $imagen; ?>" alt="message user image"><!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    Muy bién y vos? Qué tal?
                                </div><!-- /.direct-chat-text -->
                            </div><!-- /.direct-chat-msg -->

                            <!-- Message to the right -->
                            <div class="direct-chat-msg right">
                                <div class="direct-chat-info clearfix">
                                    <span class="direct-chat-name pull-right">María Esther</span>
                                    <span class="direct-chat-timestamp pull-left">23 Jan 6:10 pm</span>
                                </div><!-- /.direct-chat-info -->
                                <img class="direct-chat-img" src="<?php echo base_url(); ?>/images/images_perfil/<?php echo $imagen; ?>" alt="message user image"><!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    Pues acá, pasándola..
                                </div><!-- /.direct-chat-text -->
                            </div><!-- /.direct-chat-msg -->

                        </div><!--/.direct-chat-messages-->


                        <!-- Contacts are loaded here -->
                        <div class="direct-chat-contacts"  style="height: 480px !important;">
                            <ul class="contacts-list">
                                <li>
                                    <a href="#">
                                        <img class="contacts-list-img" src="<?php echo base_url(); ?>/images/images_perfil/<?php echo $imagen; ?>">
                                        <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Franco Ugarte
                                  <small class="contacts-list-date pull-right">2/28/2015</small>
                                </span>
                                            <span class="contacts-list-msg">Aquí el último msj...</span>
                                        </div><!-- /.contacts-list-info -->
                                    </a>
                                </li><!-- End Contact Item -->
                                <li>
                                    <a href="#">
                                        <img class="contacts-list-img" src="<?php echo base_url(); ?>/images/images_perfil/<?php echo $imagen; ?>">
                                        <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  María Esther
                                  <small class="contacts-list-date pull-right">2/23/2015</small>
                                </span>
                                            <span class="contacts-list-msg">Aquí el último msj...</span>
                                        </div><!-- /.contacts-list-info -->
                                    </a>
                                </li><!-- End Contact Item -->
                                <li>
                                    <a href="#">
                                        <img class="contacts-list-img" src="<?php echo base_url(); ?>/images/images_perfil/<?php echo $imagen; ?>">
                                        <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Dayton Martínez
                                  <small class="contacts-list-date pull-right">2/20/2015</small>
                                </span>
                                            <span class="contacts-list-msg">Aquí el último msj...</span>
                                        </div><!-- /.contacts-list-info -->
                                    </a>
                                </li><!-- End Contact Item -->
                                <li>
                                    <a href="#">
                                        <img class="contacts-list-img" src="<?php echo base_url(); ?>/images/images_perfil/<?php echo $imagen; ?>">
                                        <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Salomón Delgado
                                  <small class="contacts-list-date pull-right">2/10/2015</small>
                                </span>
                                            <span class="contacts-list-msg">Aquí el último msj...</span>
                                        </div><!-- /.contacts-list-info -->
                                    </a>
                                </li><!-- End Contact Item -->
                                <li>
                                    <a href="#">
                                        <img class="contacts-list-img" src="<?php echo base_url(); ?>/images/images_perfil/<?php echo $imagen; ?>">
                                        <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Reyna Rodríguez
                                  <small class="contacts-list-date pull-right">1/27/2015</small>
                                </span>
                                            <span class="contacts-list-msg">Aquí el último msj...</span>
                                        </div><!-- /.contacts-list-info -->
                                    </a>
                                </li><!-- End Contact Item -->
                                <li>
                                    <a href="#">
                                        <img class="contacts-list-img" src="<?php echo base_url(); ?>/images/images_perfil/<?php echo $imagen; ?>">
                                        <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Guisell Matute
                                  <small class="contacts-list-date pull-right">1/4/2015</small>
                                </span>
                                            <span class="contacts-list-msg">Aquí el último msj...</span>
                                        </div><!-- /.contacts-list-info -->
                                    </a>
                                </li><!-- End Contact Item -->
                            </ul><!-- /.contatcts-list -->
                        </div><!-- /.direct-chat-pane -->
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <form action="#" method="post">
                            <div class="input-group">
                                <input type="text" name="message" placeholder="Responder..." class="form-control">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-warning btn-flat">Enviar</button>
                                </span>
                            </div>
                        </form>
                    </div><!-- /.box-footer-->
                </div>
            </div>
        </div>
    </section>
</div>


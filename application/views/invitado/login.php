<!-- ATENCIOOOON:    FALTA VALIDAR LOS CORREOS, ESTAN MAL VALIDADOS --><!DOCTYPE html><html>  <head>    <meta charset="UTF-8">    <title>STD-UNI-ATD | Login</title>    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>    <!-- Bootstrap 3.3.2 -->    <link href="<?php echo base_url(); ?>styles/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    <!-- Font Awesome Icons -->    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />    <!-- Theme style -->    <link href="<?php echo base_url(); ?>styles/admin/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />    <!-- iCheck -->    <link href="<?php echo base_url(); ?>styles/admin/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />    <link href="<?php echo base_url(); ?>styles/admin/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css" />    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->    <!--[if lt IE 9]>        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>    <![endif]-->  </head>  <body class="login-page" style="      background: url(<?php echo base_url().'/images/fondostd.png'; ?>) no-repeat center center fixed !important;      background-size: cover;      -webkit-background-size: cover;      -moz-background-size: cover;      -o-background-size: cover; ">    <div class="login-box">      <div class="login-logo">      </div><!-- /.login-logo -->        <!-- login-box-body -->      <div class="box box-warning" style="padding: 10px;">        <div class="row">            <div class="col-xs-3">                <img src="<?php echo base_url(); ?>/images/logostd_640_480.png" class="img-circle img-responsive" />            </div>            <div class="col-xs-6">                <h3><b>STD-UNI-ATD</b></h3>            </div>            <div class="col-xs-3">                <img src="<?php echo base_url(); ?>/images/uni_640_480.jpg" class="img-responsive" style="margin-top: 20%" />            </div>        </div>        <p class="login-box-msg">Entre para iniciar una sesión</p>          <?php echo form_open('login/user/'); ?>          <div class="form-group has-feedback">            <input type="text" class="form-control" name="email" placeholder="Usuario"/>            <span class="glyphicon glyphicon-user form-control-feedback"></span>          </div>          <div class="form-group has-feedback">            <input type="password" class="form-control" name="password" placeholder="Contraseña"/>            <span class="glyphicon glyphicon-lock form-control-feedback"></span>          </div>          <div class="row">            <div class="col-xs-8">                  <div class="checkbox icheck">                <label>                  <input type="checkbox"> Recordarme                </label>              </div>                                    </div><!-- /.col -->            <div class="col-xs-4">              <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>            </div><!-- /.col -->          </div>          <div class="row">              <div class="col-xs-12 col-md-12 col-lg-12">                  <a href="#">He olvidado mi contraseña</a><br>              </div>          </div>          <div class="row">              <div class="col-xs-6 col-md-7 col-lg-7">                  <span>¿No estás afiliado aún?</span>              </div>              <div class="col-xs-6 col-md-5 col-lg-5">                  <!-- Button trigger modal -->                  <button type="button" class="btn btn-primary btn-block btn-flat" data-toggle="modal" data-target="#myModal">                      Solicitar Afiliación                  </button>              </div>          </div>          <?php if($usuario_invalido==1) { ?>              <div class="row">                  <div class="col-xs-12 col-md-12 col-lg-12">                      <div class="alert alert-danger alert-dismissable" style="margin-top: 10px !important;">                          <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>                          <h4><i class="icon fa fa-ban"></i> ¡Error!</h4>                          <?php echo $usuario_mensaje; ?>                      </div>                  </div>              </div>          <?php } ?>          <?php if($solicitud_enviada==1) { ?>              <div class="row">                  <div class="col-xs-12 col-md-12 col-lg-12">                      <div class="alert alert-success alert-dismissable" style="margin-top: 10px !important;">                          <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>                          <h4><i class="icon fa fa-check"></i> ¡Perfecto!</h4>                          <?php echo $usuario_mensaje; ?>                      </div>                  </div>              </div>          <?php } ?>        </form>        <!--        <div class="social-auth-links text-center">          <p>- OR -</p>          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>          <a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>        </div><!-- /.social-auth-links -->      </div><!-- /.login-box-body -->    </div><!-- /.login-box -->    <!-- Modal -->    <div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">        <div class="modal-dialog modal-lg">            <div class="modal-content">                <div class="modal-header">                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                    <h4 class="modal-title" id="myModalLabel">Hoja de Afiliación</h4>                </div>                <div class="modal-body">                    <!-- Hoja Afiliacion -->                    <?php echo form_open('solicitud/solicitar/'); ?>                        <div class="row" style="margin-top: 10px !important;">                            <div class="col-md-12"><span><strong>DATOS GENERALES:</strong></span></div>                        </div>                        <div class="row" style="margin-top: 10px !important;">                            <div class="col-md-2">                                Nombres(*):                            </div>                            <div class="col-md-10">                                <input name="nombre" type="text" class="form-control" placeholder="Nombres..." pattern="^([A-ZÁÉÍÓÚÑ]{1}[a-zñ]{1,49})$" required>                            </div>                        </div>                        <div class="row" style="margin-top: 10px !important;">                            <div class="col-md-2">                                Primer Apellido(*):                            </div>                            <div class="col-md-4">                                <input name="apellido1" type="text" class="form-control" placeholder="Primer apellido..." pattern="^([A-ZÁÉÍÓÚ]{1}[a-z]{1,49})$" required>                            </div>                            <div class="col-md-2">                                Segundo Apellido:                            </div>                            <div class="col-md-4">                                <input name="apellido2" type="text" class="form-control" placeholder="Segundo apellido..." pattern="^([A-ZÁÉÍÓÚ]{1}[a-z]{1,49})$">                            </div>                        </div>                        <div class="row" style="margin-top: 10px !important;">                            <div class="col-md-2">                                Cédula(*):                            </div>                            <div class="col-md-4">                                <input name="cedula" type="text" class="form-control" placeholder="###-######-####X" pattern="^([0-9]{3}\-[0-9]{6}\-[0-9]{4}[A-ZÑ]{1})$" required>                            </div>                            <div class="col-md-2">                                Profesión(*):                            </div>                            <div class="col-md-4">                                <select name="profesion" style="display: none;" class="selectpicker" data-live-search="true" data-width="100%">                                    <?php foreach($profesion as $fila): ?>                                        <option value="<?= $fila->nStbValorCatalogoID; ?>"><?= $fila->sDescripcion; ?></option>                                    <?php endforeach; ?>                                </select>                            </div>                        </div>                        <div class="row" style="margin-top: 10px !important;">                            <div class="col-md-2">                                Estado Civil(*):                            </div>                            <div class="col-md-4">                                <select name="estado_civil" style="display: none;" class="selectpicker" data-live-search="true" data-width="100%">                                    <?php foreach($estado_civil as $fila): ?>                                        <option value="<?= $fila->nStbValorCatalogoID; ?>"><?= $fila->sDescripcion; ?></option>                                    <?php endforeach; ?>                                </select>                            </div>                            <div class="col-md-2">                                INSS(*):                            </div>                            <div class="col-md-4">                                <input name="inss" type="text" class="form-control" placeholder="#########" pattern="^([0-9]{9})$" required>                            </div>                        </div>                        <div class="row" style="margin-top: 10px !important;">                            <div class="col-md-2">                                Dirección:                            </div>                            <div class="col-md-10">                                <input name="direccion" type="text" class="form-control" placeholder="Dirección...">                            </div>                        </div>                        <div class="row" style="margin-top: 10px !important;">                            <div class="col-md-2">                                Tel. Conv.:                            </div>                            <div class="col-md-4">                                <input name="tel" type="text" class="form-control" placeholder="####-####" pattern="^([0-9]{4}\-[0-9]{4})$">                            </div>                            <div class="col-md-2">                                Celular:                            </div>                            <div class="col-md-4">                                <input name="celular" type="text" class="form-control" placeholder="####-####" pattern="^([0-9]{4}\-[0-9]{4})$">                            </div>                        </div>                        <div class="row" style="margin-top: 10px !important;">                            <div class="col-md-2">                                Tel. UNI:                            </div>                            <div class="col-md-4">                                <input name="tel_uni" type="text" class="form-control" placeholder="####-####" pattern="^([0-9]{4}\-[0-9]{4})$">                            </div>                            <div class="col-md-2">                                Ext.:                            </div>                            <div class="col-md-4">                                <input name="ext" type="text" class="form-control" placeholder="###" pattern="^([0-9]{3,4})$">                            </div>                        </div>                        <div class="row" style="margin-top: 10px !important;">                            <div class="col-md-2">                                Email 1:                            </div>                            <div class="col-md-4">                                <input name="email1" type="text" class="form-control" placeholder="usuario@ejemplo.com" pattern="^([a-zA-Z0-9_-.]+)@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.)|(([a-zA-Z0-9-]+.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(]?)$">                            </div>                            <div class="col-md-2">                                Email 2:                            </div>                            <div class="col-md-4">                                <input name="email2" type="text" class="form-control" placeholder="usuario@ejemplo.com" pattern="^([a-zA-Z0-9_-.]+)@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.)|(([a-zA-Z0-9-]+.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(]?)$">                            </div>                        </div>                        <div class="row" style="margin-top: 10px !important;">                            <div class="col-md-12"><span><strong>DATOS ACADÉMICOS Y LABORALES:</strong></span></div>                        </div>                        <div class="row" style="margin-top: 10px !important;">                            <div class="col-md-2">                                Facultad(*):                            </div>                            <div class="col-md-4">                                <select name="facultad" style="display: none;" class="selectpicker" data-live-search="true" data-width="100%">                                    <?php foreach($facultad as $fila): ?>                                        <option value="<?= $fila->nStbValorCatalogoID; ?>"><?= $fila->sDescripcion; ?></option>                                    <?php endforeach; ?>                                </select>                            </div>                            <div class="col-md-2">                                Ubicación(*):                            </div>                            <div class="col-md-4">                                <select name="ubicacion" style="display: none;" class="selectpicker" data-live-search="true" data-width="100%">                                    <?php foreach($ubicacion as $fila): ?>                                        <option value="<?= $fila->nStbValorCatalogoID; ?>"><?= $fila->sDescripcion; ?></option>                                    <?php endforeach; ?>                                </select>                            </div>                        </div>                        <div class="row" style="margin-top: 10px !important;">                            <div class="col-md-2">                                Categoría Docente(*):                            </div>                            <div class="col-md-4">                                <select name="categoria" style="display: none;" class="selectpicker" data-live-search="true" data-width="100%">                                    <?php foreach($categoria as $fila): ?>                                        <option value="<?= $fila->nStbValorCatalogoID; ?>"><?= $fila->sDescripcion; ?></option>                                    <?php endforeach; ?>                                </select>                            </div>                            <div class="col-md-2">                                Grado Superior(*):                            </div>                            <div class="col-md-4">                                <select name="grado" style="display: none;" class="selectpicker" data-live-search="true" data-width="100%">                                    <?php foreach($grado as $fila): ?>                                        <option value="<?= $fila->nStbValorCatalogoID; ?>"><?= $fila->sDescripcion; ?></option>                                    <?php endforeach; ?>                                </select>                            </div>                        </div>                        <div class="row" style="margin-top: 10px !important;">                            <div class="col-md-2">                                Nómina UNI(*):                            </div>                            <div class="col-md-4">                                <input name="nomina_uni" type="text" class="form-control" placeholder="#####" pattern="^([0-9]{5,10})$" required="">                            </div>                            <div class="col-md-2">                                Ingreso UNI(*):                            </div>                            <div class="col-md-4">                                <div class="form-group">                                    <div class="input-group">                                        <div class="input-group-addon">                                            <i class="fa fa-calendar"></i>                                        </div>                                        <input name="fecha_ingreso" id="datemask" type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask required/>                                    </div>                                </div>                            </div>                        </div>                        <div class="row" style="margin-top: 10px !important;">                            <div class="col-md-2">                                Observaciones:                            </div>                            <div class="col-md-10">                                <input name="observaciones" type="text" class="form-control" placeholder="">                            </div>                        </div>                    <!-- Fin hoja afiliacion -->                </div>                <div class="modal-footer">                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>                    <button type="submit" class="btn btn-primary">Solicitar</button>                </div>                </form>            </div>        </div>    </div>    <!-- jQuery 2.1.3 -->    <script src="<?php echo base_url(); ?>styles/admin/plugins/jQuery/jQuery-2.1.3.min.js"></script>    <!-- Bootstrap 3.3.2 JS -->    <script src="<?php echo base_url(); ?>styles/admin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    <!-- iCheck -->    <script src="<?php echo base_url(); ?>styles/admin/plugins/iCheck/icheck.min.js" type="text/javascript"></script>    <script src="<?php echo base_url(); ?>styles/admin/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>    <script src="<?php echo base_url(); ?>styles/admin/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>    <script src="<?php echo base_url(); ?>styles/admin/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>    <!-- Select picker-->    <script src="<?php echo base_url(); ?>styles/admin/dist/js/bootstrap-select.min.js" type="text/javascript"></script>    <script>      $(function () {          $('.selectpicker').selectpicker('refresh');          $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/aaaa"});          $('input').iCheck({              checkboxClass: 'icheckbox_square-blue',              radioClass: 'iradio_square-blue',              increaseArea: '20%' // optional          });      });    </script>  </body></html>
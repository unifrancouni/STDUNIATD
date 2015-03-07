<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <title>STD-UNI-ATD</title>
  <link rel="shortcut icon" href="/STDUNIATD/images/favicon.ico">
  <meta name="viewport" content="Width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="/STDUNIATD/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/STDUNIATD/css/boostrap.min.css">
  <script src="/STDUNIATD/js/jquery.min.js"></script>
  <script src="/STDUNIATD/js/bootstrap.min.js"></script>
</head>

<script>
$(document).ready(function() {
  $('#olvidado').click(function(e) {
    e.preventDefault();
    $('div#form-olvidado').toggle('500');
  });
  $('#acceso').click(function(e) {
    e.preventDefault();
    $('div#form-olvidado').toggle('500');
  });
});
</script>

<div class="col-md-6" style="background-color: #e7e7e7; box-shadow: 1px 1px 2px #000000; margin-top:100px; margin-bottom:100px; margin-left:300px; margin-right:300px; min-width: 200px; padding-top:10px; border-radius: 20px;">
<div class="row">
  <div class="col-md-6">
    <img src="/STDUNIATD/images/logostd_640_480.png" class="img-circle img-responsive" />
  </div>
  <div class="col-md-6">
    <img src="/STDUNIATD/images/uni_640_480.jpg" class="img-rounded img-responsive" style="margin-top: 10px;float: right"/>
  </div>
</div>
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <h4 style="border-bottom: 1px solid #c5c5c5;color:#003472 !important;">
      <i class="glyphicon glyphicon-user" style="margin-bottom: 10px">
      </i style="color:#003472 !important;">
    <div style="margin: 5px">ACCESO STD-UNI-ATD</div>
      </h4>
        <div style="padding: 5px;" id="form-olvidado">
          <form accept-charset="UTF-8" role="form" id="login-form" method="post">
            <fieldset>
              <div class="form-group input-group">
                <span class="input-group-addon">
                  @
                </span>
                <input class="form-control" placeholder="Email" name="email" type="email" required="" autofocus="">
              </div>
              <div class="form-group input-group">
                <span class="input-group-addon">
                  <i class="glyphicon glyphicon-lock">
                  </i>
                </span>
                <input class="form-control" placeholder="Password" name="password" type="password" value="" required="">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">
                  Acceder
                </button>
                <p class="help-block">
                  <a class="pull-right text-muted" href="#" id="olvidado"><small>Olvidaste tu contraseña?</small></a>
                </p>
              </div>
            </fieldset>
          </form>
        </div>
        <div style="display: none;" id="form-olvidado">
          <h4 class="">
            Olvidaste tu contraseña?
          </h4>
          <form accept-charset="UTF-8" role="form" id="login-recordar" method="post">
            <fieldset>
              <span class="help-block">
                Dirección de correo electrónico que utiliza para iniciar sesión en su cuenta
                <br>
                Te enviaremos un correo electrónico con instrucciones para escoger una nueva contraseña.
              </span>
              <div class="form-group input-group">
                <span class="input-group-addon">
                  @
                </span>
                <input class="form-control" placeholder="Email" name="email" type="email" required="">
              </div>
              <button type="submit" class="btn btn-primary btn-block" id="btn-olvidado">
                Continuar
              </button>
              <p class="help-block">
                <a class="text-muted" href="#" id="acceso"><small>Acceso A La Cuenta</small></a>
              </p>
            </fieldset>
          </form>
        </div>
      </div>
	 </div>
</div>

</html>
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


--------------------

<div style="display: none;" id="form-olvidado">
          <h4 class="">
            Olvidaste tu contrase�a?
          </h4>


 <!-- <form accept-charset="UTF-8" role="form" id="login-recordar" method="post"> -->
          
          <?php echo form_open('login/email') ?>
            <fieldset>
              <span class="help-block">
                Direcci�n de correo electr�nico que utiliza para iniciar sesi�n en su cuenta
                <br>
                Te enviaremos un correo electr�nico con instrucciones para escoger una nueva contrase�a.
              </span>
              <div class="form-group input-group">
                <span class="input-group-addon">
                  @
                </span>
                <input class="form-control" placeholder="Email" name="email-recupera" type="email" required="">
              </div>
              <button type="submit" class="btn btn-primary btn-block" id="btn-olvidado">
                Continuar
              </button>
              <p class="help-block">
                <a class="text-muted" href="#" id="acceso"><small>Acceso A La Cuenta</small></a>
              </p>
            </fieldset>
          <!-- </form> -->


         
</div>



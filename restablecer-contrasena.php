<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php include('utileria/encabezados/encabezado-css.php'); ?>
  <link rel="stylesheet" type="text/css" media="screen" href="css/login-container.css">

  <!-- Título de la página -->
  <title> SecuenciaLab - Restablecer contraseña </title>
</head>
<body>

  <div class="container login-container">
    <div class="row">
      <div class="col-md-6 ads">
        <h1> <span id="fl">Secuencia</span><span id="sl">Lab</span> </h1>
        <h2> <span id="fl">Recupera tu contraseña</span></h2>
        <div id="mensajeRestablecerContrasena"></div>
      </div>
      <div class="col-md-6 login-form">
        <div class="profile-img">
          <img src="images/restore-password/forgot-password.png" alt="forgot_password" height="140px" width="140px">
        </div>

        <h3>Restaura tu contraseña en la plataforma</h3>
        <h5>Para poder restaurar su contraseña ingrese su ID de usuario y la respuesta correcta a la pregunta de seguridad.</h5>

        <form id="formRestarblecerContrasena" name= "formRestarContra" method="POST">
          <label for="claveUsuario"> <b> <i> Clave de usuario </i> </b> </label>
          <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
              <div class="input-group-text"> <i class="fas fa-user"></i> </div>
            </div>
            <input type="text" id="claveUsuario" name="claveUsuario" class="form-control" placeholder="Ej. 215862742" maxlength=9 required="required">
          </div>

          <label for="respuestaPreguntaSeg"> <b> <i> Respuesta </i> </b> </label>
          <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
              <div class="input-group-text"> <i class="fas fa-question-circle"></i> </div>
            </div>
            <input type="text" id="respuestaSeguridad" name="respuestaSeguridad" class="form-control" required="required">
          </div>

          <label for="nuevoPassword"> <b> <i> Nueva contraseña </i> </b> </label>
          <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
              <div class="input-group-text"> <i class="fas fa-lock"></i> </div>
            </div>
            <input type="password" id="nuevoPasswordUsuario" name="nuevoPasswordUsuario" class="form-control" required="required">
          </div>

          <label for="confirNuevoPassword"> <b> <i> Contraseña de nuevo </i> </b> </label>
          <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
              <div class="input-group-text"> <i class="fas fa-lock"></i> </div>
            </div>
            <input type="password" id="confirNuevoPassword" name="confirNuevoPassword" class="form-control" required="required">
          </div>

          <div class="float-right">
            <div class="input-group">
              <button class="btn btn-outline-success" type="submit" href="#">
                Recuperar
              </button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="page-footer font-small blue">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="https://secuenciaLab.com/"> secuenciaLab.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
  <?php include('utileria/encabezados/encabezado-js.php'); ?>

</body>
</html>

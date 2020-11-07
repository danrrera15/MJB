<!DOCTYPE html>
<html class="no-js" lang="es">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Maderas MJB</title>
    <meta name="description" content="Administrador de conteniDOS">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/sweetalert/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <style media="screen"> .login-logo{ padding: 30px; border-radius: 20px; background-color:#FFF; } </style>
  </head>

  <body class="bg-dark">
    <div class="sufee-login d-flex align-content-center flex-wrap">
      <div class="container">
        <div class="login-content">

          <div class="login-logo">
            <img class="align-content" src="images/logo-nav.png" alt=""/>
          </div>

          <div class="login-form">
            <form id="login-frm">
              <div class="form-group">
                <label>Usuario</label>
                <input name="email" type="text" class="form-control" placeholder="Usuario" required>
              </div>
              <div class="form-group">
                <label>Contraseña</label>
                <input name="password" type="password" class="form-control" placeholder="****************" required>
              </div>
              <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Entrar</button>
            </form>
          </div>

        </div>
      </div>
    </div>

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="vendors/sweetalert/dist/sweetalert2.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="js/functions.js"></script>
    <script type="text/javascript">
      jQuery('#login-frm').submit( function(event) {
        event.preventDefault();
        var datos = new FormData(jQuery(this)[0]);
        jQuery.ajax({
          url:'php/user.login.php',
          type:'POST',
          data:datos,
          cache:false,
          contentType:false,
          processData:false,
          success:function( response ) {
            var r = JSON.parse( response );
            if (r.success) {
              alerta('Acceso correcto!',r.msg,'success','Aceptar');
              setTimeout( function () { location.href = 'mng-inicio/'; }, 2500 );
            }
            else alerta('Error!',r.msg,'error','Aceptar');
          },
          error:function(){ alerta('Error!','No se pudo conectar al servidor, inténtelo más tarde','error','Aceptar'); }
        });
      });
    </script>

  </body>

</html>

<?php
  session_start();
  #$urlBase = 'https://www.maderasmatri.com/nw-admin/';
  $urlBase = 'http://127.0.0.1/mjb2/nw-admin/';
  if(empty($_SESSION['user'])) echo '<script>location.href="'.$urlBase.'";</script>';
?>
<!doctype html>
<html class="no-js" lang="es">
  <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Maderas MJB | Administrador de contenido</title>
    <meta name="description" content="Heedding | Administrador de contenido">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="https://maderasmatri.com/images/favicon.png">
    <link rel="stylesheet" href="<?=$urlBase?>vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=$urlBase?>vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=$urlBase?>vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?=$urlBase?>vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?=$urlBase?>vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?=$urlBase?>vendors/sweetalert/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="<?=$urlBase?>assets/css/style.css">
    <link rel="stylesheet" href="<?=$urlBase?>assets/css/estilos.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <script>var url='<?=$urlBase?>';</script>
    <script src="<?=$urlBase?>vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?=$urlBase?>vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?=$urlBase?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?=$urlBase?>vendors/sweetalert/dist/sweetalert2.min.js"></script>
    <script src="<?=$urlBase?>js/functions.js"></script>
  </head>

  <body>

    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
      <nav class="navbar navbar-expand-sm navbar-default">
        <div class="navbar-header">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
          </button>
          <a class="navbar-brand" href="./"><img src="<?=$urlBase?>images/logo-nav.png" alt="Logo"></a>
          <a class="navbar-brand hidden" href="./"><img src="<?=$urlBase?>images/logo-nav.png" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active">
              <a href="<?=$urlBase?>/mng-inicio"> <i class="menu-icon fa fa-dashboard"></i>&nbsp;&nbsp;Inicio</a>
            </li>
            <h3 class="menu-title">Contenido</h3><!-- /.menu-title -->
            <li><a href="<?=$urlBase?>mng-banner"><i class="menu-icon fa fa-picture-o"></i>&nbsp;&nbsp;Banner - Home</a></li>
            <li><a href="<?=$urlBase?>mng-somos"><i class="menu-icon fa fa-user"></i>&nbsp;&nbsp;Qui&eacute;nes somos</a></li>
            <li><a href="<?=$urlBase?>mng-productos"><i class="menu-icon fa fa-cubes"></i>&nbsp;&nbsp;Productos</a></li>
            <li><a href="<?=$urlBase?>mng-maquinaria"><i class="menu-icon fa fa-cogs"></i>&nbsp;&nbsp;Maquinaria</a></li>
            <li><a href="<?=$urlBase?>mng-blog"><i class="menu-icon fa fa-book"></i>&nbsp;&nbsp;Blog</a></li>
            <li><a href="<?=$urlBase?>mng-diapositivas"><i class="menu-icon fa fa-id-card"></i>&nbsp;&nbsp;Diapositivas</a></li>
            <!-- <li><a href="<?=$urlBase?>mng-cuadricula"><i class="menu-icon fa fa-th"></i>&nbsp;&nbsp;Cuadricula</a></li> -->
            <!-- <li><a href="<?=$urlBase?>mng-productos"><i class="menu-icon fa fa-cubes"></i>&nbsp;&nbsp;Productos</a></li> -->
            <!-- <li><a href="<?=$urlBase?>mng-somos"><i class="menu-icon fa fa-user"></i>&nbsp;&nbsp;Quiénes somos</a></li> -->
            <!-- <li><a href="<?=$urlBase?>mng-preguntas"><i class="menu-icon fa fa-question"></i>&nbsp;&nbsp;Preguntas Frecuentes</a></li> -->
            <!-- <li><a href="<?=$urlBase?>mng-ejecutivos"><i class="menu-icon fa fa-users"></i>&nbsp;&nbsp;Ejecutivos</a></li> -->
          </ul>

        </div><!-- /.navbar-collapse -->
      </nav>
    </aside><!-- /#left-panel -->
    <!-- Left Panel -->

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

      <!-- Header-->
      <header id="header" class="header">
        <div class="header-menu">
          <div class="col-sm-7">
            <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
          </div>

          <div class="col-sm-5">
            <div class="user-area dropdown float-right">
              <a   href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="user-avatar rounded-circle" src="<?=$urlBase?>images/user.png" alt="User Avatar">
              </a>
              <div class="user-menu dropdown-menu">
                <a class="nav-link" href="<?=$urlBase?>php/salir.php"><i class="fa fa-power-off"></i> Cerrar sesion</a>
              </div>
            </div>


          </div>
        </div>

      </header><!-- /header -->

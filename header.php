<?php require_once "nw-admin/data/contenido.php"; ?> 

<!--/ Nav Star /-->
<section class="fixed-top"><div style="height: 60px; background-color: #000;"></div></section>
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
      aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span></span>
      <span></span>
      <span></span>
      </button>

    <a href="<?=$urlBase?>home">
      <div id="logo" class="pull-left">
        <a href="<?=$urlBase?>home"><img src="<?=$urlBase?>img/logo-nav.png" alt="" title="" style="max-width: 170px;" /></a>
        <!-- Uncomment below if you prefer to use a text image -->
      </div>
    </a>
    <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
    data-target="#navbarTogglerDemo01" aria-expanded="false">
      <span class="fa fa-search" aria-hidden="true"></span>
    </button>
  <div class="navbar-collapse collapse justify-content-center" id="navbarDefault" style="background: #fff;">
    <ul class="navbar-nav" style="padding: 15px;">
      <li class="nav-item">
        <a class="nav-link active" href="<?=$urlBase?>home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=$urlBase?>somos">Nosotros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=$urlBase?>maquinaria">Maquinaria</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="<?=$urlBase?>catalogo" id="navbarDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          Catálogo
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php foreach ($prods as $p): ?>
            <a class="dropdown-item" href="<?=$urlBase?>producto/<?=$p['prod_url']?>"><?=$p['prod_nombre']?></a>
          <?php endforeach; ?>
          <!-- <a class="dropdown-item" href="<?=$urlBase?>catalogo">Productos</a>
          <a class="dropdown-item" href="<?=$urlBase?>triplay">Triplay</a>
          <a class="dropdown-item" href="#">MDF</a>
          <a class="dropdown-item" href="#">Aglomerados</a>
          <a class="dropdown-item" href="#">Laminados</a>
          <a class="dropdown-item" href="#">Melaminas</a>
          <a class="dropdown-item" href="#">Construcción</a>
          <a class="dropdown-item" href="#">Perfopanel</a>
          <a class="dropdown-item" href="#">Aglomerados</a>
          <a class="dropdown-item" href="#">Otros</a> -->
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?=$urlBase?>interaccion">Interacción</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?=$urlBase?>blog">Blog</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?=$urlBase?>contacto">Contacto</a>
    </li>
  </ul>
  </div>
  <div style="display: none;">
    <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
      <span class="fa fa-search" aria-hidden="true"></span>
    </button>
  </div>
  </div>
</nav>
<!--/ Nav End /-->

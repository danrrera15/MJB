  <?php 
  require_once "nw-admin/data/contenido.php"; 
  $urlBase = 'http://127.0.0.1/mjb2/';
  ?>

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single"><?=$producto['prod_nombre']?></h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="<?=$urlBase?>home">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="<?=$urlBase?>catalogo-general">Catálogo</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                <?=$producto['prod_nombre']?>
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Single Star /-->
  <section class="property-single nav-arrow-b" style="padding-bottom: 70px;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
            <div class="carousel-item-b">
              <img src="<?=$urlBase?>img\productos\<?=$producto['prod_imgmain']?>" alt="Imagen principal de catalogo MJB">
            </div>
            <div class="carousel-item-b">
              <img src="<?=$urlBase?>img\productos\<?=$producto['prod_imgslider']?>" alt="Imagen principal de catalogo MJB">
            </div>
          </div>
          <div class="row justify-content-between">
            <div class="col-md-5 col-lg-4">
              <div class="property-summary">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d section-t2">
                      <h3 class="title-d">Tipos:</h3>
                    </div>
                  </div>
                </div>
                <div class="summary-list">
                  <ul class="list">
                    <!-- AQUI VA LISTA-->
                    <?php foreach ($lista as $l): ?>
                      <li class="d-flex justify-content-between">
                        <strong>• <?=$l?></strong>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-7 col-lg-7 section-md-t3">
              <div class="row">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Descripción</h3>
                  </div>
                </div>
              </div>
              <div class="property-description">
                <div class="description color-text-a" align="justify">
                  <!--AQUI LA DESCRIPCION-->
                  <?=$producto['prod_descripcion']?>
                </div>
                <div style="padding: 15px;"></div>
                <div class="property-description">
                 <a href="<?=$urlBase?>contacto"><button type="submit" class="btn btn-a btncot"><i class="fa fa-envelope"></i>&nbsp; Solicitar Cotizaci&oacute;n</button></a>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!--/ Property Single End /-->




 <div class="container" style="padding-bottom: 70px;">

  <center><div class="col-sm-12">
    <div>
      <h3 class="title-d" style="color: #77b422">Alianzas Comerciales</h3>
      <br>
    </div>
  </div></center>

  <div class="row blog">
    <div class="col-md-12">
      <div id="blogCarousel" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
          <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#blogCarousel" data-slide-to="1"></li>
        </ol>

        <!-- Carousel items -->
        <div class="carousel-inner">

          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-3">
                <a href="#">
                  <img src="<?=$urlBase?>img/client1.png" alt="Image" style="max-width:100%;">
                </a>
              </div>
              <div class="col-md-3">
                <a href="#">
                  <img src="<?=$urlBase?>img/client2.png" alt="Image" style="max-width:100%;">
                </a>
              </div>
              <div class="col-md-3">
                <a href="#">
                  <img src="<?=$urlBase?>img/client3.png" alt="Image" style="max-width:100%;">
                </a>
              </div>
              <div class="col-md-3">
                <a href="#">
                  <img src="<?=$urlBase?>img/client4.png" alt="Image" style="max-width:100%;">
                </a>
              </div>
            </div>
            <!--.row-->
          </div>
          <!--.item-->

          <div class="carousel-item">
            <div class="row">
              <div class="col-md-3">
                <a href="#">
                  <img src="<?=$urlBase?>img/client2.png" alt="Image" style="max-width:100%;">
                </a>
              </div>
              <div class="col-md-3">
                <a href="#">
                  <img src="<?=$urlBase?>img/client3.png" alt="Image" style="max-width:100%;">
                </a>
              </div>
              <div class="col-md-3">
                <a href="#">
                  <img src="<?=$urlBase?>img/client4.png" alt="Image" style="max-width:100%;">
                </a>
              </div>
              <div class="col-md-3">
                <a href="#">
                  <img src="<?=$urlBase?>img/client5.png" alt="Image" style="max-width:100%;">
                </a>
              </div>
            </div>
            <!--.row-->
          </div>
          <!--.item-->

        </div>
        <!--.carousel-inner-->
      </div>
      <!--.Carousel-->

    </div>
  </div>
</div>

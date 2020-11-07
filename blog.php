<?php require_once "nw-admin/data/contenido.php"; ?>

<!--/ Intro Single star /-->
<section class="intro-single">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8">
        <div class="title-single-box">
          <h1 class="title-single">Blog MJB</h1>
          <span class="color-text-a">Noticias y articulos de interes.</span>
        </div>
      </div>
      <div class="col-md-12 col-lg-4">
        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?=$urlBase?>home">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Blog
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
<!--/ Intro Single End /-->

<!--/ News Grid Star /-->
<section class="news-grid grid" style="padding-bottom: 50PX;">
  <div class="container">
    <div class="row">
      <?php foreach ($blogs as $b): ?>
        <div class="col-md-4">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="<?=$urlBase?>img/blog/<?=$b['blg_img1']?>" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="#"><?=$b['blg_nombre']?></a>
                  </h2>
                </div>
                <div class="card-date">
                  <a href="<?=$urlBase?>blog-contenido/<?=$b['blg_url']?>" class="category-b">Ver más</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
      <!--
      <div class="col-md-4">
        <div class="card-box-b card-shadow news-box">
          <div class="img-box-b">
            <img src="img/post-1.jpg" alt="" class="img-b img-fluid">
          </div>
          <div class="card-overlay">
            <div class="card-header-b">
              <div class="card-category-b">
              </div>
              <div class="card-title-b">
                <h2 class="title-2">
                  <a href="#">Proceso de la obtención de la madera.</a>
                </h2>
              </div>
              <div class="card-date">
                <a href="blog-detalle.html" class="category-b">Ver más</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-box-b card-shadow news-box">
          <div class="img-box-b">
            <img src="img/post-2.jpg" alt="" class="img-b img-fluid">
          </div>
          <div class="card-overlay">
            <div class="card-header-b">
              <div class="card-category-b">
              </div>
              <div class="card-title-b">
                <h2 class="title-2">
                  <a href="#">Crea tus propios muebles.</a>
                </h2>
              </div>
              <div class="card-date">
                <a href="#" class="category-b">Ver más</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-box-b card-shadow news-box">
          <div class="img-box-b">
            <img src="img/post-3.jpg" alt="" class="img-b img-fluid">
          </div>
          <div class="card-overlay">
            <div class="card-header-b">
              <div class="card-category-b">
              </div>
              <div class="card-title-b">
                <h2 class="title-2">
                  <a href="#">Principales diferencias del MDF y Aglomerado.</a>
                </h2>
              </div>
              <div class="card-date">
                <a href="#" class="category-b">Ver más</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-box-b card-shadow news-box">
          <div class="img-box-b">
            <img src="img/post-4.jpg" alt="" class="img-b img-fluid">
          </div>
          <div class="card-overlay">
            <div class="card-header-b">
              <div class="card-category-b">
              </div>
              <div class="card-title-b">
                <h2 class="title-2">
                  <a href="#">Historia del Triplay</a>
                </h2>
              </div>
              <div class="card-date">
                <a href="#" class="category-b">Ver más</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-box-b card-shadow news-box">
          <div class="img-box-b">
            <img src="img/post-5.jpg" alt="" class="img-b img-fluid">
          </div>
          <div class="card-overlay">
            <div class="card-header-b">
              <div class="card-category-b">
              </div>
              <div class="card-title-b">
                <h2 class="title-2">
                  <a href="#">Pisos de maderas, la mejor opción</a>
                </h2>
              </div>
              <div class="card-date">
                <a href="#" class="category-b">Ver más</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-box-b card-shadow news-box">
          <div class="img-box-b">
            <img src="img/post-6.jpg" alt="" class="img-b img-fluid">
          </div>
          <div class="card-overlay">
            <div class="card-header-b">
              <div class="card-category-b">
              </div>
              <div class="card-title-b">
                <h2 class="title-2">
                  <a href="#">Renovación de casas, 10 tips.</a>
                </h2>
              </div>
              <div class="card-date">
                <a href="#" class="category-b">Ver más</a>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    </div>
 <!--    <div class="row">
      <div class="col-sm-12">
        <nav class="pagination-a">
          <ul class="pagination justify-content-end">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1">
                <span class="ion-ios-arrow-back"></span>
              </a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item active">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item next">
              <a class="page-link" href="#">
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div> -->
  </div>
</section>
  <!--/ News Grid End /-->
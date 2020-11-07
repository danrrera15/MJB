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
            <h1 class="title-single"><?=$blog_contenido['blg_nombre']?></h1>
            <span class="color-text-a">Articulos de interes.</span>
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
        <div class="col-md-12">
          <div class="">
            <img src="<?=$urlBase?>img\blog\<?=$blog_contenido['blg_img2']?>" alt="Blog MJB" class="img-fluid">
          </div>
          <div style="padding:15px"></div>
          <article align="justify">
            <?=$blog_contenido['blg_contenido']?>
          </article>        
        </div>
      </div> 
    </div>
  </section> 
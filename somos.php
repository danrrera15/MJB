   <?php require_once "nw-admin/data/contenido.php"; ?>

   <!--/ Intro Single star /-->
   <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ About Star /-->
  <section class="section-about">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="about-img-box">
            <img src="img/slide-about-1.jpg" alt="" class="img-fluid">
          </div>
          <div class="sinse-box">
            <h3 class="sinse-title">¿Quiénes somos?</h3>    
            <p><?=$contenido?></p>
          </div>
        </div>

        <div class="row" style="padding: 15px;">
          <div class="col-md-6 section-t4">
            <div class="row">
              <div class="col-sm-12">
                <div class="title-box-d">
                  <h3 class="title-d">Misión</h3>
                </div>
              </div>
            </div>
            <div class="property-description">
              <p class="description color-text-a">
                <?=$contenido_mision?>
              </p>
              <div class="title-box-d">
                <h3 class="title-d">Visión</h3>
              </div>
              <p class="description color-text-a no-margin">
                <?=$contenido_vision?>
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="tab-pane fade show active" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
              <iframe src="https://player.vimeo.com/video/331087012" width="100%" height="460" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ About End /-->

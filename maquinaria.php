 <?php require_once "nw-admin/data/contenido.php"; ?>
 
 <!--/ Intro Single star /-->
 <section class="intro-single">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8">
        <div class="title-single-box">
          <h1 class="title-single">Maquinaria</h1>
        </div>
      </div>
      <div class="col-md-12 col-lg-4">
        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?=$urlBase?>home">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="<?=$urlBase?>maquinaria">Maquinaria</a>
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
<!--/ Intro Single End /-->

<!--/ Agent Single Star /-->
<?php foreach ($maquinaria as $m): ?>
  <section class="agent-single">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="row">
            <div class="col-md-6">
              <div class="agent-avatar-box">
                <img src="<?=$urlBase?>img/maquinaria/<?=$m['maq_imagen']?>" alt="Maquinaria MJB" class="agent-avatar img-fluid">
              </div>
              <hr>
              <div class="tab-pane fade show active" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
                <!--AQUI VA VIDEO-->
                <?=$m['maq_video']?>
              </div>
            </div>
            <div class="col-md-5 section-md-t3">
              <div class="agent-info-box">
                <div class="agent-title">
                  <div class="title-box-d">
                    <h3 class="title-d"><?=$m['maq_nombre']?>
                    <br> <?=$m['maq_modelo']?></h3>
                  </div>
                </div>
                <div class="agent-content mb-3">
                  <p class="content-d color-text-a">
                    <!--AQUI VA DESCRIPCION-->
                    <?=$m['maq_descripcion']?>
                  </p>
                </div>

                <br>
                <hr>
                <div id="blogCarousel" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#blogCarousel" data-slide-to="1"></li>
                  </ol>
                  <!-- Carousel items -->
                  <div class="carousel-inner">
                    <div class="#">
                      <div class="row">

                        <div class="col-md-3">
                          <a href="#"  data-target="#m1" data-toggle="modal">
                            <img src="<?=$urlBase?>img/maquinaria/<?=$m['maq_img1']?>" alt="Image corte MJB" style="max-width:100%;">
                          </a>
                          <!-- Modal -->
                          <div class="modal fade" id="m1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-sm">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <img src="<?=$urlBase?>img/maquinaria/<?=$m['maq_img1']?>" alt="Image" style="max-width:100%;">
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--End Modal-->
                        </div>

                        <div class="col-md-3">
                          <a href="#">
                            <img src="<?=$urlBase?>img/maquinaria/<?=$m['maq_img2']?>" alt="Image mjb" data-target="#m2" data-toggle="modal" style="max-width:100%;">
                          </a>
                          <!-- Modal -->
                          <div class="modal fade" id="m2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-sm">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <img src="<?=$urlBase?>img/maquinaria/<?=$m['maq_img2']?>" alt="Image" style="max-width:100%;">
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--End Modal-->
                        </div>

                        <div class="col-md-3">
                          <a href="#" data-target="#m3" data-toggle="modal">
                            <img src="<?=$urlBase?>img/maquinaria/<?=$m['maq_img3']?>" alt="Image" style="max-width:100%;">
                          </a>
                          <!-- Modal -->
                          <div class="modal fade" id="m3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-sm">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <img src="<?=$urlBase?>img/maquinaria/<?=$m['maq_img3']?>" alt="Image" style="max-width:100%;">
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--End Modal-->
                        </div>

                        <div class="col-md-3" data-target="#m4" data-toggle="modal">
                          <a href="#">
                            <img src="<?=$urlBase?>img/maquinaria/<?=$m['maq_img4']?>" alt="Image" style="max-width:100%;">
                          </a>
                          <!-- Modal -->
                          <div class="modal fade" id="m4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-sm">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <img src="<?=$urlBase?>img/maquinaria/<?=$m['maq_img4']?>" alt="Image" style="max-width:100%;">
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--End Modal-->
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
        </div>
      </div>
    </div>
  </section>
  <br>
  <hr>
  <br> 
<?php endforeach; ?>
<!--/ Agent Single End /-->


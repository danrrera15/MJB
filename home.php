 <?php require_once "nw-admin/data/contenido.php"; ?>
 <!--/ Carousel Star /-->
 <div class="intro intro-carousel">
  <div id="carousel" class="owl-carousel owl-theme">
    <?php foreach ($banner as $b): ?>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(<?=$urlBase?>img/slider/<?=$b['slider_desk']?>)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                 <!--  <h1 class="intro-title mb-4">
                    <span class="color-b">MJB</span> Somos
                    <br>la fuente de tus proyectos.</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="<?=$urlBase?>catalogo"><span class="price-a">Productos</span></a>
                    </p> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<!--/ Carousel end /-->




<!--/ Property Star /-->
<section class="section-property section-b2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title-wrap d-flex justify-content-between">
        </div>
      </div>
    </div>
    <div id="property-carousel" class="owl-carousel owl-theme">
      <?php foreach ($diapos as $d): ?>
        <div class="carousel-item-b">
          <div class="card-box-a">
            <div class="img-box-a">
              <img src="<?=$urlBase?>img/diapositivas/<?=$d['diap_imagen']?>" alt="Diapositivas MJB" class="img-a img-fluid">
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!--/ Property End /-->


<!--/ News Star sectio  Blog /-->
<section class="section-news section-t3">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title-wrap d-flex justify-content-between">
          <div class="title-box">
            <h2 class="title-a">Blog últimas noticias</h2>
          </div>
          <div class="title-link">
            <a href="<?=$urlBase?>blog">Ver Blog
              <span class="ion-ios-arrow-forward"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div id="new-carousel" class="owl-carousel owl-theme">
      <?php foreach ($blogs as $b): ?>
        <div class="carousel-item-c">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="<?=$urlBase?>img/blog/<?=$b['blg_img1']?>" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="<?=$urlBase?>blog-contenido/<?=$b['blg_url']?>" class="category-b">Ver más</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="<?=$urlBase?>blog-contenido/<?=$b['blg_url']?>"><?=$b['blg_nombre']?></a>
                  </h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
</section>
<!--/ News End /-->

<section style="padding-bottom: 55px;">
  <div class="container">
    <div class="col-md-12">
      <div class="row section-t3">
        <div class="col-sm-12">
          <div class="title-box-d">
            <h3 class="title-d">Cuentanos tu proyecto</h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <img src="<?=$urlBase?>img/agent-4.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="property-agent">
            <h4 class="title-agent">MJB, somos especialistas en tableros de madera.</h4>
            <p class="color-text-a">
              Juan Escutia #500. Colonia Rio Bravo <br> CP 25220 Saltillo, Coah.
            </p>
            <ul class="list-unstyled">
              <li class="d-flex justify-content-between">
                <strong>Teléfono:</strong>
                <a href="tel:528444387100"><span class="color-text-a">+52(844)-438-71-00</span></a>
              </li>
              <li class="d-flex justify-content-between">
                <strong>Email:</strong>
                <a href="mailto:pablo@mjbtm.com"><span class="color-text-a">pablo@mjbtm.com</span></a>
              </li>
            </ul>
            <div class="socials-a" style="font-size: 25px;">
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a href="https://es-la.facebook.com/mjbtm" target="_blank">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://twitter.com/mjb_tm" target="_blank">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="">
                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <div class="property-contact">
            <form class="form-a" id="contacto_form" method="POST">
              <div class="row">
                <div class="col-md-12 mb-1">
                  <div class="form-group">
                    <input name="name" type="text" class="form-control form-control-lg form-control-a" id="inputName"
                    placeholder="Nombre *" required>
                  </div>
                </div>
                <div class="col-md-12 mb-1">
                  <div class="form-group">
                    <input name="subject" type="text" class="form-control form-control-lg form-control-a" id="inputphone"
                    placeholder="Asunto *" required>
                  </div>
                </div>
                <div class="col-md-12 mb-1">
                  <div class="form-group">
                    <input name="mail" type="email" class="form-control form-control-lg form-control-a" id="inputEmail1"
                    placeholder="Email *" required>
                  </div>
                </div>
                <div class="col-md-12 mb-1">
                  <div class="form-group">
                    <textarea name="message" id="textMessage" class="form-control" placeholder="Mensaje *" name="message" cols="45"
                    rows="8" required></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <button type="submit" class="btn btn-a" id="sendmail">Envíar</button>
                </div>
                <div id="resultado_form" style="color:red;"></div><!--Mandamos a llamar de ajax (enviarformulario.js) a la funcion "resultado_form" para las alertas-->
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

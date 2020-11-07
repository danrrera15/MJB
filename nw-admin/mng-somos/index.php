<?php
include "../php/header.php";
$file = file_get_contents("../../somos.json");
$somos = json_decode($file, true);
$contenido = $somos['contenido'];
$valores = $somos['valores'];

$file_mision = file_get_contents("../../mision.json");
$mision = json_decode($file_mision, true);
$contenido_mision = $mision['mision'];

$file_vision = file_get_contents("../../vision.json");
$vision = json_decode($file_vision, true);
$contenido_vision = $vision['vision'];
?>

<link href="<?=$urlBase?>vendors/fileinput/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css"/>

<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <form id="somos">

            <div class="card-header">
              <strong class="card-title">Editar contenido en seccion SOMOS</strong>
              <button id="btnsbmt1" type="submit" class="btn btn-primary btn-sm pull-right">
                <i class="fa fa-save"></i>&nbsp;Aceptar
              </button>
              <button id="btncncl1" type="reset" onclick="location.href='<?=$urlBase?>mng-somos'" class="btn btn-default btn-sm pull-right">
                <i class="fa fa-times"></i>&nbsp;Cancelar
              </button>
            </div>

            <div class="card-body">
              <div class="col-md-12">
                <div class="form-group">
                  <strong class="card-title">Editar texto <label style="background-color: yellow;">¿Quienes Somos?</label></strong>
                  <textarea name="contenido"><?=$contenido?></textarea>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-6">
                      <strong class="card-title">Editar texto de <label style="background-color: yellow;">Mision</label></strong>
                      <textarea name="mision"><?=$contenido_mision?></textarea>
                    </div>
                    <div class="col-sm-6">
                      <strong class="card-title">Editar texto de <label style="background-color: yellow;">Vision</label></strong>
                      <textarea name="vision"><?=$contenido_vision?></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <!-- <div class="row">
                      <textarea name="mision"><?=$contenido_mision?></textarea>
                    </div>
                    <div class="row">
                      <textarea name="vision"><?=$contenido_vision?></textarea>
                    </div> -->
                    <!--
                    <h4>Nuestros Valores</h4>
                    <div class="input-group">
                      <input type="text" class="form-control" name="valor[]" value="<?=$valores[0]['valor']?>" placeholder="Nombre del valor" required>
                      <span class="input-group-addon" style="padding:0">
                        <button type="button" class="btn btn-info" id="btnlista">
                          <i class="fa fa-plus"></i>
                        </button>
                      </span>
                    </div>
                    <textarea name="texto[]" rows="3" class="form-control" onkeypress="ValTexto(event)" placeholder="Texto corto" required><?=$valores[0]['texto']?></textarea>
                  </div>
                  <div id="items-lista">
                    <?php foreach ($valores as $k => $v): ?>
                    <?php if ($k == 0){ continue; } ?>
                    <div class="form-group">
                      <div class="input-group">
                        <input type="text" class="form-control" name="valor[]" value="<?=$v['valor']?>" required>
                        <span class="input-group-addon" style="padding:0">
                          <button type="button" class="btn btn-danger quitar">
                            <i class="fa fa-times"></i>
                          </button>
                        </span>
                      </div>
                      <textarea name="texto[]" rows="3" class="form-control" onkeypress="ValTexto(event)" required><?=$v['texto']?></textarea>
                    </div>
                    <?php endforeach; ?>
                  </div>
                </div>-->
              </div>
            </form>
          </div>
        </div>
      </div>
    </div><!-- .animated -->
  </div><!-- .content -->

  <script src="<?=$urlBase?>vendors/ckeditor/ckeditor.js" type="text/javascript"></script>
  <script src="<?=$urlBase?>vendors/ckfinder/ckfinder.js" type="text/javascript"></script>
  <script src="js/somos.js" type="text/javascript"></script>
  <script src="js/mision.js" type="text/javascript"></script>
  <script src="js/vision.js" type="text/javascript"></script>
  <?php include "../php/footer.php" ?>

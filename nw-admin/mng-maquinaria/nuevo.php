<?php include "../php/header.php"; ?>

<link href="<?=$urlBase?>vendors/fileinput/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css"/>

  <div class="content mt-3">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <form id="NwProd">

              <div class="card-header">
                <strong class="card-title">Agregar Maquinaria</strong>
                <button id="btnsbmt1" type="submit" class="btn btn-primary btn-sm pull-right">
                  <i class="fa fa-save"></i>&nbsp;Aceptar
                </button>
                <button id="btncncl1" type="reset" onclick="location.href='<?=$urlBase?>mng-maquinaria'" class="btn btn-default btn-sm pull-right">
                  <i class="fa fa-times"></i>&nbsp;Cancelar
                </button>
              </div>

              <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Nombre de la Maquina</label>
                      <input type="text" class="form-control" name="nombre" value="" required>
                    </div>
                    <div class="form-group">
                      <label>Modelo de maquinaria</label>
                      <input type="text" class="form-control" name="modelo" value="" required>
                    </div>
                    <div class="form-group"> 
                      <label>Embed de Video de Youtube</label>
                      <textarea type="text" class="form-control" name="video" value="" required></textarea>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="form-group">
                      <label>Contenido</label>
                      <textarea name="contenido"></textarea>
                    </div>
                  </div>
                </div>

                <div class="row">  
                  <div class="col-md-12">
                    <label>Imagen Principal</label> <label class="badge badge-warning" style="font-size: 12px;margin: 0;">1920px x 560px</label>
                    <input type="file" id="principal" name="principal" required>
                  </div>
                </div>
                <br><br>
                <div class="row">
                  <div class="col-md-3">
                    <label>Primer imagen de Slider</label> <label class="badge badge-warning" style="font-size: 12px;margin: 0;">320px x 265px</label>
                    <input type="file" id="m1" name="m1" >
                  </div>
                  <div class="col-md-3">
                    <label>Segunda imagen de Slider</label> <label class="badge badge-warning" style="font-size: 12px;margin: 0;">320px x 265px</label>
                    <input type="file" id="m2" name="m2">
                  </div>
                  <div class="col-md-3">
                    <label>Tercer imagen de Slider</label> <label class="badge badge-warning" style="font-size: 12px;margin: 0;">320px x 265px</label>
                    <input type="file" id="m3" name="m3">
                  </div>
                  <div class="col-md-3">
                    <label>Cuarta imagen de Slider</label> <label class="badge badge-warning" style="font-size: 12px;margin: 0;">320px x 265px</label>
                    <input type="file" id="m4" name="m4" >
                  </div>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div><!-- .animated -->
  </div><!-- .content -->

  <script src="<?=$urlBase?>vendors/fileinput/js/fileinput.js" type="text/javascript"></script>
	<script src="<?=$urlBase?>vendors/fileinput/js/locales/es.js" type="text/javascript"></script>
  <script src="<?=$urlBase?>vendors/ckeditor/ckeditor.js" type="text/javascript"></script>
	<script src="<?=$urlBase?>vendors/ckfinder/ckfinder.js" type="text/javascript"></script>
  <script src="js/nuevo.js" type="text/javascript"></script>

<?php include "../php/footer.php" ?>

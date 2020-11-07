<?php
require_once "../php/conexion.class.php";
require_once "model/blog.class.php";
include "../php/header.php";
$blog = new blog;
$p = $blog->getById($_GET['id']);
// $lista = explode(',',$p['prod_lista']);
?>
<script type="text/javascript">
  img1 = '../../img/blog/<?=$p['blg_img1']?>'
  img2 = '../../img/blog/<?=$p['blg_img2']?>';
</script>
<link href="<?=$urlBase?>vendors/fileinput/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css"/>

  <div class="content mt-3">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <form id="EdProd">
              <div class="card-header">
                <strong class="card-title">Actualizar Blog</strong>
                <button id="btnsbmt1" type="submit" class="btn btn-primary btn-sm pull-right">
                  <i class="fa fa-save"></i>&nbsp;Aceptar
                </button>
                <button id="btncncl1" type="reset" onclick="location.href='<?=$urlBase?>mng-blog'" class="btn btn-default btn-sm pull-right">
                  <i class="fa fa-times"></i>&nbsp;Cancelar
                </button>
              </div>

              <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Nombre del Blog</label>
                      <input type="hidden" name="id" value="<?=$p['blg_id']?>">
                      <input type="text" class="form-control" name="nombre" value="<?=$p['blg_nombre']?>">
                    </div>
                    <div class="form-group"> 
                      <label>Imagen principal del Blog</label> <label class="badge badge-warning" style="font-size: 12px;margin: 0;">320px x 265px</label>
                      <input type="file" id="img1" name="img1">
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="form-group">
                      <label>Contenido</label>
                      <textarea name="contenido"><?=$p['blg_contenido']?></textarea>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <label>Imagen de contenido del Blog</label> <label class="badge badge-warning" style="font-size: 12px;margin: 0;">1080px x 720px</label>
                    <input type="file" id="img2" name="img2" >
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
  <script src="js/editar.js" type="text/javascript"></script>

<?php include "../php/footer.php" ?>

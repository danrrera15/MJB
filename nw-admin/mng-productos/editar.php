<?php
require_once "../php/conexion.class.php";
require_once "model/productos.class.php";
include "../php/header.php";
$productos = new productos;
$p = $productos->getById($_GET['id']);
$lista = explode(',',$p['prod_lista']);
?>
<script type="text/javascript">
  main = '../../img/productos/<?=$p['prod_imgmain']?>';
  home = '../../img/productos/<?=$p['prod_imghome']?>';
  slider = '../../img/productos/<?=$p['prod_imgslider']?>';
</script>
<link href="<?=$urlBase?>vendors/fileinput/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css"/>

  <div class="content mt-3">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <form id="EdProd">

              <div class="card-header">
                <strong class="card-title">Actualizar Producto</strong>
                <button id="btnsbmt1" type="submit" class="btn btn-primary btn-sm pull-right">
                  <i class="fa fa-save"></i>&nbsp;Aceptar
                </button>
                <button id="btncncl1" type="reset" onclick="location.href='<?=$urlBase?>mng-productos'" class="btn btn-default btn-sm pull-right">
                  <i class="fa fa-times"></i>&nbsp;Cancelar
                </button>
              </div>

              <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Producto</label>
                      <input type="hidden" name="id" value="<?=$p['prod_id']?>">
                      <input type="text" class="form-control" name="nombre" value="<?=$p['prod_nombre']?>" required>
                    </div>
                    <div class="form-group">
                      <label>Lista lateral</label>
                      <div class="input-group">
                        <input type="text" class="form-control" name="lista[]" value="<?=$lista[0]?>" required>
                        <span class="input-group-addon" style="padding:0">
                          <button type="button" class="btn btn-info" id="btnlista">
                            <i class="fa fa-plus"></i>
                          </button>
                        </span>
                      </div>
                      <div id="items-lista">
                        <?php foreach ($lista as $k => $v): ?>
                        <?php if ($k == 0){ continue; } ?>
                        <div class="input-group">
                          <input type="text" class="form-control" name="lista[]" value="<?=$v?>" required>
                          <span class="input-group-addon" style="padding:0">
                            <button type="button" class="btn btn-danger quitar">
                              <i class="fa fa-times"></i>
                            </button>
                          </span>
                        </div>
                        <?php endforeach; ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="form-group">
                      <label>Contenido</label>
                      <textarea name="contenido"><?=$p['prod_descripcion']?></textarea>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-4">
                    <label>Imagen principal</label> <label class="badge badge-warning" style="font-size: 12px;margin: 0;">1920px x 560px</label>
                    <input type="file" id="main" name="main">
                  </div>
                  <div class="col-md-4">
                    <label>Imagen cuadrícula</label> <label class="badge badge-warning" style="font-size: 12px;margin: 0;">600px x 720px</label>
                    <input type="file" id="home" name="home">
                  </div>
                  <div class="col-md-4">
                    <label>Imagen slider</label> <label class="badge badge-warning" style="font-size: 12px;margin: 0;">320px x 265px</label>
                    <input type="file" id="slider" name="slider">
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
